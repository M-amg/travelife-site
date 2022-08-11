<?php

namespace App\Services;

use App\models\ATSFlight as ATS;
use App\models\ATSFlight\PassengerTypeEnum;
use App\models\config\TlAtsVol;
use App\models\config\TlMarkUp;
use App\models\flight\TlCarrier;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Throwable;

class FlightService
{

    private $limit;
    private $currency;
    private $lang;

    protected $ATS_USERNAME;
    protected $ATS_PASSWORD;
    protected $ATS_PCC;
    protected $CRS_USER;
    protected $PCC_SUPPLIER;

    public function __construct($limit = 1000, $currency = "MAD", $lang = "FR")
    {
        $this->limit = $limit;
        $this->currency = $currency;
        $this->lang = $lang;

        $s = TlMarkUp::where("name", "like", "Api_Flight")->first()->status ?? false;

        $fapi_creds = $s ? TlAtsVol::first() : null;

        if ($fapi_creds) {
            $this->ATS_USERNAME = $fapi_creds->ATS_USERNAME;
            $this->ATS_PASSWORD = $fapi_creds->ATS_PASSWORD;
            $this->ATS_PCC = $fapi_creds->ATS_PCC;
            $this->CRS_USER = $fapi_creds->CRS_USER;
            $this->PCC_SUPPLIER = $fapi_creds->PCC_SUPPLIER;
        } else {
            // TODO throw here
        }
    }


    public function ListFlights($destinations, $passengers, $class = "All")
    {
        // destinations config
        $request_legs = [];
        foreach ($destinations as $destination) {
            if (isset($destination["departure"])) {
                // TODO Revert this back, and get the right format from front-end
                $date = \DateTime::createFromFormat('d/m/Y H:i:s', $destination["date"] . " 00:00:00");
                $leg = new ATS\FareRequestLeg();
                $leg->setDepartureDate($date);
                $leg->setDepartures([$destination["departure"]]);
                $leg->setArrivals([$destination["arrival"]]);
                $leg->setClass($class);
                $leg->setArrivalSearchRadius(0);
                $leg->setDepartureSearchRadius(0);
                $request_legs[] = $leg;
            }
        }


        // passengers config
        if ($passengers["adults"] > 0)
            $reqPassengers[] = new ATS\FareRequestPassenger($passengers["adults"], PassengerTypeEnum::Adult);
        if ($passengers["infants"] > 0)
            $reqPassengers[] = new ATS\FareRequestPassenger($passengers["infants"], PassengerTypeEnum::Infant);
        if ($passengers["children"] > 0)
            $reqPassengers[] = new ATS\FareRequestPassenger($passengers["children"], PassengerTypeEnum::Child);

        $webFares = new ATS\FareRequestWeb();
        $webFares->setNumberOfWebFares($this->limit);

        $GDSFares = new ATS\RequestGDSData('Published', $this->limit);

        $fare = new ATS\FareRequestFare();
        $fare->setGDSFares($GDSFares);
        $fare->setWeb($webFares);

        $crsList = [];
        $crsData = new ATS\CRSData(0);
        // TODO replace this with the appropriate field from database
        $crsData->setGDS($this->PCC_SUPPLIER);
        $crsData->setTerminalPCC($this->ATS_PCC);
        $crsData->setTerminalCountry('MA');
        $crsData->setUseMultiChannel(false);
        $crsList[] = $crsData;


        $configuration = new ATS\FareRequestConfiguration();
        // api 4.0
        $configuration->setCRSSettings($crsList);
        // $configuration->setCRSConfig($crs);
        $configuration->setCurrencyCode($this->currency);
        $configuration->setAdditionalDetails("None");
        $configuration->setAllowWaitList(false);
        $configuration->setLanguageCode($this->lang);

        //$carriers=new FareRequestCarrier("AT");

        $requestData = new ATS\FareRequestData();
        $requestData->setCarriers([]);
        $requestData->setConfiguration($configuration);
        $requestData->setFare($fare);
        $requestData->setLegs($request_legs);
        $requestData->setPassengers($reqPassengers);


        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;

        $loginData = new ATS\LoginData();
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        $loginData->setTransactionID($generated_id);

        $fareRequest = new ATS\GetFares($loginData, $requestData);


        $flightAPI = new ATS\FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => 1, 'exceptions' => 0]);
        $response = $flightAPI->GetFares($fareRequest);

        // writing xml to files
        $this->xmlFiles("list", $flightAPI, $generated_id);

        $results = $response->getGetFaresResult();
        $number = $results->getNumberOfFares();
        $transactionID = $results->getResponseInfo()->getTransactionID();
        $responseFares = $results->getFares()->getFareResponseFare() ?? [];

        $fares = [];
        foreach ($responseFares as $fare) {
            // TODO provide this in the api
            $carrier = TlCarrier::where('code', $fare->getFlight()->getLegs()[0]->getCarrierCode())->first();
            if ($carrier) {
                if ($carrier->status == 1) {
                    $f = array();
                    $f['source'] = $fare->getSource();
                    $f['id'] = $fare->getID();
                    $f['class'] = $fare->getFlight()->getLegs()[0]->getConnections()[0]->getSegments()[0]->getCabinClassName();

                    $passengerTypes = $fare->getFlight()->getPassengers();

                    $prices = [];
                    foreach ($passengerTypes as $passengerType) {
                        $prices[] = [
                            'passengerType' => $passengerType->getPassengerType(),
                            'value' => $passengerType->getEquivalentEndconsumerBuy()->getValue(),
                            'currency' => $passengerType->getEquivalentEndconsumerBuy()->getCurrencyCode(),
                            'tax' => $passengerType->getEquivalentTotalTax()->getValue(),
                        ];

                        $currencyCode = $passengerType->getEndconsumerBuy()->getCurrencyCode();
                    }

                    $f['prices'] = $prices;
                    $f['currency_code'] = $fare->getPriceDetails()->getEquivalentTotalFlightPrice()->getCurrencyCode();
                    $flight = $fare->getFlight();
                    $legs = $flight->getLegs();
                    $f['legs'] = array();
                    foreach ($legs as $leg) {
                        $leg_tmp = array();
                        // changement
                        $leg_tmp['carrierCode'] = $leg->getCarrierCode();
                        $recordset = $leg->getRecordset();
                        foreach ($leg->getConnections() as $connection) {
                            $connection_tmp = array();
                            foreach ($connection->getSegments() as $segment) {
                                $tmp_segment = array();
                                // $routingInfo = $leg->getRoutingInfo();
                                // $departure = $routingInfo->getDeparture();
                                // $arrival = $routingInfo->getArrival();
                                $tmp_segment['dep_airport'] = $segment->getDeparture();
                                $tmp_segment['arr_airport'] = $segment->getArrival();
                                $tmp_segment['dep_date'] = $segment->getDepartureDateTime()->format('c');
                                $tmp_segment['arr_date'] = $segment->getArrivalDateTime()->format('c');
                                $tmp_segment['carrier'] = $segment->getCarrierCode();

                                $carrier_c = $segment->getCarrierCode();

                                $tmp_segment['flight_number'] = $segment->getFlightNumber();
                                $tmp_segment['cabin_class'] = $segment->getCabinClassName();
                                $tmp_segment['booking_class'] = $segment->getBookingClass();
                                $tmp_segment['baggage'] = $segment->getFreeBaggageAllowance();
                                $tmp_segment['mileage'] = $segment->getSegmentMileage();
                                $tmp_segment['travel_time'] = $segment->getTravelTime();
                                $tmp_segment['equipmentCode'] = $segment->getEquipmentCode();
                                $tmp_segment['equipmentName'] = $segment->getEquipmentName();

                                $connection_tmp['segments'][] = $tmp_segment;
                            }
                            $leg_tmp['AvailString'] = $connection->getAvailString();
                            $leg_tmp['LegTravelTime'] = $connection->getLegTravelTime();
                            $leg_tmp['selectedConnection'] = '0';
                            $leg_tmp['connections'][] = $connection_tmp;
                        }
                        $f['legs']["RecordSet"] = $recordset;
                        $f['legs']['list'][] = $leg_tmp;
                    }
                    //$f['terms_url'] = action('FlightController@terms', ['carrier' => $carrier_c, 'language' => 'EN']);
                    $fares[] = $f;
                }
            }
        }


        return [
            "fares" => $fares,
            "number" => $number,
            "transactionID" => $transactionID,
        ];

    }

    public function bookFlight($passengers, $source, $recordSet, $contactInfo, $pLegs, $carrier, $availString)
    {
        $legs = [];

        foreach ($pLegs as $key => $vol) {
            $segments = [];
            foreach ($vol["escal"] as $escal) {
                $segment = new ATS\BookRequestSegment();
                $segment->setArrival($escal["airportArr"]);
                $segment->setArrivalDateTime(new \DateTime($escal["arr"]));
                $segment->setBookingClass($escal["class"]);
                $segment->setCarrier($escal["carrier"]);
                $segment->setDeparture($escal["airportDep"]);
                $segment->setDepartureDateTime(new \DateTime($escal["dep"]));
                $segment->setFlightNumber($escal["flight"]);
                // $segment->setAllotmentConfig($allotmentConfig);
                $segments[] = $segment;
            }
            $leg = new ATS\BookRequestLeg();
            $leg->setCarrierCode($carrier);
            $leg->setAvailString($availString[$key]);
            $leg->setSegments($segments);
            $legs[] = $leg;
        }


        $bookPassengers = [];
        $types = [
            "adults" => PassengerTypeEnum::Adult,
            "children" => PassengerTypeEnum::Child,
            "infants" => PassengerTypeEnum::Infant,
        ];
        foreach ($types as $key => $type) {

            foreach ($passengers[$key] ?? [] as $passenger) {
                $gender = $passenger['title'] === 'Mr' ? 'Male' : 'Female';
                $bookPassenger = new ATS\BookRequestPassenger($gender, $type);
                $bookPassenger->setTitle($passenger['title']);
                $bookPassenger->setLastName($passenger['lastName']);
                $bookPassenger->setFirstName($passenger['firstName']);
                // TODO make this dynamic
                $bookPassenger->setNationality("MA");
                $dob = $passenger['dob'];
                $bookPassenger->setDOB($dob);
                $apis = new ATS\APISDetails($dob);
                $apis->setFirstName($passenger['firstName']);
                $apis->setLastName($passenger['lastName']);
                $apis->setGender($gender);
                $apis->setPassportNumber($passenger['passportNumber']);
                // TODO make this dynamic
                $apis->setNationality('MA');
                $bookPassenger->setAPISs([$apis]);
                $bookPassengers[] = $bookPassenger;
            }
        }
        // TODO Verify all these numbers and send the proper ones
        $email = new ATS\PhoneDetails();
        // TODO the docs say we should send the client email but we'll send the agent email for now
        $email->setNumber($contactInfo["email"]);
        $email->setType(ATS\ContactTypeEnum::Email);
        $phoneNumbers[] = $email;
        $phoneNumber = new  ATS\PhoneDetails();
        // TODO make this dynamic
        $phoneNumber->setNumber('212629324002');
        $phoneNumber->setType(ATS\ContactTypeEnum::Agent);
        $phoneNumbers[] = $phoneNumber;
        $phoneNumber2 = new  ATS\PhoneDetails();
        // TODO make this dynamic
        $phoneNumber2->setNumber('212629324002');
        $phoneNumber2->setType(ATS\ContactTypeEnum::Mobile);
        $phoneNumbers[] = $phoneNumber2;

        $contact = new ATS\Contact();
        $contact->setGender($contactInfo["gender"]);
        $contact->setCity($contactInfo["city"]);
        $contact->setCountry($contactInfo["country"]);
        $contact->setFirstName($contactInfo["firstName"]);
        $contact->setLastName($contactInfo["lastName"]);
        $contact->setPhoneNumbers($phoneNumbers);
        $contact->setStreet($contactInfo["street"]);
        $contact->setTitle($contactInfo["title"]);
        $contact->setZipCode($contactInfo["zipCode"]);


        $allotment = new ATS\AllotmentAccount();
        $allotmentConfig = new ATS\AllotmentRequest("All", "All");
        $allotmentConfig->setAccount($allotment);
        $allotmentConfig->setIdentifier("");

        $CRSConfig = new ATS\BookRequestCRSConfiguration();
        $CRSConfig->setCRSName($this->PCC_SUPPLIER);
        // TODO make this dynamic
        $CRSConfig->setReceivedFrom("NanoPlus");
        // TODO make this dynamic
        $CRSConfig->setTerminalCountry("MA");
        $CRSConfig->setTerminalPCC($this->ATS_PCC);

        $configuration = new ATS\BookRequestConfiguration('Unknown');
        // TODO make this dynamic
        $configuration->setAgencyPhone("065577884477");
        // TODO make this dynamic
        $configuration->setClientBusinessPhone("065577884477");
        // TODO make this dynamic
        $configuration->setClientHomePhone("065577884477");
        // TODO make this dynamic
        $configuration->setLanguageCode("FR");
        $configuration->setRecordSet($recordSet);
        $configuration->setIsLiveBooking(true);
        $configuration->setCRSConfig($CRSConfig);
        $configuration->setDeliveryDetails($contact);
        $configuration->setSetPastDateSegment(false);
        // TODO make this dynamic
        $configuration->setAdminEMailAddresses(['nabil@nanoweb.ma']);
        if ($source === 'WebFare' || $source === 'WebSource') {
            $bookRequestWebFare = new ATS\BookRequestWebFare;
            $configuration->setWebFare($bookRequestWebFare);
        }

        $bookingRequestData = new ATS\BookRequestData($source); // ??
        $bookingRequestData->setConfiguration($configuration);
        // TODO make this dynamic
        $bookingRequestData->setCurrency("MAD");
        $bookingRequestData->setLegs($legs);
        $bookingRequestData->setPassengers($bookPassengers);
        $bookingRequestData->setSource($source);
        $bookingRequestData->setRecordSet($recordSet);
        $bookingRequestData->setStoreFareQuoteType(ATS\StoreFareQuoteTypeEnum::StoreFareQuote);
        $bookingRequestData->setTicketingType(ATS\TicketingTypeEnum::ElectronicTicketing);
        $bookingRequestData->setPlatingCarrier($carrier);

        //TODO save payment to database and get the id to send in paymentdefinitiondata
        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
        $paymentID = $generated_id;

        if ($source === 'WebFare' || $source === 'WebSource') {
            $paymentDefinitionData = new ATS\PaymentDefinitionData($paymentID, ATS\PaymentTypeEnum::CreditCard);
            $bookingRequestData->setPaymentData($paymentDefinitionData);
        }

        $loginData = new ATS\LoginData;
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        $loginData->setTransactionID($generated_id);

        $booking = new ATS\BookFare($loginData, $bookingRequestData);


        $flightAPI = new ATS\FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => 1, 'exceptions' => 0]);
        $response = $flightAPI->BookFare($booking);
        // writing xml to files
        Storage::disk('local')->put("xml/ats/" . (new \DateTime())->format('Y-m-d') . "/book/book_" . $generated_id . '_request.xml', $flightAPI->__getLastRequest());
        Storage::disk('local')->put("xml/ats/" . (new \DateTime())->format('Y-m-d') . "/book/book_" . $generated_id . '_response.xml', $flightAPI->__getLastResponse());

        $result = $response->getBookFareResult();

        return [
            "generated_id" => $generated_id,
            "recordLocator" => $result->getRecordLocator(),
            "totalPrice" => $result->getTotalPrice()->getValue(),
            "currency" => $result->getTotalPrice()->getCurrencyCode(),
        ];
    }

    public function modifyBooking(
        string $source,
        string $lastName,
        string $recordLocator,
        array $_SSRs = [],
        array $_OSIs = []
    )
    {
        $SSRs = [];
        foreach ($_SSRs as $s) {
            $SSR = new ATS\SSRRequestData();
            $SSR->setCode($s["code"]);
            $SSR->setPassengerSelection($s["passengerNumbers"]);
            $SSR->setSegments($s["segmentNumbers"]);
            $SSR->setFreeText($s["text"] ?? "");
            $SSRs[] = $SSR;
        }

        $OSIs = [];
        foreach ($_OSIs as $s) {
            $OSI = new ATS\OSIRequestData();
            $OSI->setPassengerSelection($s["passengerNumbers"]);
            $OSI->setCarrierCode($s["carrierCode"]);
            $OSI->setFreeText($s["text"] ?? "");
            $OSIs[] = $OSI;
        }

        $CRSConfig = new ATS\BookRequestCRSConfiguration();
        $CRSConfig->setCRSName($this->PCC_SUPPLIER);
        // TODO make this dynamic
        $CRSConfig->setReceivedFrom("NanoPlus");
        // TODO make this dynamic
        $CRSConfig->setTerminalCountry("MA");
        $CRSConfig->setTerminalPCC($this->ATS_PCC);

        $modifyBookingData = new ATS\ModifyRequestData($source);
        $modifyBookingData->setSSRs($SSRs);
        $modifyBookingData->setCRSConfig($CRSConfig);
        $modifyBookingData->setCustomerLastName($lastName); // only GDS
        $modifyBookingData->setRecordLocator($recordLocator);
        $modifyBookingData->setOSIs($OSIs);

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;

        $loginData = new ATS\LoginData;
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        $loginData->setTransactionID($generated_id);

        $modifyBooking = new ATS\ModifyBooking($loginData, $modifyBookingData);

        $flightAPI = new ATS\FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => 1, 'exceptions' => 0]);
        $response = $flightAPI->ModifyBooking($modifyBooking);

        try {
            Storage::disk('local')->put("xml/ats/modifyBooking/modifyBooking_" . $generated_id . '_request.xml', $flightAPI->__getlastrequest());
            Storage::disk('local')->put("xml/ats/modifyBooking/modifyBooking_" . $generated_id . '_response.xml', $flightAPI->__getlastresponse());
        } catch (Exception $ex) {
            Log::debug($ex);
        }

        $result = $response->getModifyBookingResult();

        $services = [];
        foreach ($result->getServices() as $service) {
            $services[] = [
                "status" => $service->getStatus(),
                "errorText" => $service->getErrorText(),
                "text" => $service->getText(),
            ];
        }
        return [
            "services" => $services,
        ];
    }

    public function bookTicket($passengers, $carrier, $source, $record, $passengerLastName)
    {
        $crs = new ATS\CRS();
        $crs->setCRSName($this->PCC_SUPPLIER);
        // TODO make this dynamic
        $crs->setTerminalCountry('MA');
        $crs->setTerminalPCC($this->ATS_PCC);
        // TODO make this dynamic
        $crs->setReceivedFrom("NanoPlus");
        $crs->setUser($this->CRS_USER);

        $passengersList = [];
        foreach ($passengers as $p) {
            $passenger = new ATS\TicketBookingRequestPassenger($p["type"]);
            $passenger->setFirstName($p["firstName"]);
            $passenger->setLastName($p["lastName"]);
            $passenger->setGender($p["gender"]);
            $passenger->setIssueOptions("Tickets");
            $passenger->setPaymentSelection(0);
            $passenger->setTicketEMDs([]);
            $passenger->setIncludeOPC(false);
            $passengersList[] = $passenger;
        }

        $commission = new ATS\TicketBookingRequestCommission(0);
        $commission->setOverwriteIfElementsExist(false);
        $commission->setType("None");

        $endorsement = new ATS\TicketBookingRequestPaxText;
        $endorsement->setOverwriteIfExist(false);

        $payementForm = new ATS\TicketBookingRequestPayment(0, "Cash");
        $payementForm->setWantApprovalCode(false);
        $payementForm->setOverwriteIfElementsExist(false);
        $payementForm->setPaymentNumber(0);
        $payementForm->setCreditCardNumberIsEncoded(false);
        $payementForm->setCreditCardCVCNumberIsEncoded(false);
        $payementForm->setBankAccountNumberIsEncoded(false);

        $tourCode = new ATS\TicketBookingRequestPaxText;
        $tourCode->setOverwriteIfExist(false);

        $ticketIssue = new ATS\TicketBookingRequestIssue;
        $ticketIssue->setIssuePassengers($passengersList);
        $ticketIssue->setValidatingCarrier($carrier);
        $ticketIssue->setCommission($commission);
        $ticketIssue->setEndorsement($endorsement);
        $ticketIssue->setFormOfPayments([$payementForm]);
        $ticketIssue->setIssueSegments(array());
        $ticketIssue->setTourcode($tourCode);

        $ticketBookingRequestData = new ATS\TicketBookingRequestData($source);
        $ticketBookingRequestData->setCRSConfig($crs);
        $ticketBookingRequestData->setRecordLocator($record);
        $ticketBookingRequestData->setPassengerLastName($passengerLastName);
        $ticketBookingRequestData->setTicketIssueDetails($ticketIssue);
        $ticketBookingRequestData->setIssueFareType("IssueStoredFare");
        $ticketBookingRequestData->setRequestGDSItinerary(false);

        $loginData = new ATS\LoginData;
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        // TODO make this more reliable / relative and incremental
        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
        $loginData->setTransactionID($generated_id);
        $tiket = new ATS\TicketBooking($loginData, $ticketBookingRequestData);
        $flightAPI = new ATS\FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => 0]);
        $response = $flightAPI->TicketBooking($tiket);

        Storage::disk('local')->put("xml/ats/ticketBooking_" . $generated_id . '_request.xml', $flightAPI->__getlastrequest());
        Storage::disk('local')->put("xml/ats/ticketBooking_" . $generated_id . '_response.xml', $flightAPI->__getlastresponse());

        $ticket_passengers = $response->getTicketBookingResult()->getPassengers() ?? [];

        $passengers = [];
        foreach ($ticket_passengers as $passenger) {
            $segmentDetails = $passenger->getTicketDetails()->getSegmentDetails();
            $segments = [];
            foreach ($segmentDetails as $segment) {
                $segments[] = [
                    "arrivalTerminal" => $segment->getArrivalTerminal(),
                    "departureTerminal" => $segment->getDepartureTerminal(),
                    "departureDateTime" => $segment->getDepartureDateTime(),
                ];
            }
            $passengers[] = [
                "ticketNumbers" => $passenger->getTicketDetails()->getTicketNumbers(),
                "passengerType" => $passenger->getPassengerDetails()->getPassengerType(),
                "firstName" => $passenger->getPassengerDetails()->getFirstName(),
                "lastName" => $passenger->getPassengerDetails()->getLastName(),
                "segments" => $segments,
            ];
        }


        return [
            "passengers" => $passengers,
        ];
    }

    public function cancelBooking($source, $record, $carrier, $customerLastName, $agencyPhone)
    {
        $crs = new ATS\CRS();
        $crs->setCRSName($this->PCC_SUPPLIER);
        // TODO make this dynamic
        $crs->setTerminalCountry('MA');
        $crs->setTerminalPCC($this->ATS_PCC);
        // TODO make this dynamic
        $crs->setReceivedFrom("NanoPlus");
        $crs->setUser($this->CRS_USER);

        $configuration = new ATS\CancelRequestConfiguration;
        $configuration->setAgencyPhone($agencyPhone);
        $configuration->setCurrencyCode($this->currency);
        $configuration->setLanguageCode($this->lang);

        $cancelRequest = new ATS\CancelRequestData($source);
        $cancelRequest->setCRSConfig($crs);
        $cancelRequest->setRecordLocator($record);
        $cancelRequest->setConfiguration($configuration);
        $cancelRequest->setIsAllotment(false);
        $cancelRequest->setCustomerLastName($customerLastName);
        $cancelRequest->setCarrierCode($carrier);

        $loginData = new ATS\LoginData;
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        // TODO make this more reliable / relative and incremental
        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
        $loginData->setTransactionID($generated_id);
        $cancel = new ATS\CancelBooking($loginData, $cancelRequest);

        try {
            $flightAPI = new ATS\FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true]);
            $response = $flightAPI->CancelBooking($cancel);
        } finally {
            Storage::disk('local')->put("xml/ats/cancel_" . $generated_id . '_request.xml', $flightAPI->__getlastrequest());
            Storage::disk('local')->put("xml/ats/cancel_" . $generated_id . '_response.xml', $flightAPI->__getlastresponse());
        }

        return $response;
    }

    public function cancelTicket($ticketNumber, $source, $record)
    {

        $crs = new ATS\CRS();
        $crs->setCRSName($this->PCC_SUPPLIER);
        // TODO make this dynamic
        $crs->setTerminalCountry('MA');
        $crs->setTerminalPCC($this->ATS_PCC);
        // TODO make this dynamic
        $crs->setReceivedFrom("NanoPlus");
        $crs->setUser($this->CRS_USER);

        $cancelTicket = new ATS\CancelTicketRequestTicket;
        $cancelTicket->setFirstTicketNumber($ticketNumber);

        $cancelRequest = new ATS\CancelTicketRequestData($source);
        $cancelRequest->setCRSConfig($crs);
        $cancelRequest->setRecordLocator($record);
        $cancelRequest->setTickets([$cancelTicket]);

        $loginData = new ATS\LoginData;
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        // TODO make this more reliable / relative and incremental
        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
        $loginData->setTransactionID($generated_id);
        $cancel = new ATS\CancelTicket($loginData, $cancelRequest);
        $flightAPI = new ATS\FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => 0]);
        $response = $flightAPI->CancelTicket($cancel);

        Storage::disk('local')->put("xml/ats/cancelTicket_" . $generated_id . '_request.xml', $flightAPI->__getlastrequest());
        Storage::disk('local')->put("xml/ats/cancelTicket_" . $generated_id . '_response.xml', $flightAPI->__getlastresponse());

        $res_tickets = $response->getCancelTicketResult()->getTickets();
        $tickets = [];
        foreach ($res_tickets as $t) {
            $tickets[] = [
                "status" => $t->getStatusCode(),
                "error" => $t->getErrorText(),
            ];
        }

        return [
            "tickets" => $tickets,
        ];
    }

    public function terms($source, $carrier, $recordSet, $passengerCounts, $legData)
    {

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;

        $loginData = new ATS\LoginData;
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        $loginData->setTransactionID($generated_id);

        $html = "";

        if ($source == "WebSource") {
            if (sizeof($carrier) == 1) {
                $termsRequest = new ATS\TermsAndConditionsRequestData($source);
                $termsRequest->setCarrierCode($carrier);
                $termsRequest->setLanguageCode($this->lang);

                $getTermsAndConditions = new ATS\GetTermsAndConditions($loginData, $termsRequest);

                $flightAPI = new ATS\FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => 1, 'exceptions' => 0]);
                try {
                    $response = $flightAPI->GetTermsAndConditions($getTermsAndConditions);
                } catch (Throwable $ex) {
                    return back()->withError("Couldn't accomplish this operation");
                }
                Storage::disk('local')->put("xml/ats/Terms_" . $generated_id . '_request.xml', $flightAPI->__getLastRequest());
                Storage::disk('local')->put("xml/ats/Terms_" . $generated_id . '_response.xml', $flightAPI->__getLastResponse());
                $html = "<p>" . $response->getGetTermsAndConditionsResult()->getText() . "</p>";
            }

        } elseif ($source === "IBESource" || $source === "GDSSource") {

            $passengers = [];
            for ($i = 0; $i < $passengerCounts["adults"]; $i++) {
                $passenger = new ATS\RuleTextRequestPassenger(PassengerTypeEnum::Adult);
                $passengers[] = $passenger;
            }

            for ($i = 0; $i < $passengerCounts["infants"]; $i++) {
                $passenger = new ATS\RuleTextRequestPassenger(PassengerTypeEnum::Infant);
                $passengers[] = $passenger;
            }

            for ($i = 0; $i < $passengerCounts["children"]; $i++) {
                $passenger = new ATS\RuleTextRequestPassenger(PassengerTypeEnum::Child);
                $passengers[] = $passenger;
            }

            $legs = [];
            foreach ($legData as $leg) {
                $ruleSegments = [];
                foreach ($leg['escal'] as $segment) {
                    $dateDepart = new \DateTime($segment["dep"]);
                    $timeDepart = 'PT' . $dateDepart->format('H') . 'H' . $dateDepart->format('i') . 'M';
                    $dateArrever = new \DateTime($segment["arr"]);
                    $timeArrever = 'PT' . $dateArrever->format('H') . 'H' . $dateArrever->format('i') . 'M';
                    $ruleSegment = new ATS\RuleTextRequestSegment($dateArrever, $timeArrever, $dateDepart, $timeDepart);
                    $ruleSegment->setArrival($segment["airportArr"]);
                    $ruleSegment->setBookingClass($segment["class"]);
                    $ruleSegment->setCarrierCode($segment["carrier"]);
                    $ruleSegment->setDeparture($segment["airportDep"]);
                    $ruleSegment->setFlightNumber($segment["flight"]);
                    $ruleSegments[] = $ruleSegment;
                }
                $ruleLeg = new ATS\RuleTextRequestLeg();
                $ruleLeg->setSegments($ruleSegments);
                $legs[] = $ruleLeg;
            }

            $crs = new ATS\CRS();
            $crs->setCRSName($this->PCC_SUPPLIER);
            // TODO make this dynamic
            $crs->setTerminalCountry('MA');
            $crs->setTerminalPCC($this->ATS_PCC);
            // TODO make this dynamic
            $crs->setReceivedFrom("NanoPlus");
            $crs->setUser($this->CRS_USER);

            $coditionRequest = new ATS\RuleTextRequestData($source);
            $coditionRequest->setCharter(null);
            $coditionRequest->setCRSConfig($crs);
            // TODO make this dynamic
            $coditionRequest->setLanguageCode("FR");
            $coditionRequest->setLegs($legs);
            $coditionRequest->setPassengers($passengers);
            $coditionRequest->setRecordSet($recordSet);

            $ruleInformation = new ATS\GetRuleInformationText($loginData, $coditionRequest);

            $flightAPI = new ATS\FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => 1, 'exceptions' => 0]);
            try {
                $response = $flightAPI->GetRuleInformationText($ruleInformation);
            } catch (Throwable $ex) {
                return back()->withError("Couldn't accomplish this operation");
            }
            Storage::disk('local')->put("xml/ats/Terms_" . $generated_id . '_request.xml', $flightAPI->__getLastRequest());
            Storage::disk('local')->put("xml/ats/Terms_" . $generated_id . '_response.xml', $flightAPI->__getLastResponse());

            $terms = $response->getGetRuleInformationTextResult()->getRules();

            foreach ($terms as $rule) {
                foreach ($rule->getTitles() as $title) {
                    $t = $title->getText();
                    $html .= "<h5><b>$t</b></h5>";
                    foreach ($title->getLines() as $line) {
                        $l = $line->getText();
                        if (!empty($l)) {
                            $html .= "<p style='margin: 0'>$l<br/></p>";
                        }
                    }
                    $html .= "<hr>";
                }

            }
        }

        return $html;
    }

    public function getPNR($source, $record, $carrier, $lastName, $departureTime)
    {
        $status = null;

        $crs = new ATS\CRS();
        $crs->setCRSName($this->PCC_SUPPLIER);
        // TODO make this dynamic
        $crs->setTerminalCountry('MA');
        $crs->setTerminalPCC($this->ATS_PCC);
        // TODO make this dynamic
        $crs->setReceivedFrom("NanoPlus");
        $crs->setUser($this->CRS_USER);

        $pnrRequest = new ATS\PNRRequestData($source);
        $pnrRequest->setCRSConfig($crs);
        $pnrRequest->setCustomerLastName($lastName);

        if ($source == "WebSource") {
            // TODO Ask Lahcen why is this here
            return $status;
            $web = new ATS\PNRRequestWeb(new \DateTime($departureTime));
            $web->setCarrierCode($carrier);
            // TODO make this dynamic
            $web->setCurrencyCode("MAD");

            $pnrRequest->setWeb($web);
        }

        $pnrRequest->setRecordLocator($record);
        $pnrRequest->setStoredFareDetails(true);
        $pnrRequest->setTicketDetails(true);

        // TODO make this more reliable / relative and incremental
        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;

        $loginData = new ATS\LoginData();
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        $loginData->setTransactionID($generated_id);

        $Retrieve = new ATS\RetrievePassengerNameRecord($loginData, $pnrRequest);
        $flightAPI = new ATS\FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => 1, 'exceptions' => 0]);

        try {
            $response = $flightAPI->RetrievePassengerNameRecord($Retrieve);
        } catch (Throwable $ex) {
            return back()->withError("Couldn't accomplish this operation");
        }

        Storage::disk('local')->put("xml/ats/PNR/" . $generated_id . '_GetPNR__request.xml', $flightAPI->__getLastRequest());
        Storage::disk('local')->put("xml/ats/PNR/" . $generated_id . '_GetPNR_response.xml', $flightAPI->__getLastResponse());

        if (isset($response->getRetrievePassengerNameRecordResult()->getInfos()[0])) {
            $status = $response->getRetrievePassengerNameRecordResult()->getInfos()[0]->getBookingStatus();
        }

        $result = $response->getRetrievePassengerNameRecordResult();
        $passengers = [];
        foreach ($result->getPassengers() as $passenger) {
            $passengers[] = [
                "number" => $passenger->getPassengerNumber(),
                "firstName" => $passenger->getFirstName(),
                "lastName" => $passenger->getName(),
                "dob" => $passenger->getDateOfBirth(),
            ];
        }

        $segments = [];
        foreach ($result->getSegments() as $segment) {
            $segments[] = [
                "number" => $segment->getSegmentNumber(),
                "departure" => $segment->getDeparture(),
                "arrival" => $segment->getArrival(),
                "departureDate" => $segment->getDepartureDate(),
                "arrivalDate" => $segment->getArrivalDate(),
                "flightNumber" => $segment->getFlightNumber(),
            ];
        }

        return [
            "status" => $result->getInfos()[0]->getBookingStatus() ?? null,
            "passengers" => $passengers,
            "segments" => $segments,
        ];
    }

    private function xmlFiles($method, $data, $generated_id)
    {
        Storage::disk('local')->put("xml/ats/" . (new \DateTime())->format('Y-m-d') . "/$method/" . $generated_id . '_GetFares__request.xml', $data->__getLastRequest());
        Storage::disk('local')->put("xml/ats/" . (new \DateTime())->format('Y-m-d') . "/$method/" . $generated_id . '_GetFares_response.xml', $data->__getLastResponse());
    }


}
