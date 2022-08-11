<?php

namespace App\Http\Controllers;

use Dompdf\Exception;
use App\models\TlCity;
use Illuminate\Http\Request;
use App\models\ATSFlight\CRS;
use App\models\page\TlSlider;
use App\models\flight\Airport;
use App\models\agency\TlAgency;
use App\models\config\TlMarkUp;
use App\models\flight\TlCarrier;
use App\models\ATSFlight\Contact;
use App\models\ATSFlight\CRSData;
use App\models\bookFlightAPI\Leg;
use App\models\ATSFlight\BookFare;
use App\models\ATSFlight\GetFares;
use App\models\book\TlCommandLine;
use App\models\ATSFlight\FlightAPI;
use App\models\ATSFlight\LoginData;
use App\models\ATSFlight\FeesFlight;
use App\models\flight\TlFlightPromo;
use Illuminate\Support\Facades\Auth;
use App\models\bookFlightAPI\ApiFare;
use App\models\bookFlightAPI\Segment;
use App\models\ATSFlight\PhoneDetails;
use App\models\bookFlightAPI\FareBook;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\models\ATSFlight\BookRequestLeg;
use App\models\ATSFlight\FareRequestLeg;
use App\models\ATSFlight\FareRequestWeb;
use App\models\ATSFlight\RequestGDSData;
use App\models\ATSFlight\BookRequestData;
use App\models\ATSFlight\ContactTypeEnum;
use App\models\ATSFlight\FareRequestData;
use App\models\ATSFlight\FareRequestFare;
use App\models\ATSFlight\AllotmentAccount;
use App\models\ATSFlight\AllotmentRequest;
use App\models\ATSFlight\GetPaymentMethods;
use App\models\ATSFlight\TicketingTypeEnum;
use App\models\ATSFlight\BookRequestSegment;
use App\models\ATSFlight\BookRequestWebFare;
use App\models\ATSFlight\PaymentRequestData;
use App\models\ATSFlight\RuleTextRequestLeg;
use App\models\ATSFlight\RuleTextRequestData;
use App\models\ATSFlight\BookRequestPassenger;
use App\models\ATSFlight\FareRequestPassenger;
use App\models\ATSFlight\GetTermsAndConditions;
use App\models\ATSFlight\PaymentDefinitionData;
use App\models\ATSFlight\GetRuleInformationText;
use App\models\ATSFlight\RuleTextRequestSegment;
use App\models\ATSFlight\StoreFareQuoteTypeEnum;
use App\Http\Controllers\Manage\customer\Customer;
use App\models\ATSFlight\BookRequestConfiguration;
use App\models\ATSFlight\FareRequestConfiguration;
use App\models\ATSFlight\RuleTextRequestPassenger;
use App\models\ATSFlight\BookRequestCRSConfiguration;
use App\models\ATSFlight\TermsAndConditionsRequestData;
use App\models\config\TlAtsVol;

class FlightController extends Controller
{
    private $ATS_USERNAME ;
    private $ATS_PASSWORD ;
    private $ATS_PCC ;
    private $CRS_USER ;
    private $PCC_SUPPLIER;

    public function __construct()
    {
        parent::__construct();
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


    public function index()
    {
        $flights = TlFlightPromo::all()->sortBy('id')->take(3);
        $slides = TlSlider::all()->where('property', 'vol')->where('status', 1)->take(3);
        return view('front.flight.index')
            ->with('slides', $slides)
            ->with('flights', $flights);
    }

    public function flights(Request $request)
    {
        $this->validate($request, [
            'dep' => 'required',
            'arr' => 'required',
        ]);
        $marge = 1 + (TlMarkUp::all()->find(1)->B2C / 100);


        $dep_airport = $request->input('dep');
        $arr_airport = $request->input('arr');
        $codeContinent = Airport::all()->where('AirportCode', $arr_airport)->first()->ContinentCode;
        $fees = FeesFlight::all()->where('ContinentCode', $codeContinent)->first();



        if ($dep_airport == $arr_airport)
            return back();
        $date = $request->input('dateDepart');
        $dateFlight = $request->input('dateFlight');
        $nbr_adults = $request->input('adult');
        $nbr_infant = $request->input('baby');
        $nbr_child = $request->input('infant');
        $class = $request->input('class');
        $flight_type = $request->input('typeVol');
        if (empty($class)) {
            $class = "All";
        }
        $round_trip = false;

        if ($flight_type == 'AR') {
            $this->validate($request, [
                'dateFlight' => 'required',
            ]);
            $feesPriceEco = $fees->price_ar_eco;
            $feesPriceBus = $fees->price_ar_bus;
            $round_trip = true;
            $date = explode(" - ", $dateFlight);

            $datetime = \DateTime::createFromFormat('d/m/Y H:i:s', $date[0] . " 00:00:00");
            $ret_datetime = \DateTime::createFromFormat('d/m/Y H:i:s', $date[1] . " 00:00:00");


        } else {
            $this->validate($request, [
                'dateDepart' => 'required',
            ]);

            $feesPriceEco = $fees->price_as_eco;
            $feesPriceBus = $fees->price_as_bus;
            $datetime = \DateTime::createFromFormat('d/m/Y H:i:s', $date . " 00:00:00");
        }

        // TODO don't forget to verify manage exceptions for the input might be wrong
        $request_legs = [];


        $leg = new FareRequestLeg();
        $leg->setDepartureDate($datetime);
        $leg->setDepartures([$dep_airport]);
        $leg->setArrivals([$arr_airport]);
        $leg->setClass($class);
        $leg->setArrivalSearchRadius(0);
        $leg->setDepartureSearchRadius(0);

        $request_legs[] = $leg;

        if ($round_trip) {
            $return_leg = new FareRequestLeg;
            $return_leg->setDepartureDate($ret_datetime);
            $return_leg->setDepartures([$arr_airport]);
            $return_leg->setArrivals([$dep_airport]);
            $return_leg->setClass($class);
            $return_leg->setArrivalSearchRadius(0);
            $return_leg->setDepartureSearchRadius(0);

            $request_legs[] = $return_leg;
        }


        if ($nbr_adults > 0)
            $passanger[] = new FareRequestPassenger($nbr_adults, 'Adult');
        if ($nbr_infant > 0)
            $passanger[] = new FareRequestPassenger($nbr_infant, 'Infant');
        if ($nbr_child > 0)
            $passanger[] = new FareRequestPassenger($nbr_child, 'Child');

        $webFares = new FareRequestWeb();
        $webFares->setNumberOfWebFares(1000);
        $GDSFares = new RequestGDSData('Published', 1000);
        $fare = new FareRequestFare();
        $fare->setGDSFares($GDSFares);
        $fare->setWeb($webFares);

        // api 4.0
        $crsData = new CRSData(0);
        // $crsData->setCRSName('AmadeusAPI');
        $crsData->setGDS($this->PCC_SUPPLIER);
        $crsData->setTerminalPCC($this->ATS_PCC);
        $crsData->setTerminalCountry('MA');
        $crsData->setUseMultiChannel(false);


        $configuration = new FareRequestConfiguration();
        // api 4.0
        $configuration->setCRSSettings([$crsData]);
        // $configuration->setCRSConfig($crs);
        $configuration->setCurrencyCode('MAD');
        $configuration->setAdditionalDetails("None");
        $configuration->setAllowWaitList(false);
        $configuration->setLanguageCode('FR');

        $requestData = new FareRequestData();
        $requestData->setCarriers([]);
        $requestData->setConfiguration($configuration);
        $requestData->setFare($fare);
        $requestData->setLegs($request_legs);
        $requestData->setPassengers($passanger);
        $loginData = new LoginData();
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        // TODO make this more reliable / relative and incremental
        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.travelife.' . $generated_date;
        $loginData->setTransactionID($generated_id);
        try {

            $fareRequest = new GetFares($loginData, $requestData);


            $flightAPI = new FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => 1, 'exceptions' => 0]);
            $response = $flightAPI->GetFares($fareRequest);

            // writing xml to files
            Storage::disk('local')->put("xml/ats/" . $generated_id . '_GetFares__request.xml', $flightAPI->__getLastRequest());
            Storage::disk('local')->put("xml/ats/" . $generated_id . '_GetFares_response.xml', $flightAPI->__getLastResponse());

            $results = $response->getGetFaresResult();
        } catch (\SoapFault $exception) {
            $data['fares'] = [];
            return view('front.flight.flights', [
                'minPrix' => 0,
                'maxPrix' => 0,
                'data' => $data,
                'error_message' => __('Aucun résultat ne correspond à votre recherche.'),
            ]);
        }
        if ($results->getNumberOfFares() < 1) {
            // throw new FlightApiException(99901);
            $data['fares'] = [];
            return view('front.flight.flights', [
                'minPrix' => 0,
                'maxPrix' => 0,
                'data' => $data,
                'error_message' => __('Aucun résultat ne correspond à votre recherche.'),
            ]);
        }
        $feesPrice = 0;
        $number = $results->getNumberOfFares();
        $transactionID = $results->getResponseInfo()->getTransactionID();
        $responseFares = $results->getFares()->getFareResponseFare();

        $data = array();
        $data['number'] = $number;
        $data['transactionID'] = $transactionID;
        $minPrix = 0;
        $maxPrix = 0;
        $fares = array();


        if ($number > 0) {

            foreach ($responseFares as $fare) {
                // dd($fare->getFlight()->getLegs()[0]->getConnections()[0]->getSegments()[0]->getCabinClassName());
                if ($fare->getFlight()->getLegs()[0]->getConnections()[0]->getSegments()[0]->getCabinClassName() == "Economy") {
                    $feesPrice = $feesPriceEco;
                } else {
                    $feesPrice = $feesPriceBus;
                }
                if ($fare->getSource() == "WebFare" or $fare->getSource() == "WebSource") {
                    $feesPrice=$fees->price_lowcost;
                }


                $f = array();
                $f['source'] = $fare->getSource();
                $f['id'] = $fare->getID();
                // Calculate the total price of the flight
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

                $total_price = 0;
                $total_tax = 0; //
                foreach ($prices as &$price) {

                    switch ($price['passengerType']) {
                        case 'CHD':
                            $t = (intval($price['tax'])) * intval($nbr_child); //
                            $price = ($price['value'] + intval($price['tax']) + $feesPrice) * intval($nbr_child);
                            break;
                        case 'ADT':
                            $t = (intval($price['tax'])) * intval($nbr_adults); //
                            $price = ($price['value'] + intval($price['tax']) + $feesPrice) * intval($nbr_adults);
                            break;
                        case 'INF':
                            $t = (intval($price['tax'])) * intval($nbr_infant); //
                            $price = ($price['value'] + intval($price['tax']) + $feesPrice) * intval($nbr_infant);
                            break;
                    }
                    $total_price += $price;
                    $total_tax += $t; //
                }

                $isLowCost = true;

                if ($fare->getSource() == "WebFare" or $fare->getSource() == "WebSource") {
                    $total_price += 180;
                    $isLowCost = false;
                    if ($total_price <= TlAgency::all()->first()->solde) {
                        $isLowCost = true;
                    }
                }
                // dd($total_price);
                $f['price'] = ceil($total_price * $marge);
                $f['taxe'] = $total_tax;
                // dd($f['price']);
                //$f['price'] = $total_price;
                $f['currency_code'] = $fare->getPriceDetails()->getEquivalentTotalFlightPrice()->getCurrencyCode();
                $flight = $fare->getFlight();
                $legs = $flight->getLegs();
                $f['legs'] = array();

                $carriers = [];

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

                            if(!in_array($segment->getCarrierCode(), $carriers)){
                                $carriers[] = $segment->getCarrierCode();
                            }

                            $tmp_segment['flight_number'] = $segment->getFlightNumber();
                            $tmp_segment['cabin_class'] = $segment->getCabinClassName();
                            $tmp_segment['booking_class'] = $segment->getBookingClass();
                            $tmp_segment['baggage'] = $segment->getFreeBaggageAllowance();
                            $tmp_segment['mileage'] = $segment->getSegmentMileage();
                            $tmp_segment['travel_time'] = $segment->getTravelTime();

                            $connection_tmp['segments'][] = $tmp_segment;
                        }
                        $leg_tmp['AvailString'] = $connection->getAvailString();
                        $leg_tmp['selectedConnection'] = '0';
                        $leg_tmp['connections'][] = $connection_tmp;
                    }
                    $f['legs']["RecordSet"] = $recordset;
                    $f['legs']['list'][] = $leg_tmp;
                }
                //$f['terms_url'] = action('FlightController@terms', ['carrier' => $carrier_c, 'language' => 'EN']);
                if ($isLowCost)
                    $fares[] = $f;

            }
            Session::put("FlightResults",$fares);
            $data['fares'] = collect($fares)->sortBy('price');

            $minPrix = $data['fares']->first()["price"];
            $maxPrix = $data['fares']->last()["price"];
        }
        $carriers = TlCarrier::all()->whereIn('code', $carriers)->take(10);
        // dd($carriersFilter);

        return view('front.flight.flights')->with('minPrix', $minPrix)
                                            ->with('maxPrix', $maxPrix)
                                            ->with('data', $data)
                                            ->with('carriers', $carriers)
                                            ->with('taxes', $total_tax);
    }

    public function flight(Request $request)
    {
        // dd($request->input('taxe'));
        // dd($request->all());
        // $fare = new FareRequestFare();
        // dd($fare);
        // $g = $fare->getFlight()->getPassengers();
        // dd($g);

        if ($request->input('RecordSet')) {
            $AvailStrings = $request->input('AvailString');
            $RecordSet = $request->input('RecordSet');
            $data["RecordSet"] = $RecordSet;
            $data["adults"] = $request->input('adults');
            $data["bebe"] = $request->input('bebe');
            $data["enfant"] = $request->input('enfant');
            $data["source"] = $request->input('source');
            $data["prix"] = $request->input('prix');
            $data["taxe"] = $request->input('taxe'); //
            // dd($request->all());
            // dd($request->input('taxe'));
            $legs = [];
            $carrier1 = null;

            $data["departureAirport"] = $request->input("airportDep")[0][0];
            $data["departureDate"] = $request->input("dep")[0][0];

            foreach ($AvailStrings as $key => $AvailString) {
                $escale = $request->input("escale")[$key];
                $flight = $request->input("flight")[$key];
                $carrier = $request->input("carrier")[$key];
                if (empty($carrier1))
                    $carrier1 = $request->input("carrier")[$key];
                $airportDep = $request->input("airportDep")[$key];
                $dep = $request->input("dep")[$key];
                $airportArr = $request->input("airportArr")[$key];
                $arr = $request->input("arr")[$key];
                $class = $request->input("class")[$key];
                $AvailString = $request->input("AvailString")[$key];
                $cabineClass = $request->input("cabineClass")[$key];
                $baggage = $request->input("baggage")[$key];
                $esc = [];
                $segments = [];
                for ($i = 0; $i < $escale; $i++) {
                    $vol["flight"] = $flight[$i];
                    $vol["carrier"] = $carrier[$i];
                    $vol["airportDep"] = $airportDep[$i];
                    $vol["dep"] = $dep[$i];
                    $vol["airportArr"] = $airportArr[$i];
                    $vol["arr"] = $arr[$i];
                    $vol["class"] = $class[$i];
                    $vol["cabineClass"] = $cabineClass[$i];
                    $vol["baggage"] = $baggage[$i];
                    $esc['escal'][] = $vol;
                    $dateDepart = new \DateTime($dep[$i]);
                    $timeDepart = 'PT' . $dateDepart->format('H') . 'H' . $dateDepart->format('i') . 'M';
                    $dateArrever = new \DateTime($arr[$i]);
                    $timeArrever = 'PT' . $dateArrever->format('H') . 'H' . $dateArrever->format('i') . 'M';
                    $segment = new RuleTextRequestSegment($dateArrever, $timeArrever, $dateDepart, $timeDepart);
                    $segment->setArrival($airportArr[$i]);
                    $segment->setBookingClass($class[$i]);
                    $segment->setCarrierCode($carrier[$i]);
                    $segment->setDeparture($airportDep[$i]);
                    $segment->setFlightNumber($flight[$i]);
                    $segments[] = $segment;
                }
                $leg = new RuleTextRequestLeg();
                $leg->setSegments($segments);
                $legs[] = $leg;
                $data['AvailString'][] = $AvailString;
                $data['vol'][] = $esc;
                $data['carrierCode'] = $request->input("carrierCode")[$key];
            }

            if (Session::has('reservationFlight')) {
                Session::forget('reservationFlight');
            }
            Session::put('reservationFlight', $data);

            $crs = new CRS();
            $crs->setCRSName($this->PCC_SUPPLIER);
            $crs->setTerminalCountry('MA');
            $crs->setTerminalPCC($this->ATS_PCC);
            $crs->setReceivedFrom("NanoPlus");
            $crs->setUser($this->CRS_USER);

            $passengers = [];
            for ($i = 0; $i < $data["adults"]; $i++) {
                $passenger = new RuleTextRequestPassenger("Adult");
                $passengers[] = $passenger;
            }

            for ($i = 0; $i < $data["bebe"]; $i++) {
                $passenger = new RuleTextRequestPassenger("Infant");
                $passengers[] = $passenger;
            }

            for ($i = 0; $i < $data["enfant"]; $i++) {
                $passenger = new RuleTextRequestPassenger("Child");
                $passengers[] = $passenger;
            }

            $coditionRequest = new RuleTextRequestData($data["source"]);
            $coditionRequest->setCharter(null);
            $coditionRequest->setCRSConfig($crs);
            $coditionRequest->setLanguageCode("FR");
            $coditionRequest->setLegs($legs);
            $coditionRequest->setPassengers($passengers);
            $coditionRequest->setRecordSet($RecordSet);

            $loginData = new LoginData;
            $loginData->setUserName($this->ATS_USERNAME);
            $loginData->setPassword($this->ATS_PASSWORD);
            // TODO make this more reliable / relative and incremental
            $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
            $generated_id = 'Travelife.zampaktu.' . $generated_date;
            $loginData->setTransactionID($generated_id);
            $ruleInformation = new GetRuleInformationText($loginData, $coditionRequest);


            $language = "FR";
            $termsRequest = new TermsAndConditionsRequestData($data["source"]);
            $termsRequest->setCarrierCode($carrier1[0]);
            $termsRequest->setLanguageCode($language);
            $getTermsAndConditions = new GetTermsAndConditions($loginData, $termsRequest);
            $html = "";

            // get payment methods for WebFares
            $paymentDetails = null;
            // dd($data['source']);

            /*     if ($data['source'] === 'WebFare' || $data['source'] === 'WebSource') {
                     $paymentRequestData = new PaymentRequestData($data['source']);
                     $paymentRequestData->setCurrencyCode("MAD");
                     $paymentRequestData->setDeparture($data["departureAirport"]);
                     $paymentRequestData->setDepartureDate(new \DateTime($data["departureDate"]));
                     $paymentRequestData->setLanguageCode("FR");
                     $paymentRequestData->setRecordset($RecordSet);
                     $paymentRequestData->setSource($data['source']);
                     $paymentRequestData->setCarrierCode($carrier1[0]);

                     $getPaymentMethods = new GetPaymentMethods($loginData, $paymentRequestData);

                     $flightAPI = new FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => 1, 'exceptions' => 0]);
                     $paymentMethods = $flightAPI->GetPaymentMethods($getPaymentMethods);

                     // writing xml to files
                     if (config('logging.xml_log_details')) {
                         Storage::disk('local')->put("xml/ats/" . $generated_id . '_GetPaymentMethods_request.xml', $flightAPI->__getLastRequest());
                         Storage::disk('local')->put("xml/ats/" . $generated_id . '_GetPaymentMethods_response.xml', $flightAPI->__getLastResponse());
                     }

                     try {
                         $result = $paymentMethods->getGetPaymentMethodsResult();
                     } catch (\Error $err) {
                         \Log::debug('Excpetion : PaymentMethods response  - ' . $err->getMessage());
                         return back()->withError("Couldn't accomplish this operation");
                     } catch (\Exception $ex) {
                         \Log::debug('Excpetion : PaymentMethods response  - ' . $ex->getMessage());
                         return back()->withError("Couldn't accomplish this operation");
                     }

                     $paymentDetails = $result->getPaymentDetails();
                 }*/

            Session::put('paymentMethods', $paymentDetails);

            $flightData = array(
                'getTermsAndConditions' => $getTermsAndConditions,
                'ruleInformation' => $ruleInformation,
                'source' => $data['source'],
                'carrier1' => $carrier1
            );

            Session::put('flightData', $flightData);
            Session::put('htmlConditions', $html);
        } else {
            $data = Session::get('reservationFlight');
            $html = Session::get('htmlConditions');
        }

        return view('front.flight.flight')->with('reservation', $data)->with("condutions", $html);
    }

    public function Booking(Request $request)
    {

        if (Session::has('reservationFlight')) {
            $reservation = Session::get('reservationFlight');
        } else {
            // return 'data not found';
            \Log::debug("FlightController : resrvation is missing from session variable redirect to search form");
            return redirect()->route('home');
        }


        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
        $source = $reservation["source"];
        $recordSet = $reservation["RecordSet"];

        $balanceType = 'flight';
        if($source === 'WebFare' || $source === 'WebSource'){
            $balanceType = 'lowCost';
            if ($reservation['prix']>TlAgency::all()->first()->solde)
                return back()->withError('Not enough balance to accomplish this operation!');

        }



        if (isset($reservation["agencyPhone"])) {
            $agencyPhone = $reservation["agencyPhone"];
        } else {
            $agencyPhone = '00212539981478';
        }

        $currencyCode = isset($reservation["currencyCode"]) ? $reservation["currencyCode"] : 'MAD';
        $languageCode = isset($reservation["languageCode"]) ? $reservation["languageCode"] : 'FR';

        /*echo "<pre>";
        var_dump($reservation);
        die;*/
        if (!Auth::guard("customer")->check())
            return redirect()->route('customer.login');
        $customer = Auth::guard("customer")->user();

        $title = $request->input('CiviliteCustomer');

        $gender = $title === 'Mr' ? 'Male' : 'Female';
        // bug
        $city = TlCity::all()->find($request->input('cityCustomer'))->name;
        if (!$city) {
            $city = "casablanca";
        }

        $country = "MA";
        $firstName = $request->input('firstNameCustomer');
        $lastName = $request->input('lastNameCustomer');

        // TODO Verify all these numbers and send the proper ones
        $email = new PhoneDetails();
        // TODO the docs say we should send the client email but we'll send the agent email for now
        $email->setNumber(Auth::user()->email);
        $email->setType(ContactTypeEnum::Email);
        $phoneNumbers[] = $email;
        $phoneNumber = new  PhoneDetails();
        $phoneNumber->setNumber($request->input('212629324002'));
        $phoneNumber->setType(ContactTypeEnum::Agent);
        $phoneNumbers[] = $phoneNumber;
        $phoneNumber2 = new  PhoneDetails();
        $phoneNumber2->setNumber('212629324002');
        $phoneNumber2->setType(ContactTypeEnum::Mobile);
        $phoneNumbers[] = $phoneNumber2;
        $street = $request->input('addressCustomer');
        $zipCode = $request->input('zipCodeCustomer');


        $CRSConfig = new BookRequestCRSConfiguration();
        $CRSConfig->setCRSName($this->PCC_SUPPLIER);
        $CRSConfig->setReceivedFrom("nanoPlus");
        $CRSConfig->setTerminalCountry("MA");
        $CRSConfig->setTerminalPCC($this->ATS_PCC);


        $configuration = new BookRequestConfiguration('Unknown');
        $configuration->setAgencyPhone("212629324002");
        $configuration->setClientBusinessPhone("212629324002");
        $configuration->setClientHomePhone("212629324002");
        $configuration->setLanguageCode("FR");
        $configuration->setRecordSet($recordSet);
        $configuration->setIsLiveBooking(true);
        $configuration->setCRSConfig($CRSConfig);
        $configuration->setSetPastDateSegment(false);
        $configuration->setAdminEMailAddresses(['nabil@nanoweb.ma']);
        if ($source === 'WebFare' || $source === 'WebSource') {
            $bookRequestWebFare = new BookRequestWebFare();
            $configuration->setWebFare($bookRequestWebFare);
            $contact = new Contact();
            $contact->setGender($gender);
            $contact->setCity($city);
            $contact->setCountry($country);
            $contact->setFirstName($firstName);
            $contact->setLastName($lastName);
            $contact->setPhoneNumbers($phoneNumbers);
            $contact->setStreet($street);
            $contact->setTitle($title);
            $contact->setZipCode($zipCode);
            $configuration->setDeliveryDetails($contact);

        }

        $allotment = new AllotmentAccount();
        $allotmentConfig = new AllotmentRequest("All", "All");
        $allotmentConfig->setAccount($allotment);
        $allotmentConfig->setIdentifier("");

        $legs = [];

        foreach ($reservation["vol"] as $key => $vol) {

            $segments = [];
            foreach ($vol["escal"] as $escal) {

                $segment = new BookRequestSegment();
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

            $leg = new BookRequestLeg();
            $leg->setCarrierCode($reservation["carrierCode"]);
            $leg->setAvailString($reservation["AvailString"][$key]);
            $leg->setSegments($segments);
            $legs[] = $leg;

        }

        //passenger
        $passengersPost = $request->input('passengers');
        $passengers = array();
        foreach ($passengersPost['adult'] as $p) {
            $gender = $p['civility'] === 'Mr' ? 'Male' : 'Female';
            $passenger = new BookRequestPassenger($gender, "Adult");
            $passenger->setLastName($p['lastName']);
            $passenger->setFirstName($p['firstName']);
            $DOBPassenger = \DateTime::createFromFormat('d/m/Y', $p['dob']);
            $passenger->setDOB($DOBPassenger);
            $passengers[] = $passenger;
        }
        foreach ($passengersPost['child'] as $p) {
            $gender = $p['civility'] === 'Mr' ? 'Male' : 'Female';
            $passenger = new BookRequestPassenger($gender, "Child");
            $passenger->setLastName($p['lastName']);
            $passenger->setFirstName($p['firstName']);
            $DOBPassenger = \DateTime::createFromFormat('d/m/Y', $p['dob']);
            $passenger->setDOB($DOBPassenger);
            $passengers[] = $passenger;
        }
        foreach ($passengersPost['baby'] as $p) {
            $gender = $p['civility'] === 'Mr' ? 'Male' : 'Female';
            $passenger = new BookRequestPassenger($gender, "Infant");
            $passenger->setLastName($p['lastName']);
            $passenger->setFirstName($p['firstName']);
            $DOBPassenger = \DateTime::createFromFormat('d/m/Y', $p['dob']);
            $passenger->setDOB($DOBPassenger);
            $passengers[] = $passenger;
        }


        //$passenger->setBoardingDetails($boardingDetails);


        $bookingRequestData = new BookRequestData($source); // ??
        $bookingRequestData->setConfiguration($configuration);
        $bookingRequestData->setCurrency("MAD");
        $bookingRequestData->setLegs($legs);
        $bookingRequestData->setPassengers($passengers);
        $bookingRequestData->setSource($source);
        $bookingRequestData->setRecordSet($recordSet);
        $bookingRequestData->setRecordSet($recordSet);
        $bookingRequestData->setStoreFareQuoteType(StoreFareQuoteTypeEnum::StoreFareQuote);
        $bookingRequestData->setTicketingType(TicketingTypeEnum::ElectronicTicketing);
        $bookingRequestData->setPlatingCarrier($reservation["carrierCode"]);

        //TODO save payment to database and get the id to send in paymentdefinitiondata
        $paymentID = $generated_id;


        //for web fares
        if ($source === 'WebFare' || $source === 'WebSource') {
            $paymentDefinitionData = new PaymentDefinitionData($paymentID, PaymentTypeEnum::CreditCard);
            // Agency Debit
            // $paymentDefinitionData->setPaymentType(PaymentTypeEnum::AgencyDebit);
            // $paymentDefinitionData->setBankName('Bank Name');
            // $paymentDefinitionData->setBankAccountHolderFirstName('Firstname');
            // $paymentDefinitionData->setBankAccountHolderLastName('LastName');
            // $paymentDefinitionData->setBankAccountNumber('');
            // $paymentDefinitionData->setBankCodeNumber();

            if (Session::has('paymentMethods')) {
                $paymentMethods = Session::get('paymentMethods');
            } else {
                // TODO decide what to do if the session variable is not defined
                \Log::debug('flightData session variable not defined Hoassain');
                return back()->withError("Couldn't accomplish this operation");
            }

            if (!$paymentMethods) {
                \Log::debug('Session variable flightData does not contain paymentMethods');
                return back()->withError("Couldn't accomplish this operation");
            }
            foreach ($paymentMethods as $paymentMethod) {
                if ($paymentMethod->getPaymentType() === 'CreditCard') {
                    $ccCode = $paymentMethod->getCreditCardCompanyCode();
                    $creditCard = DB::table('credit_cards')
                        ->where('type', $ccCode)
                        ->first();
                    if ($creditCard) {
                        break;
                    }
                }
            }
            if (!$creditCard) {
                //TODO return an error because credit card type is not found in database
                \Log::debug("Couldn't find CreditCard of the provided types in database");
                return back()->withError("Payment method is not accepted!");
            }

            //Credit card
            $paymentDefinitionData->setCreditCardType($creditCard->type);
            $paymentDefinitionData->setCreditCardHolderFirstName($creditCard->firstName);
            $paymentDefinitionData->setCreditCardHolderLastName($creditCard->lastName);
            $paymentDefinitionData->setCreditCardNumber($creditCard->cardNumber);
            $paymentDefinitionData->setCreditCardExpiryDate(new \DateTime($creditCard->expiryDate));
            $paymentDefinitionData->setCreditCardCVCNumber($creditCard->cvcNumber);

            $bookingRequestData->setPaymentData($paymentDefinitionData);
        }

        $loginData = new LoginData;
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        // TODO make this more reliable / relative and incremental

        $loginData->setTransactionID($generated_id);
        $booking = new BookFare($loginData, $bookingRequestData);

        $flightAPI = new FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => 1, 'exceptions' => 0]);
        $response = $flightAPI->BookFare($booking);

        // writing xml to files
        Storage::disk('local')->put("xml/ats/book_" . $generated_id . '_request.xml', $flightAPI->__getLastRequest());
        Storage::disk('local')->put("xml/ats/book_" . $generated_id . '_response.xml', $flightAPI->__getLastResponse());
        $result = $response->getBookFareResult();

        /* try {
             $result = $response->getBookFareResult();
             $subtracted = BalanceService::subtractFromBalance($agence, $balanceType, $reservation['prix']);
             if(! $subtracted){
                 \Log::debug("Couldn't subtract amount");
             }
         } catch (\Error $err) {
             \Log::debug('Excpetion : Booking response  - ' . $err->getMessage());
             return back()->withError("Couldn't accomplish this operation");
         } catch (\Exception $ex) {
             \Log::debug('Excpetion : Booking response  - ' . $ex->getMessage());
             return back()->withError("Couldn't accomplish this operation");
         }*/
        // PHP 5.2+ work around
        $error = error_get_last();
        if ($error !== NULL) {
            \Log::debug('Error : Booking response  - ' . $error["type"] . ' ' . $error["file"] . ' ' . $error["line"] . ' ' . $error["message"]);
            // fatal error, E_ERROR === 1
            if ($error['type'] === E_ERROR) {
                return back()->withError("Couldn't accomplish this operation");
            }
        }

        $recordLocator = $result->getRecordLocator();


        $book = new FareBook();
        $book->tl_customer_id = $customer->id;
        // $book->tl_agent_id = Auth::guard('agent')->user()->id;
        $book->transactionID = $generated_id;
        $book->Source = $source;
        $book->RecordSet = $recordSet;
        $book->recordLocator = $recordLocator;
        $book->carrierCode = $reservation["carrierCode"];
        $book->agencyPhone = $agencyPhone;
        $book->price = $result->getTotalPrice()->getValue();
        $book->fees = $result->getTotalPrice()->getValue();
        $book->currencyCode = $result->getTotalPrice()->getCurrencyCode();
        $book->languageCode = $languageCode;
        $book->save();


        foreach ($reservation["vol"] as $key => $vol) {

            $l = new Leg();
            $l->AvailString = $reservation["AvailString"][$key];
            $l->fare_book_id = $book->id;
            $l->save();
            foreach ($vol["escal"] as $escal) {

                $s = new Segment();
                $s->Arrival = $escal["airportArr"];
                $s->ArrivalDateTime = new \DateTime($escal["arr"]);
                $s->BookingClass = $escal["class"];
                $s->Carrier = $escal["carrier"];
                $s->Departure = $escal["airportDep"];
                $s->DepartureDateTime = new \DateTime($escal["dep"]);
                $s->FlightNumber = $escal["flight"];
                $s->leg_id = $l->id;
                $s->save();

            }
        }

        foreach ($passengersPost['adult'] as $p) {
            $data["firstName"] = $p['firstName'];
            $data["lastName"] = $p['lastName'];
            $data["civility"] = $p['civility'];
            $data["type"] = "Adult";
            $data["dob"] = $p['dob'];
            $data["passport"] = $p['passport'];
            $data["customer"] = $customer->id;
            $data["model"] = "flightApi";
            $data["flight"] = $book->id;
            $passenger = Customer::passenger($data);
        }
        foreach ($passengersPost['child'] as $p) {
            $data["type"] = "Child";
            $data["firstName"] = $p['firstName'];
            $data["lastName"] = $p['lastName'];
            $data["civility"] = $p['civility'];
            $data["dob"] = $p['dob'];
            $data["passport"] = $p['passport'];
            $data["customer"] = $customer->id;
            $data["model"] = "flightApi";
            $data["flight"] = $book->id;
            $passenger = Customer::passenger($data);
        }
        foreach ($passengersPost['baby'] as $p) {
            $data["type"] = "Infant";
            $data["firstName"] = $p['firstName'];
            $data["lastName"] = $p['lastName'];
            $data["civility"] = $p['civility'];
            $data["dob"] = $p['dob'];
            $data["passport"] = $p['passport'];
            $data["model"] = "flightApi";
            $data["flight"] = $book->id;
            $passenger = Customer::passenger($data);
        }

        $apiFare = new ApiFare();
        $apiFare->tronsactionID = "$generated_id";
        $apiFare->method = "BookFare";
        $apiFare->fare_book_id = $book->id;
        $apiFare->Record = $result->getRecordLocator();
        $apiFare->save();

        $commandLine = new TlCommandLine();
        $commandLine->book_id = $book->id;
        $commandLine->bookName = "FlightAPI";
        $commandLine->type = "Flight ATS";
        $commandLine->status = 0;
        $commandLine->price = $book->price;
        $commandLine->tl_payment_id = 3;
        $commandLine->tl_customer_id = $customer->id;
        $commandLine->save();
        return redirect()->route('manage.book.flight', ['id' => $commandLine->id]);
        //return view("manage.flight.endBook")->with('book', $book)->with('record', $result->getRecordLocator());

    }
}
