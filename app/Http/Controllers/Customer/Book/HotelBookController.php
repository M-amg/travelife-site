<?php

namespace App\Http\Controllers\Customer\Book;

use PDF;
use Carbon\Carbon;
use App\models\Payment;
use App\models\book\TlRule;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\models\hotel\TlHotel;

use App\Services\BillService;
use App\Adapters\JumboAdapter;
use App\Services\HotelService;
use App\models\agency\TlAgency;
use App\models\book\TlPassenger;
use App\Services\HotelServiceII;
use App\Services\PaymentService;
use App\Adapters\HotelBedsAdapter;


use App\models\book\TlCommandLine;
use App\models\hotel\TlSupplement;
use App\models\customer\TlCustomer;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\models\book\bookHotel\TlBookRoom;
use App\models\bookHotelApi\ApiHotelBook;
use App\models\book\bookHotel\TlBookHotel;
use App\models\bookHotelApi\BookingRoomApi;

use App\Http\Controllers\HotelApiController;
use App\models\bookHotelApi\CancelPolicyInfoApi;
use App\models\hotelAPI\Hotels\RoomOccupancyRQV20;
use App\models\book\bookHotel\TlBookHotelSupplement;

class HotelBookController extends Controller
{

    /**
     * @var \App\Services\HotelService $hotelService
     */
    protected $hotelService = null;

    public function __construct(HotelService $hotelService)
    {
        parent::__construct();
        $this->hotelService = $hotelService;
    }


    public function hotelWord($id, Request $request)
    {
        $command = TlCommandLine::find($id);
        if (!$command) {
            return abort(404);
        }
        $booking = ApiHotelBook::find($command->book_id);
        if ($request->get("error")) {
            $error = true;
        }else{
            $error = false;
        }

        if (!$booking) {
            return abort(404);
        }

        return view('front.hotelApi.bookDetail')->with('book', $booking)->with('command', $command)->with('error', $error);
    }

    public function confirmRooms(Request $request)
    {
        $hotelService = new HotelService;
        if ($request->input('p') == 2) {
            if (Session::has('searchParameters')) {
                $searchParameters = Session::get('searchParameters');
            } else {
                return back();
            }

            $hotel_id = $request->input('hotel');
            $checkIn = $searchParameters['checkIn'];
            $checkOut = $searchParameters['checkOut'];
            $rooms = $searchParameters['rooms'];
            $nationality = $searchParameters['nationality'];
            $confirmedRoomsInput = $request->input('confirmedRooms');

            $result = $hotelService->confirmJumboRooms($hotel_id, $checkIn, $checkOut, $rooms, $confirmedRoomsInput, $nationality);

            Session::put('bookingData', [
                'hotel' => $result['hotel'],
                'hotelId' => $hotel_id,
                'occupancies' => $result['occupancies'],
                'booking' => $result['booking'],
                'confirmedRooms' => $confirmedRoomsInput,
            ]);

        } else {
            if (Session::has('sessionId')) {
                $sessionId = Session::get('sessionId');
            } else {
                return 'error no session ID';
            }

            $hotelCode = $request->input('hotel');
            $rateDetailCode = $request->input('rate');
            $confirmedRoomsInput = $request->input('confirmedRooms');

            $result = $hotelService->confirmRooms($sessionId, $hotelCode, $rateDetailCode, $confirmedRoomsInput);
        }


        $adult = 1;
        $children = 0;

        return view('nuitee.bookingForm', ['hotel' => $result['hotel'], 'booking' => $result['booking'], 'rooms' => $result['rooms'], 'adult' => $adult, 'children' => $children]);
    }

    public function bookRooms()
    {

        $clients = Auth::guard("customer")->user();

        if (!$clients)
            return abort(404);

        $request = Session::get("requestBook");
        if (!$request)
            return abort(404);

        $booking = new ApiHotelBook();

        if ($request['p'] == 2) {

            if (Session::has('searchParameters') && Session::has('bookingData')) {
                $searchParameters = Session::get('searchParameters');
                $bookingData = Session::get('bookingData');
            } else {
                return redirect()->back();
            }

            $totalPrice = $bookingData['booking']['totalPrice'];
            // dd($bookingData);
            if (!$totalPrice) {
                return back()->withError("Couldn't get the total price!");
            }
            /*$hasEnoughBalance = BalanceService::hasEnoughBalance($agent->agence, 'hotel', $totalPrice);
            if(! $hasEnoughBalance){
                return back()->withError("Not enough balance to accomplish this operation!");
            }*/

            $booking->hotelCode = $bookingData['hotelId'];
            $booking->hotelName = $bookingData['hotel']['name'];
            $booking->hotelAddress = $bookingData['hotel']['address'];
            $booking->longitude = '';
            $booking->latitude = '';
            $booking->starRating = $bookingData['hotel']['starRating'];
            $booking->provider = 'jumbo';
            $booking->tl_payment_id = 3;
            $booking->tl_customer_id = $clients->id;

            $booking->save();

            $hotel_id = $bookingData['hotelId'];
            $checkIn = $searchParameters['checkIn'];
            $checkOut = $searchParameters['checkOut'];
            $rooms = $request['room'];

            $occupancies = $bookingData['occupancies'];

            $booking_result = $this->hotelService->bookJumboRooms($hotel_id, $checkIn, $checkOut, $rooms, $occupancies, $clients);

        }


        $booking->bookingId = $booking_result['bookingId'];
        $booking->checkIn = $booking_result['checkIn']; // TODO need to be converted
        $booking->checkOut = $booking_result['checkOut'];
        $booking->hotelRemarks = $booking_result['remarks'];
        $booking->price = $booking_result['price'];
        $booking->providerPrice = $booking_result['price'];
        // $booking->currencyCode = $booking_result['currencyCode'];
        $booking->reservationStatus = $booking_result['status'];
        $booking->confirmationNumber = $booking_result['confirmationNumber'];

        $booking->defaultCancelPolicy = $booking_result['defaultCancelPolicy'];

        $booking->refundableTag = $booking_result['refundableTag'];

        $saved = $booking->save();

        $rms = [];
        foreach ($booking_result['rooms'] as $tmp_room) {
            $room = new BookingRoomApi();
            $room->firstName = $tmp_room['firstName'];
            $room->lastName = $tmp_room['lastName'];
            $room->adultCount = $tmp_room['adultCount'];
            $room->childCount = $tmp_room['childCount'];
            $room->board = $tmp_room['board'];
            $room->roomDescription = $tmp_room['roomDescription'];
            $rms[] = $room;
        }

        $booking->rooms()->saveMany($rms);

        $cpis = [];
        foreach ($booking_result['cancellationPolicyInfos'] as $cpi) {
            $tmp_cpi = new CancelPolicyInfoApi;
            $tmp_cpi->amount = $cpi['amount'];
            $tmp_cpi->cancelTime = $cpi['cancelTime'];
            $tmp_cpi->type = $cpi['type'];
            $tmp_cpi->cancellationPolicy = $cpi['cancellationPolicy'];
            $cpis[] = $tmp_cpi;
        }
        foreach ((array)$rooms as $key => $room) {
            //dd($room);
            $confBook = new TlPassenger();

            if (isset($room["dob"]))
                $confBook->dob = Carbon::createFromFormat('d/m/Y', $room["dob"])->format('Y-m-d');
            else
                $confBook->dob = Carbon::now()->subYear(30)->format('Y-m-d');

            $confBook->passport = $room["passport"] ?? $room["passport"];
            $confBook->civility = $room["Civilite"];
            $confBook->lastName = $room["lastName"];
            $confBook->firstName = $room["firstName"];
            $confBook->save();


            if (isset($room["firstNameE"])) {
                if (isset($room["dobE"]))
                    $confBook->dob = Carbon::createFromFormat('d/m/Y', $room["dobE"])->format('Y-m-d');
                $confBook->passport = $room["passportE"] ?? $room["passportE"];
                $confBook->civility = $room["CiviliteE"];
                $confBook->lastName = $room["lastNameE"];
                $confBook->firstName = $room["firstNameE"];
            }

            $confBook->save();
            $confBook->attachApiHotelBook($booking->id);
        }
        $booking->cancelPoliciesInfos()->saveMany($cpis);

        if ($saved) {
            return redirect()->route('showBooking', ['id' => $booking->id]);
        }
        return redirect()->back();
    }

    public function getVoucher(Request $request, $id)
    {
        $agent_id = Auth::user()->id;
        $booking = Booking::where([
            'id' => $id,
            'agent_id' => $agent_id,
        ])->get()->first();

        if (empty($booking))
            back()->withError('Booking not found');

        $confirmation = $this->hotelService->generateVoucher($booking->bookingId);

        $confirmationNumber = $confirmation->getConfirmationNumber();
        $bookingStatus = $confirmation->getBookingStatus();

        $booking->confirmationNumber = $confirmationNumber;

        $booking->reservationStatus = $bookingStatus;

        $booking->save();

        return redirect()->route('showBooking', ['id' => $id]);
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
        Storage::disk('local')->put("xml/payment/HotelApi/after/" .(new \DateTime())->format('Y-m-d')."/". $generated_date . ".txt", $s);

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
              $book = ApiHotelBook::find($bookId);

              //comparaison prix commande avec le amount envoyée par CMI
                if($book->price == $data['amount']){
                    // verification de l'état de la transaction
                    if($data["ProcReturnCode"] == "00"){
                        $book->finishBooking();

                        $rule = new  TlRule();
                        $rule->price = $data['amount'];
                        $rule->type = 4;
                        $rule->number = $data['TransId'];
                        $rule->date = Carbon::today()->format('Y-m-d');
                        $rule->transmitter = $data['cardHolderName'];
                        $rule->bank = $data['EXTRA_CARDBRAND'];
                        $rule->tl_bank_id = 1;
                        $rule->save();
                        $rule->apiHotelBook()->sync($bookId);
                        $commandLine = TlCommandLine::where('book_id', $bookId)->where('bookName', 'HotelApi')->first();
                        $commandLine->status = 1;
                        $commandLine->save();

                        echo "ACTION=POSTAUTH";

                    }else{

                        echo "APPROVED";

                    }
                }
            }else{

                echo "APPROVED";

            }

    }

    public function confirmBooking(Request $request)
    {

        dd('test');
        if (!Auth::guard("customer")->check())
            $customer = $this->createdCustomer($request);
        else
            $customer = Auth::guard("customer")->user();

        $payment = $request->input('payment');
        // $customer = Auth::guard("customer")->user();
        $roomBooks = Session::get('hotelRoomBooking');
        $supplementBooks = Session::get('supplementBooks');
        //dd($roomBooks);
        $rooms = $request->input('room');

        $book = new TlBookHotel();
        $book->tl_hotel_id = $roomBooks[1]["hotel"];
        $book->tl_payment_id = $request->input('payment');
        $book->checkIn = $roomBooks[1]["chickIn"];
        $book->checkOut = $roomBooks[1]["chickOut"];
        $book->tl_customer_id = $customer->id;
        $book->status = 0;
        $book->price = 0;
        $book->save();

        $price = 0;
        $marge = 0;
        //  echo "<pre>";
        $passengers["adults"] = 0;
        $passengers["Child"] = 0;
        $passengers["Baby"] = 0;
        $passengers["Minor"] = 0;
        foreach ($roomBooks as $roomBook) {
            $passengers["adults"] += $roomBook["passengers"]["adults"];
            $passengers["Child"] += isset($roomBook["passengers"]["Child"]) ? $roomBook["passengers"]["Child"] : 0;
            $passengers["Baby"] += isset($roomBook["passengers"]["Baby"]) ? $roomBook["passengers"]["Baby"] : 0;
            $passengers["Minor"] += isset($roomBook["passengers"]["Minor"]) ? $roomBook["passengers"]["Minor"] : 0;
        }
        $hotel = TlHotel::all()->find($book->tl_hotel_id);
        foreach ($rooms as $key => $room) {
            $roomBook = $roomBooks->where("id", $key)->first();
            $bookRoom = new TlBookRoom();
            $bookRoom->tl_room_type_id = $roomBook["room"];
            $bookRoom->tl_book_hotel_id = $book->id;
            $bookRoom->pension = $roomBook["board"];
            //$price=getHotelPrice($book->hotel_id,$bookRoom->tl_room_type_id,$book->checkIn,$book->checkOut,$room[$key]);
            $bookRoom->price = $roomBook['price'];
            $bookRoom->save();
            $pass = [];
            foreach ($rooms[$key] as $p) {
                if (isset($p['lastName'])) {
                    $passenger = new TlPassenger();
                    $passenger->firstName = $p['firstName'];
                    $passenger->lastName = $p['lastName'];
                    $passenger->civility = $p['civility'];
                    $passenger->type = $p['type'];
                    $passenger->room = $key;
                    $passenger->dob = Carbon::createFromFormat('Y-d-m', $p['dob'])->format('Y-m-d');
                    //   $passenger->passport = $p['passport'];
                    $passenger->save();
                    $passenger->attachBookHotel($book->id);
                    $pass[] = $passenger->id;
                }

            }
            $bookRoom->tlPassengers()->sync($pass);
            $price += $roomBook['price'];
            $marge += $roomBook['commission'];
        }
        $supplements = TlSupplement::all()
            ->where("tl_hotel_id", $hotel->id)
            ->where('startDate', '<=', $roomBooks[1]["chickIn"]->format("Y-m-d"))
            ->where('endDate', '>=', $roomBooks[1]["chickOut"]->format("Y-m-d"));

        foreach ($supplements as $supplement) {
            $priceSup = 0;
            $margeSup = 0;
            if ($supplement->isObligatory == 1 or in_array($supplement->id, $supplementBooks)) {
                $priceInfant["Baby"] = $supplement->price_baby;
                $priceInfant["Minor"] = $supplement->price_minor;
                $priceInfant["Child"] = $supplement->price_child;
                $commission = $supplement->marge;
                if ($supplement->type_supplement == "pax") {
                    if ($supplement->price_adult) {
                        if ($supplement->type_marge == 1) {
                            $commission = ($supplement->price_adult * $supplement->marge) / 100;
                        }
                        $margeSup+=$commission*$passengers['adult'];
                        $priceSup += ($supplement->price_adult + $commission) * $passengers['adult'];
                    }
                    foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
                        $commission = $supplement->marge;
                        if ($priceInfant[$ageEnfant->TypeEnfant]) {
                            if ($supplement->type_marge == 1) {
                                $commission = ($priceInfant[$ageEnfant->TypeEnfant] * $supplement->marge) / 100;
                            }
                            $margeSup+=$commission*$passengers[$ageEnfant->TypeEnfant];
                            $priceSup += ($priceInfant[$ageEnfant->TypeEnfant] + $commission) * $passengers[$ageEnfant->TypeEnfant];
                        }
                    }
                } else {
                    if ($supplement->type_marge == 1) {
                        $commission = ($supplement->price_prestation * $supplement->marge) / 100;
                    }
                    $margeSup+=$commission;
                    $priceSup += $supplement->price_prestation + $commission;
                }


                $bookSupplement = new TlBookHotelSupplement();
                $bookSupplement->adult = $passengers['adult'];
                $bookSupplement->Baby = $passengers['Baby'];
                $bookSupplement->Minor = $passengers['Minor'];
                $bookSupplement->Child = $passengers['Child'];
                $bookSupplement->price = $priceSup;
                $bookSupplement->tl_supplement_id = $supplement->id;
                $bookSupplement->tl_book_hotel_id = $book->id;
                $bookSupplement->save();
                $price += $bookSupplement->price;
                $marge +=$margeSup;

            }
        }

        $book->price = $price;
        $book->save();
        $commandLine = new TlCommandLine();
        $commandLine->book_id = $book->id;
        $commandLine->bookName = "TlBookHotel";
        $commandLine->type = "Hotel";
        $commandLine->status = 0;
        $commandLine->priceBuy = $price-$marge;
        $commandLine->marge_config = $marge;
        $commandLine->price = $price;
        $commandLine->tl_payment_id = $payment;
        $commandLine->tl_customer_id = $customer->id;
        $commandLine->save();

        $agency = TlAgency::all()->first();
        Mail::send("front.customer.email.notificationBookHotelAgent",
            ["bookID" => $commandLine->id,
                "commandLine" => $commandLine,
                "customer" => $customer,
                "book" => $book,
                "agence" => $agency], function ($msg) use ($customer,$agency) {
                $msg->from($agency->booking_email, $agency->domain_name);
                $msg->subject("Nouvelle réservation");
                $msg->to($agency->booking_email);
            });
        Mail::send("front.customer.email.notificationBookHotelClient",
            ["bookID" => $commandLine->id,
                "commandLine" => $commandLine,
                "customer" => $customer,
                "book" => $book,
                "agence" => $agency], function ($msg) use ($customer,$agency) {
                $msg->from($agency->booking_email, $agency->domain_name);
                $msg->subject("validation de réservation");
                $msg->to($customer->email);
            });

        if ($payment == 3) {
            $postParams = $this->payment($customer, $price, $book->id, $commandLine->id);
            $bookProduct['oid'] = $postParams['oid'];
            $bookProduct['type'] = 'hotel';
            $bookProduct['book'] = $commandLine->id;
            if (Session::has('bookProduct'))
                Session::forget('bookProduct');
            Session::put('bookProduct', $bookProduct);
            return view('front.payment.payment')->with('postParams', $postParams);
        }

        Session::forget("supplementBooks");
        Session::forget("RoomBookHotel");
        return redirect()->route('front.hotel.bookDetail', ['id' => $commandLine->id]);
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
           
            return $customer;
        }
    }

    private function payment($customer, $price, $product, $cmd)
    {
        $agency = TlAgency::first();
        $postParams['product'] = $product;
        $postParams['amount'] = $price;
        $postParams['TranType'] = "PreAuth";
        $postParams['callbackUrl'] = "https://".$agency->domain_name."/hotel2-payment";
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

    public function callBack2(Request $request)
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
            $book = TlBookHotel::find($bookId);

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
                    $rule->tlBookHotel()->sync($bookId);

                    $commandLine = TlCommandLine::where('book_id', $bookId)->where('bookName', 'TlBookHotel')->first();
                    $commandLine->status = 1;
                    $commandLine->save();

                  echo "ACTION=POSTAUTH";

                }else{

                    echo "APPROVED";

                }
            }
        }else{

            echo "APPROVED";

        }

    }

    public function hotel($id, Request $request)
    {

        $cmd = TlCommandLine::find($id);
        $book = TlBookHotel::find($cmd->book_id);

        if ($request->get("error")) {
            $error = true;
        }else{
            $error = false;
            // $cmd->status = 1;
            // $cmd->save();
            // $book->status = 1;
            // $book->save();
        }

        $data['command'] = 'CO' . Carbon::parse($book->created_at)->format('ym') . '-' . sprintf('%04u', $id);

        $data['idCommande'] = $id;
        $data['name'] = $book->tlHotel()->first()->name;
        $data['status'] = $book->status;
        $data['address'] = $book->tlHotel()->first()->address;
        $data['category'] = $book->tlHotel()->first()->category;
        $data['checkIn'] = Carbon::parse($book->checkIn)->format('d/m/Y');
        $data['checkOut'] = Carbon::parse($book->checkOut)->format('d/m/Y');
        $data['chickIn'] = Carbon::parse($book->checkIn);
        $data['chickOut'] = Carbon::parse($book->checkOut);
        $data["hotel"] = $book->tlHotel()->first()->id;
        $data['price'] = $book->price;
        $data['rooms'] = [];
        $data['passengers']['adults'] = 0;
        $data['passengers']['Child'] = 0;
        $data['passengers']['Baby'] = 0;
        $data['passengers']['Minor'] = 0;
        $data['supplements'] = $book->tlBookHotelSupplements;
        foreach ($book->tlBookRooms as $room) {
            $r['name'] = $room->tlRoomType()->first()->name;
            $r['price'] = $room->price;
            $r['pension'] = $room->pension;
            $r['id'] = $room->id;
            $r['adult'] = 0;
            $r['infant'] = 0;
            $r['Baby'] = 0;

            foreach ($room->tlPassengers as $passenger) {
                $passenger = $passenger->pivot;

                $p['civility'] = $passenger->civility;
                $p['firstName'] = $passenger->firstName;
                $p['lastName'] = $passenger->lastName;

                $p['dob'] = Carbon::parse($passenger->dob)->format('d/m/Y');
                $p['type'] = $passenger->type;
                if ($passenger->type == 'Adult') {
                    $r['adult'] += 1;
                    $data['passengers']['adults'] += 1;
                } elseif ($passenger->type == 'Child') {
                    $r['infant'] += 1;
                    $data['passengers']['Child'] += 1;
                }else{
                    $r['Baby'] += 1;
                    $data['passengers']['Baby'] += 1;
                }
                $data['passengersCommande'][] = $p;
            }
            $data['rooms'][] = $r;
        }
        $data['id'] = $room ? $room->id : '';

        $item = collect();
        $item->push($data);
        $item1 = collect();
        $item1->push($item);
        Session::put('RoomBookHotel', $item1);

        return view('front.hotel.bookDetail')->with('book', $data)->with('error', $error);
    }

    public function bookHotelPdf($id)
    {


        $cmd = TlCommandLine::all()->find($id);
        $book = TlBookHotel::all()->find($cmd->book_id);

        if (empty($book) or Auth::guard('customer')->user()->id != $cmd->tl_customer_id)
            return abort(404);

        $customer = TlCustomer::all()->find($cmd->tl_customer_id);
        if (!$customer) {
            return abort(404);
        }
        $agency = TlAgency::all()->first();

        $data['command'] = 'CO' . Carbon::parse($book->created_at)->format('ym') . '-' . sprintf('%04u', $id);
        $data['date'] = Carbon::parse($book->created_at)->format('d/m/Y');
        $data['name'] = $book->tlHotel()->first()->name;
        $data['etat'] = $book->status;
        $data['address'] = $book->tlHotel()->first()->address;
        $data['category'] = $book->tlHotel()->first()->category;
        $data['checkIn'] = Carbon::parse($book->checkIn)->format('d/m/Y');
        $data['checkOut'] = Carbon::parse($book->checkOut)->format('d/m/Y');

        $data['price'] = $book->price;
        $data['rooms'] = [];
        $data['passengers'] = [];
        foreach ($book->tlBookRooms as $room) {
            $r['name'] = $room->tlRoomType()->first()->name;

            $r['price'] = $room->price;
            $r['pension'] = $room->pension;
            $r['id'] = $room->id;
            $r['adult'] = 0;
            $r['infant'] = 0;

            foreach ($room->tlPassengers as $passenger) {
                $passenger = $passenger->pivot;

                $p['civility'] = $passenger->civility;
                $p['firstName'] = $passenger->firstName;
                $p['lastName'] = $passenger->lastName;

                $p['dob'] = Carbon::parse($passenger->dob)->format('d/m/Y');
                $p['type'] = $passenger->type;
                if ($passenger->type == 'Adult') {
                    $r['adult'] += 1;
                } else {
                    $r['infant'] += 1;
                }
                $data['passengers'][] = $p;
            }
            $data['rooms'][] = $r;
        }
        $book = $data;
        //  return view('front.hotel.pdf.book', compact( 'book', 'customer', 'agency'));
        $pdf = PDF::loadView('front.hotel.pdf.book', compact('book', 'customer', 'agency'));
        return $pdf->download('bookHotel.pdf');

    }

    public function bookHotelApiPdf($id)
    {


        $cmd = TlCommandLine::all()->find($id);
        $book = ApiHotelBook::all()->find($cmd->book_id);

        if (empty($book) or Auth::guard('customer')->user()->id != $cmd->tl_customer_id)
            return abort(404);

        $customer = TlCustomer::all()->find($cmd->tl_customer_id);
        if (!$customer) {
            return abort(404);
        }
        $agency = TlAgency::all()->first();

        $data['command'] = 'CO' . Carbon::parse($book->created_at)->format('ym') . '-' . sprintf('%04u', $id);
        $data['date'] = Carbon::parse($book->created_at)->format('d/m/Y');
        $data['name'] = $book->HotelName;
        $data['etat'] = $book->status;
        $data['address'] = $book->hotelAddress;
        $data['category'] = $book->starRating;
        $data['checkIn'] = Carbon::parse($book->checkIn)->format('d/m/Y');
        $data['checkOut'] = Carbon::parse($book->checkOut)->format('d/m/Y');

        $data['price'] = $book->price;
        $data['rooms'] = [];
        $data['passengers'] = [];
        foreach ($book->rooms as $room) {
            $r['name'] = $room->roomCode;
            $r['firstName'] = $room->firstName;
            $r['lastName'] = $room->lastName;
            $r['board'] = $room->board;
            $data['rooms'][] = $r;
        }

        foreach ($book->tlPassengers as $passenger) {
            $passenger = $passenger->pivot;

            $p['civility'] = $passenger->civility;
            $p['firstName'] = $passenger->firstName;
            $p['lastName'] = $passenger->lastName;

            $p['dob'] = Carbon::parse($passenger->dob)->format('d/m/Y');
            $p['type'] = $passenger->type;

            $data['passengers'][] = $p;
        }
        $book = $data;
        //  return view('front.hotel.pdf.book', compact( 'book', 'customer', 'agency'));
        $pdf = PDF::loadView('front.hotelApi.pdf.book', compact('book', 'customer', 'agency'));
        return $pdf->download('bookHotel.pdf');

    }

    public function payment2($id)
    {
        $cmd = TlCommandLine::all()->find($id);
        $book = TlBookHotel::all()->find($cmd->book_id);

        if (empty($book) or Auth::guard('customer')->user()->id != $cmd->tl_customer_id)
            return abort(404);

        $customer = Auth::guard('customer')->user();
        $postParams = $this->payment($customer, $book->price, $book->id, $id);
        $bookProduct['oid'] = $postParams['oid'];
        $bookProduct['type'] = 'vol';
        $bookProduct['book'] = $id;
        if (Session::has('bookProduct'))
            Session::forget('bookProduct');
        Session::put('bookProduct', $bookProduct);
        return view('front.payment.payment')->with('postParams', $postParams);

    }

    public function paymentApi2($id)
    {
        $cmd = TlCommandLine::all()->find($id);
        $book = ApiHotelBook::all()->find($cmd->book_id);

        if (empty($book) or Auth::guard('customer')->user()->id != $cmd->tl_customer_id)
            return abort(404);

        $customer = Auth::guard('customer')->user();
        $postParams = HotelApiController::payment($customer, $book->price, $book->id, $id);
        $bookProduct['oid'] = $postParams['oid'];
        $bookProduct['type'] = 'Ho';
        $bookProduct['book'] = $id;
        if (Session::has('bookProduct'))
            Session::forget('bookProduct');
        Session::put('bookProduct', $bookProduct);
        return view('front.payment.payment')->with('postParams', $postParams);

    }

    public function Voucher(Request $request, $id)
    {
        $cmd = TlCommandLine::all()->find($id);
        $book = TlBookHotel::all()->find($cmd->book_id);
        $token = $request->get('token');

        if (empty($book) or $book->status != 1)
            return abort(404);

        $customer = TlCustomer::all()->find($cmd->tl_customer_id);
        if (!$customer) {
            return abort(404);
        }


        if (!empty($token) and $customer->email_token != $token) {
            return abort(404);
        } elseif (empty($token) and !Auth::guard('customer')->check()) {

            return abort(404);
        } elseif (empty($token) and Auth::guard('customer')->check()) {
            if (Auth::guard('customer')->user()->id != $cmd->tl_customer_id)
                return abort(404);
        }
        $agency = TlAgency::all()->first();

        $data['command'] = 'CO' . Carbon::parse($book->created_at)->format('ym') . '-' . sprintf('%04u', $id);
        $data['date'] = Carbon::parse($book->created_at)->format('d/m/Y');
        $data['name'] = $book->tlHotel()->first()->name;
        $data['etat'] = $book->status;
        $data['address'] = $book->tlHotel()->first()->address;
        $data['category'] = $book->tlHotel()->first()->category;
        $data['checkIn'] = Carbon::parse($book->checkIn)->format('d/m/Y');
        $data['checkOut'] = Carbon::parse($book->checkOut)->format('d/m/Y');
        $supplier = $book->tlHotel()->first()->tlSupplier()->first();
        $data['Supplier'] = [];
        if ($supplier) {
            $data['Supplier']['name'] = $supplier->name;
            $data['Supplier']['email'] = $supplier->email;
            $data['Supplier']['address'] = $supplier->address;
            $data['Supplier']['phone'] = $supplier->phone;
        }
        $data['price'] = $book->price;
        $data['rooms'] = [];
        $data['passengers'] = [];
        foreach ($book->tlBookRooms as $room) {
            $r['name'] = $room->tlRoomType()->first()->name;

            $r['price'] = $room->price;
            $r['pension'] = $room->pension;
            $r['id'] = $room->id;
            $r['adult'] = 0;
            $r['infant'] = 0;

            foreach ($room->tlPassengers as $passenger) {
                $passenger = $passenger->pivot;

                $p['civility'] = $passenger->civility;
                $p['firstName'] = $passenger->firstName;
                $p['lastName'] = $passenger->lastName;

                $p['dob'] = Carbon::parse($passenger->dob)->format('d/m/Y');
                $p['type'] = $passenger->type;
                if ($passenger->type == 'Adult') {
                    $r['adult'] += 1;
                } else {
                    $r['infant'] += 1;
                }
                $data['passengers'][] = $p;
            }
            $data['rooms'][] = $r;
        }
        $book = $data;
        //  return view('front.hotel.pdf.book', compact( 'book', 'customer', 'agency'));
        $pdf = PDF::loadView('front.hotel.pdf.voucher', compact('book', 'customer', 'agency'));
        return $pdf->download('Voucher.pdf');
    }

    public function VoucherApi(Request $request, $id)
    {
        $cmd = TlCommandLine::all()->find($id);
        $book = ApiHotelBook::all()->find($cmd->book_id);
        $token = $request->get('token');


        if (empty($book) or $book->status != 1)
            return abort(404);
        $customer = TlCustomer::all()->find($cmd->tl_customer_id);
        if (!$customer) {
            return abort(404);
        }


        if (!empty($token) and $customer->email_token != $token) {
            return abort(404);
        } elseif (empty($token) and !Auth::guard('customer')->check()) {

            return abort(404);
        } elseif (empty($token) and Auth::guard('customer')->check()) {
            if (Auth::guard('customer')->user()->id != $cmd->tl_customer_id)
                return abort(404);
        }
        $agency = TlAgency::all()->first();

        $data['command'] = 'CO' . Carbon::parse($book->created_at)->format('ym') . '-' . sprintf('%04u', $id);
        $data['date'] = Carbon::parse($book->created_at)->format('d/m/Y');
        $data['name'] = $book->hotelName;
        $data['etat'] = $book->status;
        $data['address'] = $book->hotelAddress;
        $data['category'] = $book->starRating;
        $data['checkIn'] = Carbon::parse($book->checkIn)->format('d/m/Y');
        $data['checkOut'] = Carbon::parse($book->checkOut)->format('d/m/Y');
        /* $supplier = $book->tlHotel()->first()->tlSupplier()->first();
         $data['Supplier'] = [];
         if ($supplier) {
             $data['Supplier']['name'] = $supplier->name;
             $data['Supplier']['email'] = $supplier->email;
             $data['Supplier']['address'] = $supplier->address;
             $data['Supplier']['phone'] = $supplier->phone;
         }*/
        $data['price'] = $book->price;
        $data['rooms'] = [];
        $data['passengers'] = [];
        // dd($book->rooms);
        foreach ($book->rooms as $key => $room) {
            $r['name'] = $room->roomDescription;


            $r['pension'] = $room->board;
            $r['adult'] = $room->adultCount;
            $r['infant'] = $room->childCount;

            $data['rooms'][] = $r;
        }
        foreach ($book->tlPassengers as $passenger) {
            $passenger = $passenger->pivot;

            $p['civility'] = $passenger->civility;
            $p['firstName'] = $passenger->firstName;
            $p['lastName'] = $passenger->lastName;

            $p['dob'] = Carbon::parse($passenger->dob)->format('d/m/Y');
            $p['type'] = $passenger->type;

            $data['passengers'][] = $p;
        }

        $book = $data;
        //  return view('front.hotel.pdf.book', compact( 'book', 'customer', 'agency'));
        $pdf = PDF::loadView('front.hotelApi.pdf.voucher', compact('book', 'customer', 'agency'));
        return $pdf->download('Voucher.pdf');
    }


    public function BillHotel(Request $request, $id)
    {
        $cmd = TlCommandLine::all()->find($id);
        $book = TlBookHotel::all()->find($cmd->book_id);
        $token = $request->get('token');

        if (empty($book) or $book->status != 1)
            return abort(404);

        $customer = TlCustomer::all()->find($cmd->tl_customer_id);
        if (!$customer) {
            return abort(404);
        }
        if (!empty($token) and $customer->email_token != $token) {
            return abort(404);
        } elseif (empty($token) and !Auth::guard('customer')->check()) {

            return abort(404);
        } elseif (empty($token) and Auth::guard('customer')->check()) {
            if (Auth::guard('customer')->user()->id != $cmd->tl_customer_id)
                return abort(404);
        }

        $rules = $book->tlRules()->sum('price');
        if ($rules == $book->price)
            $data['etat'] = "Payée";
        elseif ($rules > 0)
            $data['etat'] = "Commencée";
        else
            $data['etat'] = "impayée";

        $agency = TlAgency::all()->first();
        $bill = BillService::generateWebBill($id);
        $data['command'] = Carbon::parse($bill->created_at)->format('ym') . '-' . sprintf('%04u', $bill->id);
        $data['date'] = Carbon::parse($book->created_at)->format('d/m/Y');
        $data['name'] = $book->tlHotel()->first()->name;
        $data['address'] = $book->tlHotel()->first()->address;
        $data['category'] = $book->tlHotel()->first()->category;
        $data['checkIn'] = Carbon::parse($book->checkIn)->format('d/m/Y');
        $data['checkOut'] = Carbon::parse($book->checkOut)->format('d/m/Y');
        $supplier = $book->tlHotel()->first()->tlSupplier()->first();
        $data['Supplier'] = [];
        if ($supplier) {
            $data['Supplier']['name'] = $supplier->name;
            $data['Supplier']['email'] = $supplier->email;
            $data['Supplier']['address'] = $supplier->address;
            $data['Supplier']['phone'] = $supplier->phone;
        }
        $data['price'] = $book->price;
        $data['rooms'] = [];
        $data['passengers'] = [];
        foreach ($book->tlBookRooms as $room) {
            $r['name'] = $room->tlRoomType()->first()->name;

            $r['price'] = $room->price;
            $r['pension'] = $room->pension;
            $r['id'] = $room->id;
            $r['adult'] = 0;
            $r['infant'] = 0;

            foreach ($room->tlPassengers as $passenger) {
                $passenger = $passenger->pivot;

                $p['civility'] = $passenger->civility;
                $p['firstName'] = $passenger->firstName;
                $p['lastName'] = $passenger->lastName;

                $p['dob'] = Carbon::parse($passenger->dob)->format('d/m/Y');
                $p['type'] = $passenger->type;
                if ($passenger->type == 'Adult') {
                    $r['adult'] += 1;
                } else {
                    $r['infant'] += 1;
                }
                $data['passengers'][] = $p;
            }
            $data['rooms'][] = $r;
        }
        $book = $data;
        //  return view('front.hotel.pdf.book', compact( 'book', 'customer', 'agency'));
        $pdf = PDF::loadView('front.hotel.pdf.bill', compact('book', 'customer', 'agency'));
        return $pdf->download('Facture.pdf');
    }

    public function BillHotelApi(Request $request, $id)
    {
        $cmd = TlCommandLine::all()->find($id);
        $book = ApiHotelBook::all()->find($cmd->book_id);
        $token = $request->get('token');

        if (empty($book) or $cmd->status != 1)
            return abort(404);

        $customer = TlCustomer::all()->find($cmd->tl_customer_id);
        if (!$customer) {
            return abort(404);
        }
        if (!empty($token) and $customer->email_token != $token) {
            return abort(404);
        } elseif (empty($token) and !Auth::guard('customer')->check()) {

            return abort(404);
        } elseif (empty($token) and Auth::guard('customer')->check()) {
            if (Auth::guard('customer')->user()->id != $cmd->tl_customer_id)
                return abort(404);
        }

        $rules = $book->tlRules()->sum('price');
        if ($rules == $book->price)
            $data['etat'] = "Payée";
        elseif ($rules > 0)
            $data['etat'] = "Commencée";
        else
            $data['etat'] = "impayée";

        $agency = TlAgency::all()->first();
        $bill = BillService::generateWebBill($id);
        $data['command'] = Carbon::parse($bill->created_at)->format('ym') . '-' . sprintf('%04u', $bill->id);
        $data['date'] = Carbon::parse($book->created_at)->format('d/m/Y');
        $data['name'] = $book->hotelName;
        $data['address'] = $book->hotelAddress;
        $data['category'] = $book->starRating;
        $data['checkIn'] = Carbon::parse($book->checkIn)->format('d/m/Y');
        $data['checkOut'] = Carbon::parse($book->checkOut)->format('d/m/Y');
        /*$supplier = $book->tlHotel()->first()->tlSupplier()->first();
        $data['Supplier'] = [];
        if ($supplier) {
            $data['Supplier']['name'] = $supplier->name;
            $data['Supplier']['email'] = $supplier->email;
            $data['Supplier']['address'] = $supplier->address;
            $data['Supplier']['phone'] = $supplier->phone;
        }*/
        $data['price'] = $cmd->price;
        $data['rooms'] = [];
        $data['passengers'] = [];
        foreach ($book->rooms as $key => $room) {
            $r['name'] = $room->roomDescription;


            $r['pension'] = $room->board;
            $r['price'] = $room->price;
            $r['adult'] = $room->adultCount;
            $r['infant'] = $room->childCount;

            $data['rooms'][] = $r;
        }
        foreach ($book->tlPassengers as $passenger) {
            $passenger = $passenger->pivot;

            $p['civility'] = $passenger->civility;
            $p['firstName'] = $passenger->firstName;
            $p['lastName'] = $passenger->lastName;

            $p['dob'] = Carbon::parse($passenger->dob)->format('d/m/Y');
            $p['type'] = $passenger->type;

            $data['passengers'][] = $p;
        }

        $book = $data;
        //  return view('front.hotel.pdf.book', compact( 'book', 'customer', 'agency'));
        $pdf = PDF::loadView('front.hotelApi.pdf.bill', compact('book', 'customer', 'agency'));
        return $pdf->download('Facture.pdf');
    }
}
