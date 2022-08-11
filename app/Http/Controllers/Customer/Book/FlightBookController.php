<?php

namespace App\Http\Controllers\Customer\Book;


use PDF;
use Carbon\Carbon;
use App\models\TlCity;
use App\models\Payment;
use App\models\book\TlRule;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\models\ATSFlight\CRS;
use App\Services\BookService;
use App\models\flight\Airport;
use App\models\agency\TlAgency;
use App\models\config\TlAtsVol;
use App\models\config\TlMarkUp;
use App\models\package\TlTravel;
use App\Services\PaymentService;
use App\models\ATSFlight\Contact;
use App\models\bookFlightAPI\Leg;
use App\models\ATSFlight\BookFare;
use App\models\book\TlCommandLine;
use App\models\ATSFlight\FlightAPI;
use App\models\ATSFlight\LoginData;
use App\models\customer\TlCustomer;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\models\ATSFlight\FeesFlight;
use App\models\bookFlightAPI\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\models\bookFlightAPI\ApiFare;
use App\models\bookFlightAPI\Segment;
use App\models\ATSFlight\CancelTicket;
use App\models\ATSFlight\PhoneDetails;
use App\models\bookFlightAPI\FareBook;
use App\models\ATSFlight\CancelBooking;
use App\models\ATSFlight\TicketBooking;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\models\ATSFlight\BookRequestLeg;
use App\models\ATSFlight\PNRRequestData;
use App\models\ATSFlight\BookRequestData;
use App\models\ATSFlight\ContactTypeEnum;
use App\models\ATSFlight\AllotmentAccount;
use App\models\ATSFlight\AllotmentRequest;
use App\Http\Controllers\Customer\Customer;
use App\models\ATSFlight\CancelRequestData;
use App\models\ATSFlight\TicketingTypeEnum;
use App\models\ATSFlight\BookRequestSegment;
use App\models\ATSFlight\BookRequestWebFare;
use App\models\ATSFlight\BookRequestPassenger;
use App\models\ATSFlight\PaymentDefinitionData;
use App\models\ATSFlight\StoreFareQuoteTypeEnum;
use App\models\ATSFlight\CancelTicketRequestData;
use App\models\ATSFlight\BookRequestConfiguration;
use App\models\ATSFlight\TicketBookingRequestData;
use App\models\ATSFlight\CancelTicketRequestTicket;
use App\models\ATSFlight\TicketBookingRequestIssue;
use App\models\ATSFlight\CancelRequestConfiguration;
use App\models\ATSFlight\BookRequestCRSConfiguration;
use App\models\ATSFlight\RetrievePassengerNameRecord;
use App\models\ATSFlight\TicketBookingRequestPaxText;
use App\models\ATSFlight\TicketBookingRequestPayment;
use App\models\ATSFlight\TicketBookingRequestPassenger;
use App\models\ATSFlight\TicketBookingRequestCommission;

class FlightBookController extends Controller

{
    private $ATS_USERNAME;
    private $ATS_PASSWORD;
    private $ATS_PCC;
    private $CRS_USER;
    private $PCC_SUPPLIER;
    private $SUPPLIER;

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
            $this->SUPPLIER = $fapi_creds->tlSupplier()->first()->name ?? $fapi_creds->source;
        } else {
            // TODO throw here
        }
    }

    public function cancelBooking($id, Request $request)
    {

        $book = FareBook::all()->where('id', $id)->first();

        if (empty($book))
            return view('notFond');

        $source = $book->Source;
        $record = $book->recordLocator;

        $carrierCode = $book->carrierCode;
        $agencyPhone = $book->agencyPhone;
        $currencyCode = $book->currencyCode;
        $languageCode = $book->languageCode;
        $customerLastName = $book->LastName;

        $crs = new CRS();
        $crs->setCRSName($this->PCC_SUPPLIER);
        $crs->setTerminalCountry('MA');
        $crs->setTerminalPCC($this->ATS_PCC);
        $crs->setReceivedFrom("NanoPlus");
        $crs->setUser($this->CRS_USER);

        $configuration = new CancelRequestConfiguration();
        $configuration->setAgencyPhone($agencyPhone);
        $configuration->setCurrencyCode($currencyCode);
        $configuration->setLanguageCode($languageCode);

        $cancelRequest = new CancelRequestData($source);
        $cancelRequest->setCRSConfig($crs);
        $cancelRequest->setRecordLocator($record);
        $cancelRequest->setConfiguration($configuration);
        $cancelRequest->setIsAllotment(false);
        $cancelRequest->setCustomerLastName($customerLastName);
        $cancelRequest->setCarrierCode($carrierCode);

        $loginData = new LoginData;
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        // TODO make this more reliable / relative and incremental
        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
        $loginData->setTransactionID($generated_id);
        $cancel = new CancelBooking($loginData, $cancelRequest);
        $flightAPI = new FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => 0]);
        $response = $flightAPI->CancelBooking($cancel);

        Storage::disk('local')->put("xml/ats/cancel" . (new \DateTime())->format('Y-m-d') . "/cancel_" . $generated_id . '_request.xml', $flightAPI->__getlastrequest());
        Storage::disk('local')->put("xml/ats/cancel" . (new \DateTime())->format('Y-m-d') . "/cancel_" . $generated_id . '_response.xml', $flightAPI->__getlastresponse());

        $pnrRequest = new PNRRequestData($source);
        $pnrRequest->setCRSConfig($crs);
        $pnrRequest->setCustomerLastName($customerLastName);
        $pnrRequest->setRecordLocator($record);

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
        $loginData->setTransactionID($generated_id);
        $Retrieve = new RetrievePassengerNameRecord($loginData, $pnrRequest);
        $flightAPI = new FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000]);
        // $response = $flightAPI->RetrievePassengerNameRecord($Retrieve);
        // $result = $response->getRetrievePassengerNameRecordResult();
        // $info = $result->getInfos()->getPNRResponseInfo()[0];
        // $status = $info->getBookingStatus();

        $commandLine = TlCommandLine::all()->where('book_id', $book->id)->where('bookName', 'FlightAPI')->first();
        $commandLine->status = 4;
        $commandLine->save();

        return redirect()->route('front.flight.bookDetail', ['id' => $commandLine->id]);

    }

    public function Booking(Request $request)
    {

        if (Session::has('reservationFlight')) {
            $reservation = Session::get('reservationFlight');
        } else {
            // return 'data not found';
            \Log::debug("FlightController : reservationFlight is missing from session variable redirect to search form");
            return redirect()->route('home');
        }
        $codeContinent = Airport::where('AirportCode', $reservation["vol"][0]["escal"][sizeof($reservation["vol"][0]["escal"]) - 1]["airportArr"])->first();
        if ($codeContinent->CountryCode == "MA") {
            $feesData = FeesFlight::all()->where('ContinentCode', "MA")->first();
        } else {
            $feesData = FeesFlight::all()->where('ContinentCode', $codeContinent->ContinentCode)->first();
        }

        if (sizeof($reservation["vol"]) == 2) {
            $feesPriceEco = $feesData->price_ar_eco;
            $feesPriceBus = $feesData->price_ar_bus;
        } else {
            $feesPriceEco = $feesData->price_as_eco;
            $feesPriceBus = $feesData->price_as_bus;
        }
        if ($reservation["vol"][0]["escal"][0]["cabineClass"] == "Economy") {
            $fees = $feesPriceEco;
        } else {
            $fees = $feesPriceBus;
        }

        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
        $source = $reservation["source"];
        $recordSet = $reservation["RecordSet"];

        $lowCost = 0;
        if ($source === 'WebFare' || $source === 'WebSource') {
            $fees = $feesData->price_lowcost;
            $lowCost = 180;
            if ($reservation['prix'] > TlAgency::all()->first()->solde)
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
            $customer = $this->createdCustomer($request);
        else
            $customer = Auth::guard("customer")->user();
        //dd($customer);
        $title = $request->input('CiviliteCustomer');
        // Male OR Female
        $gender = $title === 'Mr' ? 'Male' : 'Female';
        $city = TlCity::all()->find($request->input('cityCustomer'));
        if ($city)
            $city = $city->name;
        else
            $city = null;

        $country = "MA";
        $firstName = $request->input('firstNameCustomer');
        $lastName = $request->input('lastNameCustomer');

        // TODO Verify all these numbers and send the proper ones
        $email = new PhoneDetails();
        // TODO the docs say we should send the client email but we'll send the agent email for now
        $email->setNumber('mouhcine.amghar@gmail.com');
        $email->setType(ContactTypeEnum::Email);
        $phoneNumbers[] = $email;
        $phoneNumber = new  PhoneDetails();
        $phoneNumber->setNumber($request->input('212629324002'));
        $phoneNumber->setType(ContactTypeEnum::Email);
        $phoneNumbers[] = $phoneNumber;
        $phoneNumber2 = new  PhoneDetails();
        $phoneNumber2->setNumber('212655620125');
        $phoneNumber2->setType(ContactTypeEnum::Mobile);
        $phoneNumbers[] = $phoneNumber2;
        $street = $request->input('addressCustomer');
        $zipCode = $request->input('zipCodeCustomer');


        $CRSConfig = new BookRequestCRSConfiguration();
        $CRSConfig->setCRSName($this->PCC_SUPPLIER);
        $CRSConfig->setReceivedFrom("NanoPlus");
        $CRSConfig->setTerminalCountry("MA");
        $CRSConfig->setTerminalPCC($this->ATS_PCC);


        $configuration = new BookRequestConfiguration('Unknown');
        $configuration->setAgencyPhone("065577884477");
        $configuration->setClientBusinessPhone("065577884477");
        $configuration->setClientHomePhone("065577884477");
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
        $priceTotal = 0;
        $passengersPost = $request->input('passengers');
        $adults = $passengersPost['adult'];
        $child = isset($passengersPost['child']) ? $passengersPost['child'] : [];
        $baby = isset($passengersPost['baby']) ? $passengersPost['baby'] : [];
        $passengers = array();
        foreach ($adults as $p) {
            $gender = $p['civility'] === 'Mr' ? 'Male' : 'Female';
            $passenger = new BookRequestPassenger($gender, "Adult");
            $passenger->setLastName($p['lastName']);
            $passenger->setFirstName($p['firstName']);
            $DOBPassenger = \DateTime::createFromFormat('Y-m-d', $p['dob']);
            $passenger->setDOB($DOBPassenger);
            $passengers[] = $passenger;
            $priceTotal += $fees;
        }
        foreach ($child as $p) {
            $gender = $p['civility'] === 'Mr' ? 'Male' : 'Female';
            $passenger = new BookRequestPassenger($gender, "Child");
            $passenger->setLastName($p['lastName']);
            $passenger->setFirstName($p['firstName']);
            $DOBPassenger = \DateTime::createFromFormat('Y-m-d', $p['dob']);
            $passenger->setDOB($DOBPassenger);
            $passengers[] = $passenger;
            $priceTotal += $fees;
        }
        foreach ($baby as $p) {
            $gender = $p['civility'] === 'Mr' ? 'Male' : 'Female';
            $passenger = new BookRequestPassenger($gender, "Infant");
            $passenger->setLastName($p['lastName']);
            $passenger->setFirstName($p['firstName']);
            $DOBPassenger = \DateTime::createFromFormat('Y-m-d', $p['dob']);
            $passenger->setDOB($DOBPassenger);
            $passengers[] = $passenger;
            $priceTotal += $fees;
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
        Storage::disk('local')->put("xml/ats/book/" . (new \DateTime())->format('Y-m-d') . "/book_" . $generated_id . '_request.xml', $flightAPI->__getLastRequest());
        Storage::disk('local')->put("xml/ats/book/" . (new \DateTime())->format('Y-m-d') . "/book_" . $generated_id . '_response.xml', $flightAPI->__getLastResponse());
        $result = $response->getBookFareResult();
        $marge = 1 + (TlMarkUp::all()->find(1)->B2C / 100);
        $nbAd = sizeof($passengersPost['adult']);

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
        // $book->tl_agent_id = $customer->tl_agent_id;
        $book->transactionID = $generated_id;
        $book->Source = $source;
        $book->supplier = $this->SUPPLIER;
        $book->RecordSet = $recordSet;
        $book->recordLocator = $recordLocator;
        $book->carrierCode = $reservation["carrierCode"];
        $book->agencyPhone = $agencyPhone;
        $book->tl_payment_id = 3;
        $book->etate = "BOOKED";
        $book->fee = $priceTotal;
        $book->price = ceil(($result->getTotalPrice()->getValue() + $priceTotal + $lowCost) * $marge);
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

        foreach ($adults as $p) {
            $data["firstName"] = $p['firstName'];
            $data["lastName"] = $p['lastName'];
            $data["civility"] = $p['civility'];
            $data["type"] = "Adult";
            $data["dob"] = $p['dob'];
            //$data["passport"] = $p['passport'];
            $data["customer"] = $customer->id;
            $data["model"] = "flightApi";
            $data["flight"] = $book->id;
            $passenger = Customer::passenger($data);
        }
        foreach ($child as $p) {
            $data["type"] = "Child";
            $data["firstName"] = $p['firstName'];
            $data["lastName"] = $p['lastName'];
            $data["civility"] = $p['civility'];
            $data["dob"] = $p['dob'];
            // $data["passport"] = $p['passport'];
            $data["customer"] = $customer->id;
            $data["model"] = "flightApi";
            $data["flight"] = $book->id;
            $passenger = Customer::passenger($data);
        }
        foreach ($baby as $p) {
            $data["type"] = "Infant";
            $data["firstName"] = $p['firstName'];
            $data["lastName"] = $p['lastName'];
            $data["civility"] = $p['civility'];
            $data["dob"] = $p['dob'];
            //$data["passport"] = $p['passport'];
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
        $commandLine->priceBuy = $book->price-($priceTotal+$lowCost);
        $commandLine->marge_config = $priceTotal+$lowCost;
        $commandLine->tl_payment_id = 3;
        $commandLine->tl_customer_id = $customer->id;
        $commandLine->save();
        $postParams = $this->payment($customer, $book->price, $book->id, $commandLine->id);
        $bookProduct['oid'] = $postParams['oid'];
        $bookProduct['type'] = 'vol';
        $bookProduct['book'] = $commandLine->id;
        if (Session::has('bookProduct'))
            Session::forget('bookProduct');
        Session::put('bookProduct', $bookProduct);

        $agency=TlAgency::all()->first();
        $status = $this->getPNR($book);
        Mail::send("front.customer.email.notificationBookFlightClient",
            ["bookID" => $commandLine->id,
                "commandLine" => $commandLine,
                "customer" => $customer,
                "book" => $book,
                "status"=> $status,
                "agence" => $agency], function ($msg) use ($customer,$agency) {
                $msg->from($agency->booking_email, $agency->domain_name);
                $msg->subject("validation de réservation");
                $msg->to($customer->email);
            });
        Mail::send("front.customer.email.notificationBookFlightAgent",
            ["bookID" => $commandLine->id,
                "commandLine" => $commandLine,
                "customer" => $customer,
                "book" => $book,
                "status"=> $status,
                "agence" => $agency], function ($msg) use ($customer,$agency) {
                $msg->from($agency->booking_email, $agency->domain_name);
                $msg->subject("Nouvelle réservation");
                $msg->to($agency->booking_email);
            });

        return view('front.payment.payment')->with('postParams', $postParams);

    }

    public function getFareBook($id, Request $request)
    {
        $command = TlCommandLine::find($id);
        if (!$command) {
            return abort(404);
        }

        $book = FareBook::find($command->book_id);
        if (!$book) {
            return abort(404);
        }

        if ($request->get("error")) {
            $error = true;
        }else{
            $error = false;

        }

        if ($book->tlRules()->sum("price") >= $command->somePrice()) {
            $statusPayment = 1;
        } else if ($book->tlRules()->sum("price") == 0) {
            $statusPayment = 2;
        } else if ($book->tlRules()->sum("price") > 0 && $book->tlRules()->sum("price") < $command->somePrice()) {
            $statusPayment = 3;
        }

        $travel = TlTravel::find($book->tl_travel_id);
        $status = $this->getPNR($book);
        return view('front.flight.endBook')
            ->with('book', $book)
            ->with('error', $error)
            ->with('command', $command)
            ->with('travel', $travel)
            ->with('statusPayment', $statusPayment)
            ->with('status', $status);
    }

    private function getPNR($book)
    {

        $status = null;
        if (empty($book))
            return view('notFond');

        $source = $book->Source;
        $record = $book->recordLocator;
        $lastName = $book->tlCustomer()->first()->lastName;

        $crs = new CRS();
        $crs->setCRSName($this->PCC_SUPPLIER);
        $crs->setTerminalCountry('MA');
        $crs->setTerminalPCC($this->ATS_PCC);
        $crs->setReceivedFrom("CancelBooking");

        $pnrRequest = new PNRRequestData($source);
        $pnrRequest->setCRSConfig($crs);
        $pnrRequest->setCustomerLastName($lastName);
        $pnrRequest->setRecordLocator($record);

        $loginData = new LoginData();
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        // TODO make this more reliable / relative and incremental
        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
        $loginData->setTransactionID($generated_id);
        $Retrieve = new RetrievePassengerNameRecord($loginData, $pnrRequest);
        $flightAPI = new FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000]);
        $response = $flightAPI->RetrievePassengerNameRecord($Retrieve);
        foreach ($response->getRetrievePassengerNameRecordResult()->getInfos() as $info) {
            $status = $info->getBookingStatus();
        }
        return $status;
    }

    private function createdCustomer($request)
    {
        if ($request->isMethod('Post')) {
            $this->validate($request, [
                'civility' => 'required',
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
                'tel' => 'required'
            ]);

            $customer = new  TlCustomer();

            $customer->civility = $request->input('civility');
            $customer->firstName = $request->input('firstName');
            $customer->lastName = $request->input('lastName');
            $customer->email = $request->input('email');
            $customer->tel = $request->input('tel');
            $customer->email_token = base64_encode($request->input('email'));
            $customer->password = Str::random(8);
            // $customer->tel = $request->input('tel');
            $customer->status = 0;
            $customer->etat = 3;
            $customer->save();


            // return view('front.customer.confirmEmail')->with('customer', $customer);
            return $customer;
        }
    }

    private function payment($customer, $price, $product, $cmd)
    {
        $agency = TlAgency::first();
        $postParams['product'] = $product;
        $postParams['amount'] = $price;
        $postParams['TranType'] = "PreAuth";
        $postParams['callbackUrl'] = "https://".$agency->domain_name."/vol-payment";
        $postParams['shopurl'] = $cmd;
        $postParams['currency'] = "504";
        $postParams['rnd'] = microtime();
        $postParams['BillToName'] = $customer->firstName . " " . $customer->lastName;
        $postParams['BillToStreet1'] = $customer->address;
        $postParams['BillToCountry'] = "504";
        $postParams['email'] = $customer->email;
        $postParams['tel'] = $customer->tel;
        $postParams['encoding'] = "UTF-8";
        $postParams['oid'] = (new \DateTime())->format('Y-m-d_H-i-s');

        return $postParams;
    }

    public function callBack(Request $request)
    {

        $bookId = $request->input('product');
        //dd($bookId);
        Log::debug("message =>  $bookId");
        $data = $request->all();
        // unset($data["product"]);
        $s = "id => $bookId \n";
        foreach ($data as $key => $param) {
            $s .= "$key => $param  \n";
        }
        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        Storage::disk('local')->put("xml/payment/" . $generated_date . ".txt", $s);

        $agency = TlAgency::first();
        $storeKey = $agency->storyKey;
        $p = new Payment();
        $p->code = $request->input('TransId');
        $p->nbOperation = $request->input('oid');
        $p->err = $request->input('ErrMsg');
        $p->save();

        //comparaison hash calcule avec le hash envoyée par CMI
        $comparisonHash = PaymentService::IsPayment($data, $storeKey);

        if($comparisonHash == true){
            $book = FareBook::find($bookId);

            //comparaison prix commande avec le amount envoyée par CMI
            if($book->price == $data['amount']){
                // verification de l'état de la transaction
                if($data["ProcReturnCode"] == "00"){
                    $book->status = 1;
                    $book->save();

                    //add reglement
                    $rule = new  TlRule();
                    $rule->price = $data['amount'];
                    $rule->type = 4;
                    $rule->number = $data['TransId'];
                    $rule->date = Carbon::today()->format('Y-m-d');
                    $rule->transmitter = $data['cardHolderName'];
                    $rule->bank = $data['EXTRA_CARDBRAND'];
                    $rule->tl_bank_id = 1;
                    $rule->save();
                    $rule->fareBooks()->sync($bookId);

                    $commandLine = TlCommandLine::all()->where('book_id', $book->id)->first();
                    $commandLine->status = 1;
                    $commandLine->save();
                    $this->generateTicket($book);

                    echo "ACTION=POSTAUTH";

                }else{

                    echo "APPROVED";

                }
            }
        }else{

            echo "APPROVED";

        }

        // $customer = TlCustomer::all()->where('id', $book->tl_customer_id);
        // $this->generateTicket($book);

        // $status = $this->getPNR($book);
        // Mail::send("front.customer.email.notificationBookFlightClient",
        //     ["bookID" => $commandLine->id,
        //         "commandLine" => $commandLine,
        //         "customer" => $customer,
        //         "book" => $book,
        //         "status"=> $status,
        //         "agence" => $agency], function ($msg) use ($customer,$agency) {
        //         $msg->from($agency->booking_email, $agency->domain_name);
        //         $msg->subject("Réservation confirmée");
        //         $msg->to($customer->email);
        //     });
        // Mail::send("front.customer.email.notificationBookFlightAgent",
        //     ["bookID" => $commandLine->id,
        //         "commandLine" => $commandLine,
        //         "customer" => $customer,
        //         "book" => $book,
        //         "status"=> $status,
        //         "agence" => $agency], function ($msg) use ($customer,$agency) {
        //         $msg->from($agency->booking_email, $agency->domain_name);
        //         $msg->subject("Réservation confirmée");
        //         $msg->to($agency->booking_email);
        //     });

    }

    public function TicketBooking($id, Request $request)
    {

        $book = FareBook::find($id);

        $commandLine = TlCommandLine::where('book_id',$book->id)->first();
        $commandLine->status = 1;
        $commandLine->save();
        $book->status = 1;
        $book->save();

        $customer = TlCustomer::where('id', $book->tl_customer_id)->first();
        $status = $this->getPNR($book);
        $agency = TlAgency::first();
        $this->generateTicket($book);

        Mail::send("front.customer.email.notificationBookEndFlightClient",
            ["bookID" => $commandLine->id,
                "commandLine" => $commandLine,
                "customer" => $customer,
                "book" => $book,
                "status"=> $status,
                "agence" => $agency], function ($msg) use ($customer,$agency) {
                $msg->from($agency->booking_email, $agency->domain_name);
                $msg->subject("Réservation validée");
                $msg->to($customer->email);
            });


        return redirect()->back();
    }


    public function cancelTicket($id, Request $request)
    {


        $book = FareBook::all()->find($id);
        if (empty($book))
            return view('notFond');

        $ticket = Ticket::all()->where('fare_book_id', $id)->first();
        if (empty($ticket))
            return view('notFond');

        $source = $book->Source;
        $record = $book->recordLocator;

        $crs = new CRS();
        $crs->setCRSName($this->PCC_SUPPLIER);
        $crs->setTerminalCountry('MA');
        $crs->setTerminalPCC($this->ATS_PCC);
        $crs->setReceivedFrom("NanoPlus");
        $crs->setUser($this->CRS_USER);

        $cancelTicket = new CancelTicketRequestTicket();
        $cancelTicket->setFirstTicketNumber($ticket->number);

        $cancelRequest = new CancelTicketRequestData($source);
        $cancelRequest->setCRSConfig($crs);
        $cancelRequest->setRecordLocator($record);
        $cancelRequest->setTickets([$cancelTicket]);

        $loginData = new LoginData;
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        // TODO make this more reliable / relative and incremental
        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
        $loginData->setTransactionID($generated_id);
        $cancel = new CancelTicket($loginData, $cancelRequest);
        $flightAPI = new FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => 0]);
        $response = $flightAPI->CancelTicket($cancel);

        Storage::disk('local')->put("xml/ats/cancelTicket" . (new \DateTime())->format('Y-m-d') . "/" . $generated_id . '_CancelTicket_request.xml', $flightAPI->__getlastrequest());
        Storage::disk('local')->put("xml/ats/cancelTicket" . (new \DateTime())->format('Y-m-d') . "/" . $generated_id . '_CancelTicket_response.xml', $flightAPI->__getlastresponse());

        $tickets = $response->getCancelTicketResult()->getTickets();
        foreach ($tickets as $t) {
            $status = $t->getStatusCode();

            if ($status >= 0) {
                $ticket->status = 'cancelled';
                $ticket->save();
            } else {
                $error = $t->getErrorText();
                \Log::debug("Can't cancel ticket " . $ticket->id . " - status: " . $status . " - error: " . $error);
            }
        }

        $commandLine = TlCommandLine::where('book_id',$book->id)->first();
        $commandLine->status = 2;
        $commandLine->save();
        $book->status = 2;
        $book->save();

        return redirect()->route('flight.cancelBooking', ['id' => $book->id]);
    }

    public function bookFlightPdf($id)
    {
        $cmd = TlCommandLine::all()->find($id);
        $book = FareBook::all()->find($cmd->book_id);

        if (empty($book) or Auth::guard('customer')->user()->id != $cmd->tl_customer_id)
            return abort(404);

        $customer = TlCustomer::all()->find($cmd->tl_customer_id);
        if (!$customer) {
            return abort(404);
        }
        $agency = TlAgency::first();

        $data['command'] = 'CO' . Carbon::parse($book->created_at)->format('ym') . '-' . sprintf('%04u', $id);
        $data['date'] = Carbon::parse($book->created_at)->format('d/m/Y');
        $data['name'] = $book->legs()->first()->segments()->first()->Departure . ' - ' . $book->legs()->first()->segments()->orderBy('id', 'DESC')->first()->Arrival;
        $data['etat'] = $book->status;
        $data['passager'] = $book->tlPassengers()->count();
        $data['Aller'] = Carbon::parse($book->legs()->first()->segments()->first()->DepartureDateTime)->format('d/m/Y H:i');
        if ($book->legs()->count() > 1)
            $data['Reteur'] = Carbon::parse($book->legs()->orderBy('id', 'DESC')->first()->segments()->orderBy('id', 'DESC')->first()->DepartureDateTime)->format('d/m/Y H:i');
        else
            $data['Reteur'] = "";

        $data['type'] = $book->legs()->count() > 1 ? "aller-retour" : "aller simple";
        $data['price'] = $book->price;
        $book = $data;
        //  return view('front.hotel.pdf.book', compact( 'book', 'customer', 'agency'));
        $pdf = PDF::loadView('front.flight.pdf.book', compact('book', 'customer', 'agency'));
        return $pdf->download('bookHotel.pdf');

    }

    public function payment2($id)
    {
        $cmd = TlCommandLine::find($id);
        $book = FareBook::find($cmd->book_id);

        $rulesPrice = $book->tlRules()->sum('price');
        $restPrice = $cmd->somePrice() - $rulesPrice;
        if (empty($book) or Auth::guard('customer')->user()->id != $cmd->tl_customer_id)
            return abort(404);

        $customer = Auth::guard('customer')->user();
        $postParams = $this->payment($customer, $restPrice, $book->id, $id);
        $bookProduct['oid'] = $postParams['oid'];
        $bookProduct['type'] = 'vol';
        $bookProduct['book'] = $id;
        if (Session::has('bookProduct'))
            Session::forget('bookProduct');
        Session::put('bookProduct', $bookProduct);
        return view('front.payment.payment')->with('postParams', $postParams);

    }

    private function generateTicket($book)
    {

        $source = $book->Source;
        $record = $book->recordLocator;
        $passengerLastName = $book->tlPassengers()->first()->lastName;

        $crs = new CRS();
        $crs->setCRSName($this->PCC_SUPPLIER);
        $crs->setTerminalCountry('MA');
        $crs->setTerminalPCC($this->ATS_PCC);
        $crs->setReceivedFrom("NanoPlus");
        $crs->setUser($this->CRS_USER);
        $crs->setGDS($this->PCC_SUPPLIER);

        $passengersList = [];

        foreach ($book->tlPassengers as $p) {
            $p = $p->pivot;

            $passenger = new TicketBookingRequestPassenger($p->type);
            $passenger->setFirstName($p->firstName);
            $passenger->setLastName($p->lastName);
            $passenger->setGender($p->gender);
            $passenger->setIssueOptions("Tickets");
            $passenger->setPaymentSelection(0);
            $passenger->setTicketEMDs([]);
            $passenger->setIncludeOPC(false);
            $passengersList[] = $passenger;
        }

        // var_dump($passengers); die;

        $commission = new TicketBookingRequestCommission(0);
        $commission->setOverwriteIfElementsExist(false);
        $commission->setType("None");

        $endorsement = new TicketBookingRequestPaxText;
        $endorsement->setOverwriteIfExist(false);

        $payementForm = new TicketBookingRequestPayment(0, "Cash");
        $payementForm->setWantApprovalCode(false);
        $payementForm->setOverwriteIfElementsExist(false);
        $payementForm->setPaymentNumber(0);
        $payementForm->setCreditCardNumberIsEncoded(false);
        $payementForm->setCreditCardCVCNumberIsEncoded(false);
        $payementForm->setBankAccountNumberIsEncoded(false);

        $tourCode = new TicketBookingRequestPaxText;
        $tourCode->setOverwriteIfExist(false);

        $ticketIssue = new TicketBookingRequestIssue;
        $ticketIssue->setIssuePassengers($passengersList);
        $ticketIssue->setValidatingCarrier($book->carrierCode);
        $ticketIssue->setCommission($commission);
        $ticketIssue->setEndorsement($endorsement);
        $ticketIssue->setFormOfPayments([$payementForm]);
        $ticketIssue->setIssueSegments(array());
        $ticketIssue->setTourcode($tourCode);

        $ticketBookingRequestData = new TicketBookingRequestData($source);
        $ticketBookingRequestData->setCRSConfig($crs);
        $ticketBookingRequestData->setRecordLocator($record);
        $ticketBookingRequestData->setPassengerLastName($passengerLastName);
        $ticketBookingRequestData->setTicketIssueDetails($ticketIssue);
        $ticketBookingRequestData->setIssueFareType("IssueStoredFare");
        $ticketBookingRequestData->setRequestGDSItinerary(false);

        $loginData = new LoginData;
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        // TODO make this more reliable / relative and incremental
        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
        $loginData->setTransactionID($generated_id);
        $tiket = new TicketBooking($loginData, $ticketBookingRequestData);
        $flightAPI = new FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => 0]);
        $response = $flightAPI->TicketBooking($tiket);

        Storage::disk('local')->put("xml/ats/TicketBooking/" . (new \DateTime())->format('Y-m-d') . "/" . $generated_id . '_TicketBooking_request.xml', $flightAPI->__getlastrequest());
        Storage::disk('local')->put("xml/ats/TicketBooking/" . (new \DateTime())->format('Y-m-d') . "/" . $generated_id . '_TicketBooking_response.xml', $flightAPI->__getlastresponse());


        $loginData = new LoginData;
        $loginData->setUserName($this->ATS_USERNAME);
        $loginData->setPassword($this->ATS_PASSWORD);
        // TODO make this more reliable / relative and incremental
        $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
        $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
        $loginData->setTransactionID($generated_id);


        $passengers = $response->getTicketBookingResult()->getPassengers();

        foreach ($passengers as $passenger) {
            $ticketNumbers = $passenger->getTicketDetails()->getTicketNumbers();
            foreach ($ticketNumbers as $ticketNumber) {
                $ticket = new Ticket();
                $ticket->number = $ticketNumber;
                $ticket->status = 'booked';
                $ticket->firstName = $passenger->getPassengerDetails()->getFirstName();
                $ticket->lastName = $passenger->getPassengerDetails()->getLastName();
                $ticket->fare_book_id = $book->id;
                $ticket->save();
            }


        }



    }

    public function downloadTicket($id)
    {

        $command = TlCommandLine::find($id);
        if (!$command) {
            return abort(404);
        }
        $booking = FareBook::find($command->book_id);
        if (!$booking) {
            return abort(404);
        }

        $agency=TlAgency::all()->first();
        $tickets = collect(Ticket::all()->where('fare_book_id', $booking->id));

        if($tickets->count()==0)
            $tickets= BookService::ticketPF($id);

        $pdf = PDF::loadView('front.flight.pdf.ticket', compact("booking", "tickets","agency"));
        return $pdf->download('ticket.pdf');
    }


    public function cancelMeBook()
    {
        //WTN8G4 - WT5KJS - WSVBZU - WST3HO - WSLQF2
        $records = ["WXLR1W"];
        foreach ($records as $record) {
            $source = "GDSSource";
            //$record = "VIQ83N";
            $carrierCode = "AT";
            $agencyPhone = "00212539981478";
            $currencyCode = "MAD";
            $languageCode = "FR";
            $customerLastName = "amghar";


            $crs = new CRS();
            $crs->setCRSName($this->PCC_SUPPLIER);
            $crs->setTerminalCountry('MA');
            $crs->setTerminalPCC($this->ATS_PCC);
            $crs->setReceivedFrom("NanoPlus");
            $crs->setUser($this->CRS_USER);

            $configuration = new CancelRequestConfiguration;
            $configuration->setAgencyPhone($agencyPhone);
            $configuration->setCurrencyCode($currencyCode);
            $configuration->setLanguageCode($languageCode);

            $cancelRequest = new CancelRequestData($source);
            $cancelRequest->setCRSConfig($crs);
            $cancelRequest->setRecordLocator($record);
            $cancelRequest->setConfiguration($configuration);
            $cancelRequest->setIsAllotment(false);
            $cancelRequest->setCustomerLastName($customerLastName);
            $cancelRequest->setCarrierCode($carrierCode);

            $loginData = new LoginData;
            $loginData->setUserName($this->ATS_USERNAME);
            $loginData->setPassword($this->ATS_PASSWORD);
            // TODO make this more reliable / relative and incremental
            $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
            $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
            $loginData->setTransactionID($generated_id);
            $cancel = new CancelBooking($loginData, $cancelRequest);
            $flightAPI = new FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000, 'trace' => true, 'exceptions' => 0]);
            $response = $flightAPI->CancelBooking($cancel);

            Storage::disk('local')->put("xml/ats/cancel/" . (new \DateTime())->format('Y-m-d') . "/cancel_" . $generated_id . '_request.xml', $flightAPI->__getlastrequest());
            Storage::disk('local')->put("xml/ats/cancel/" . (new \DateTime())->format('Y-m-d') . "/cancel_" . $generated_id . '_response.xml', $flightAPI->__getlastresponse());

            $pnrRequest = new PNRRequestData($source);
            $pnrRequest->setCRSConfig($crs);
            $pnrRequest->setCustomerLastName($customerLastName);
            $pnrRequest->setRecordLocator($record);

            $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
            $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
            $loginData->setTransactionID($generated_id);
            $Retrieve = new RetrievePassengerNameRecord($loginData, $pnrRequest);
            $flightAPI = new FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000]);
            // $response = $flightAPI->RetrievePassengerNameRecord($Retrieve);
            // $result = $response->getRetrievePassengerNameRecordResult();
            // $info = $result->getInfos()->getPNRResponseInfo()[0];
            // $status = $info->getBookingStatus();

            $crs = new CRS();
            $crs->setCRSName($this->PCC_SUPPLIER);
            $crs->setTerminalCountry('MA');
            $crs->setTerminalPCC($this->ATS_PCC);
            $crs->setReceivedFrom("CancelBooking");

            $pnrRequest = new PNRRequestData($source);
            $pnrRequest->setCRSConfig($crs);
            $pnrRequest->setCustomerLastName($customerLastName);
            $pnrRequest->setRecordLocator($record);

            $loginData = new LoginData;
            $loginData->setUserName($this->ATS_USERNAME);
            $loginData->setPassword($this->ATS_PASSWORD);
            // TODO make this more reliable / relative and incremental
            $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
            $generated_id = 'NanoPLUS.zampaktu.' . $generated_date;
            $loginData->setTransactionID($generated_id);
            $Retrieve = new RetrievePassengerNameRecord($loginData, $pnrRequest);
            $flightAPI = new FlightAPI(['keep_alive' => false, 'connection_timeout' => 500000]);
            $response = $flightAPI->RetrievePassengerNameRecord($Retrieve);
            echo "<pre>";
            var_dump($response);
        }

        dd("good");

    }
}
