<?php

namespace App\Http\Controllers;

use App\models\hotel\TlRoomType;
use Carbon\Carbon;
use App\models\TlCity;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\models\hotel\TlHotel;
use App\models\hotel\TlPension;
use App\models\page\TlSlider;
use App\Adapters\JumboAdapter;
use App\Services\HotelService;
use App\models\agency\TlAgency;
use App\models\book\TlPassenger;
use App\Services\HotelServiceII;
use App\Services\CurrencyService;
use App\Adapters\HotelBedsAdapter;
use App\models\book\TlCommandLine;
use App\models\hotel\TlPromoHotel;
use Illuminate\Support\Facades\DB;
use App\models\customer\TlCustomer;
use App\models\hotelAPI\JumboCities;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Services\HotelProviderRegistry;
use Illuminate\Support\Facades\Session;
use App\models\bookHotelApi\ApiHotelBook;
use App\models\bookHotelApi\BookingRoomApi;
use App\models\bookHotelApi\CancelPolicyInfoApi;

class HotelApiController extends Controller
{

    private $hotelProviderRegistry;

    public function __construct(HotelProviderRegistry $registry)
    {
        parent::__construct();
        $this->hotelProviderRegistry = $registry;
    }


    public function getCountries(Request $request)
    {

        $term = $request->get('term');
        $ville = DB::table('jumbo_cities')->where('ville', 'like', $term . "%")
            ->orWhere('pays', 'like', $term)
            ->select('ville', 'city_id as id', 'pays')->distinct('id')
            ->orderBy("ville")
            ->get();

        return response()->json(collect($ville)->take(7)->sortBy("ville")->unique('id'));

    }

    public function index()
    {

        $hotels = TlHotel::all()->where('isActive', 1);
        $cities = TlCity::all();
        $promos = TlPromoHotel::all()->where('status', 1)->where('type', 2)->sortBy('created_at');

        return view('front.hotelApi.index')
            ->with('hotels', $hotels)
            ->with('promos', $promos)
            ->with('cities', $cities);
    }

    public function search(Request $request)
    {

        // TODO validate input especially the children part

        $validator = Validator::make($request->all(), [
            'cityName' => 'required',
            'city' => 'required',
            'period' => 'required'
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator, 'search')
                ->withInput();
        }

        $period = $request->get('period');
        $checkInDate = explode(" - ", $period)[0];
        $checkOutDate = explode(" - ", $period)[1];

        $checkIn = Carbon::createFromFormat('d/m/Y H:i:s', $checkInDate . " 12:00:00");
        $checkOut = Carbon::createFromFormat('d/m/Y H:i:s', $checkOutDate . " 12:00:00");

        $cityCode = $request->input('city', 2938);

        //if cityCode not available
        $hotelCodes = null;

        $guestRooms = $request->input('room', [
            [
                'adults' => 2,
                'children' => 1,
                'childrenAges' => [10]
            ]
        ]);

        $guestNationality = $request->input('nationality', 'MA');
        // $currency = $request->input('currency', 'MAD');
        $currency = CurrencyService::getCurrentCurrency();
        // $languageCode = $request->input('language', 'en_US');
        $languageCode = "fr_FR";

        // TODO make this injectable and make it take null or a list or something in case of search
        $hotelService = new HotelServiceII(null);
        $data = $hotelService->getHotels($checkIn, $checkOut, $cityCode, $hotelCodes, $guestNationality, $guestRooms, $currency, $languageCode);

        $sorted = Collect($data['hotels'])->sortBy('hotelRates.minRate')->toArray();

        $sorted = $this->unique_multidim_array($sorted, 'hotelName');
        $data['hotels'] = array_values($sorted);
        $cityName = explode(" - ", $request->input('cityName'))[0];
        $arr = explode(",", $cityName, 2);
        $cityName = $arr[0];
        $city = DB::table("tl_cities")
            ->join("tl_city_translations", "tl_cities.id", "=", "tl_city_translations.tl_city_id")
            ->select("tl_cities.id")->distinct()
            ->where("tl_city_translations.name", "like", "%" . $cityName)->first();

        $searchParamters = [
            'cityCode' => $cityCode,
            'checkIn' => $checkIn,
            'checkOut' => $checkOut,
            'stayDuration' => $checkIn->diffindays($checkOut),
            'rooms' => $guestRooms,
            'nationality' => $guestNationality,
        ];

        $hotelLocal['list'] = [];
        if ($city)
            $hotelLocal = $this->hotelLocal(collect($city)["id"], $period, $guestRooms);

        Session::put('searchParameters', $searchParamters);

        $slides = TlSlider::all()->where('property', 'hotel')->where('status', 1);

        return view('front.hotelApi.hotels', [
            'slides' => $slides,
            'data' => $data,
            'checkin_date' => $checkIn,
            'checkout_date' => $checkOut,
            'city_code' => $cityCode,
            'hotelLocal' => $hotelLocal,
            'currency' => $currency,
            'searchParameters' => $searchParamters,
        ]);
    }

    public function properties(Request $request)
    {


        $hotelCode = $request->input('code');
        $providerCode = $request->input('p', 2);
        $nuiteeHotel = null;
        $sessionId = null;

        $searchParameters = null;
        if (Session::has('searchParameters')) {
            $searchParameters = Session::get('searchParameters');
            $checkIn = $searchParameters['checkIn'];
            $checkOut = $searchParameters['checkOut'];

        } else {
            return back();
        }


        switch ($request->input('p')) {
            case 2:
                $adapter = new JumboAdapter();
                break;
            case 3:
                $adapter = new HotelBedsAdapter();
                break;
            default:
                $adapter = $this->hotelProviderRegistry->get('nuitee');
        }
        $hotelService = new HotelServiceII($adapter);

        $hotel = $hotelService->getRooms($hotelCode, $checkIn, $checkOut, $searchParameters['rooms'], $sessionId);


        if ($providerCode == 2 || $providerCode == 3) {
            $nuiteeHotel = $hotelService->getHotel($hotelCode);
        }

        if ($providerCode == 3) {
            $hotel['address'] = $nuiteeHotel['address'];
            $hotel['city'] = $nuiteeHotel['city'];
            $hotel['country'] = $nuiteeHotel['country'];
        }

        $date = (new \DateTime());
        $timestamp = $date->format('Ymd-Hms-u');
        $result_session_id = hash('md5', "-{$timestamp}");

        $paths = [];
        foreach ($nuiteeHotel['images'] as $photo) {
            array_push($paths , $photo['url']);
        }

        $data = [
            'search_session_id' => $result_session_id,
            'hotel' => $hotel,
            'searchParameters' => $searchParameters,
            'savedHotel' => $nuiteeHotel,
            'photos' => $paths,
            'pathImg' => ''
        ];

        session()->put('hotel_search_' . $result_session_id, $data);

        return view('front.hotelApi.display-hotel', $data);
    }

    /*  public function confirmRooms(Request $request)
      {
          if ($request->isMethod("post")) {
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
                  $confirmedRoomsInput = $request->input('confirmedRooms');

                  $result = $hotelService->confirmJumboRooms($hotel_id, $checkIn, $checkOut, $rooms, $confirmedRoomsInput);

                  Session::put('bookingData', [
                      'hotel' => $result['hotel'],
                      'hotelId' => $hotel_id,
                      'occupancies' => $result['occupancies'],
                      'booking' => $result['booking'],
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
              $data = ['hotel' => $result['hotel'], 'booking' => $result['booking'], 'rooms' => $result['rooms'], 'occupancies' => $result['occupancies'], 'adult' => $adult, 'children' => $children,];
              Session::put('reservationHotel', $data);

          } else {
              $data = Session::get('reservationHotel');
          }


          return view('front.hotelApi.book', $data);
      }*/

    public function confirmRooms(Request $request)
    {

       
        if ($request->isMethod("post")) {
            $booking = null;
            $hotel = null;
            $totalPrice = 0;
            $occupancies = null;
            $checkIn = null;
            $checkOut = null;
            $hotelCode = null;
            $nationality = null;
            $sessionId = null;
            $providerCode = $request->input('p');
            $rateDetailCode = $request->input('rate', '');
            $rate_id = $request->input('rate_id');
            $result_id = $request->input('result_id');
            $hotelCode = $request->input('hotel', '');
            $confirmedRoomsInput = $request->input('confirmedRooms', []);
            $cancelTime = $request->input('cancelTime');
            $amount = $request->input('amount');
            $totalPrice = $request->input('totalPrice');
            $type = $request->input('type');
            switch ($providerCode) {
                case 2:
                    $adapter = new JumboAdapter();
                    break;
                case 3:
                    $adapter = new HotelBedsAdapter();
                    break;
                default:
                    $adapter = 'nuitee';
            }
            

            if ($result_id && session()->has('hotel_search_' . $result_id)) {
                $result_session = session()->get('hotel_search_' . $result_id);
            } else {
                return back();
            }

            if ($request->input('p') == 2) {
                if (Session::has('searchParameters')) {
                    $searchParameters = Session::get('searchParameters');
                    $checkIn = $searchParameters['checkIn'];
                    $checkOut = $searchParameters['checkOut'];
                    $rooms = $searchParameters['rooms'];
                    $nationality = $searchParameters['nationality'];
                    $i = 0;
                    foreach ($rooms as &$room) {
                        $room['roomCode'] = $confirmedRoomsInput[$i]['roomCode'];
                        ++$i;
                    }
                    unset($room);
                } else {
                    return back();
                }
            } else if ($request->input('p') == 3) {
                $confirmed_rooms = $result_session['hotel']['rates'][$rate_id];

                $confirmedRoomsInput = [];
                foreach ($confirmed_rooms['rooms'] as $room) {
                    $confirmedRoomsInput[] = [
                        "roomCode" => $room['roomCode'],
                        "description" => $room['description'],
                        "boardId" => $room['includedBoard']['boardId'],
                        "typeCode" => $room['typeCode'],
                        "price" => $room['price'],
                        "adults" => $room['adults'],
                        "children" => $room['children'],
                        "checkIn" => $result_session['hotel']['checkIn'],
                        "checkOut" => $result_session['hotel']['checkOut'],
                        "commentsId" => $room['commentsId'],
                    ];
                }

            } else {
                if (Session::has('sessionId')) {
                    $sessionId = Session::get('sessionId');
                } else {
                    return 'error no session ID';
                }

                $confirmedRoomsInput = $request->input('confirmedRooms');
            }


            $hotelService = new HotelServiceII($adapter);

            // *** REQUEST *****
            if ($request->input('p') == 2) {
                $result = $hotelService->confirmRooms($rooms, $checkIn, $checkOut, $hotelCode, null, $nationality, null);
            } else {
                $result = $hotelService->confirmRooms($confirmedRoomsInput, $checkIn, $checkOut, $hotelCode, $rateDetailCode, $nationality, $sessionId);
            }

            // ***** AFTER REQUEST ****

            if ($providerCode == 2) {
                $occupancies = $result['occupancies'];
                $hotel = $result['hotel'];
                $booking = $result['booking'];
            } else if ($providerCode == 3) {
                $result['hotel'] = $hotelService->getHotel($result_session['hotel']['code']);
                $totalPrice = $result['booking']['totalPrice'];
                $hotel = $result['hotel'];
                $booking = $result['booking'];

                $result['booking']['checkIn'] = $result_session['hotel']['checkIn'];
                $result['booking']['checkOut'] = $result_session['hotel']['checkOut'];
                $result['booking']['currency'] = $result_session['hotel']['currency'];
                $result['booking']['priceChanged'] = '';

                $result['booking']['confirmedBooking'] = true;
                $result['booking']['reservedBooking'] = '';
                $result['booking']['confirmedPropertyCode'] = '';

                $result['booking']['remarks'] = '';
                foreach ($result['rooms'] as $room) {
                    foreach ($room['comments'] as $comment) {
                        $result['booking']['remarks'] .= '<br />' . $comment;
                    }
                }

                $result['booking']['cancellationTerms'] = $result_session['hotel']['rates'][$rate_id]['cancelPolicies'];
            }

            Session::put('bookingData', [
                'hotel' => $hotel,
                'hotelId' => $hotelCode,
                'occupancies' => $occupancies,
                'booking' => $booking,
                'confirmedRooms' => $confirmedRoomsInput,
                'totalPrice' => $totalPrice,
            ]);

            foreach ($result['rooms'] as &$room) {
                \Log::debug($room);
                foreach ($result_session['searchParameters']['rooms'] as &$search_room) {
                    \Log::debug($search_room);
                    if ($search_room &&
                        intval($room['adults']) === intval($search_room['adults']) &&
                        intval($room['children']) === intval($search_room['children'])) {
                        if (isset($search_room['childrenAges'])) {
                            $room['childrenAges'] = $search_room['childrenAges'];
                        }
                        $search_room = NULL;
                        break;
                    }
                }
                unset($search_room);
            }
            unset($room);

            $adult = 1;
            $children = 0;
            $data = ['hotel' => $result['hotel'], 'booking' => $result['booking'], 'rooms' => $result['rooms'], 'adult' => $adult, 'children' => $children, 'rate' => array('amount' => $amount, 'cancelTime' => $cancelTime, 'totalPrice' => $totalPrice, 'type' => $type)];

            Session::put('reservationHotel', $data);
        } else {
            $data = Session::get('reservationHotel');
           
        }          

        return view('front.hotelApi.book', $data);
    }


    public function booking(Request $request)
    {
        if (!Auth::guard("customer")->check())
            $customer = $this->createdCustomer($request);
        else
            $customer = Auth::guard("customer")->user();

        $result = Session::get('reservationHotel');
        if (!$result)
            return abort(404);
        $markup = 1;
        $booking = new ApiHotelBook();
        $booking->hotelCode = $result['hotel']['code'];
        $booking->hotelName = $result['hotel']['name'];
        $booking->hotelAddress = $result['hotel']['address'];
        $booking->starRating = $result['hotel']['starRating'];
        $booking->provider = $result['hotel']['provider'];
        $booking->tl_customer_id = $customer->id;
        $booking->status = 0;
        $booking->tl_payment_id = 3;

        $booking->checkIn = $result['booking']['checkIn']; // TODO need to be converted
        $booking->checkOut = $result['booking']['checkOut'];
        $booking->price = $result['booking']['totalPrice'];

        $booking->save();

        $cpis = [];
        foreach ($result['booking']['cancellationTerms'] as $cpi) {
            $tmp_cpi = new CancelPolicyInfoApi();
            $tmp_cpi->amount = $cpi['amount'];
            $tmp_cpi->cancelTime = $cpi['cancelTime'];
            $tmp_cpi->type = $cpi['type'];
            $tmp_cpi->cancellationPolicy = '';
            $cpis[] = $tmp_cpi;
        }

        $rooms = $request->input('room');
        foreach ($rooms as $i=> $room) {
            $adults=$room['Adult'];
            $Child=isset($room['Child'])?$room['Child']:[];

            $r = new BookingRoomApi();
            $r->titulation = $adults[0]['civility'];
            $r->firstName = $adults[0]['firstName'];
            $r->lastName = $adults[0]['lastName'];
            // TODO make sure using the $i key here is reliable add a key to match
            $r->adultCount = $result["rooms"][$i]['adults'];
            $r->childCount = $result["rooms"][$i]['children'] ?? 0;
            $r->board =  $result["rooms"][$i]['boardId'];
            $r->roomDescription =  $result["rooms"][$i]['description'];
            $r->typeCode = $result["rooms"][$i]["typeCode"];
            $r->roomCode = $result["rooms"][$i]["roomCode"];
            $booking->rooms()->save($r);

            foreach ($adults as $key => $adult) {
                //dd($room);
                $confBook = new TlPassenger();
                if (isset($adult["dob"]))
                    $confBook->dob = Carbon::createFromFormat('Y-m-d', $adult["dob"])->format('Y-m-d');
                $confBook->passport = array_key_exists("passport", $adult) ?? $adult["passport"];
                $confBook->civility = $adult["civility"];
                $confBook->lastName = $adult["lastName"];
                $confBook->firstName = $adult["firstName"];
                $confBook->type = "Adult";
                $confBook->save();
                $confBook->attachApiHotelBook($booking->id, [
                    "room" => $r->id,
                ]);
            }
            foreach ($Child as $key => $item) {
                $confBook = new TlPassenger();
                if (isset($item["dob"]))
                    $confBook->dob = Carbon::createFromFormat('Y-m-d', $item["dob"])->format('Y-m-d');
                $confBook->passport = array_key_exists("passport", $item) ?? $item["passport"];
                $confBook->civility = $item["civility"];
                $confBook->lastName = $item["lastName"];
                $confBook->firstName = $item["firstName"];
                $confBook->type = "Child";
                $confBook->save();
                $confBook->attachApiHotelBook($booking->id, [
                    "room" => $r->id,
                ]);
            }
        }

        $booking->cancelPoliciesInfos()->saveMany($cpis);
        $cmd = new TlCommandLine();
        $cmd->book_id = $booking->id;
        $cmd->bookName = "HotelApi";
        $cmd->type = "Hotel";
        $cmd->price = $result['booking']['totalPrice'];
        $cmd->priceBuy=$result['booking']['totalPriceProvider'];
        $cmd->marge_config=$result['booking']['totalPrice']-$result['booking']['totalPriceProvider'];
        $cmd->status = 0;
        $cmd->tl_payment_id = 3;
        $cmd->tl_customer_id = $customer->id;
        $cmd->save();

        $postParams = $this->payment($customer, $result['booking']['totalPrice'], $booking->id, $cmd->id);
        $bookProduct['oid'] = $postParams['oid'];
        $bookProduct['type'] = 'hotelApi';
        $bookProduct['book'] = 1;
        if (Session::has('bookProduct'))
            Session::forget('bookProduct');
        Session::put('bookProduct', $bookProduct);

        $agency = TlAgency::all()->first();
        Mail::send("front.customer.email.notificationBookHotelAPIClient",
            ["bookID" => $cmd->id,
                "commandLine" => $cmd,
                "customer" => $customer,
                "book" => $booking,
                "agence" => $agency], function ($msg) use ($customer,$agency) {
                $msg->from($agency->booking_email, $agency->domain_name);
                $msg->subject("validation de réservation");
                $msg->to($customer->email);
            });
        Mail::send("front.customer.email.notificationBookHotelAPIAgent",
            ["bookID" => $cmd->id,
                "commandLine" => $cmd,
                "customer" => $customer,
                "book" => $booking,
                "agence" => $agency], function ($msg) use ($customer,$agency) {
                $msg->from($agency->booking_email, $agency->domain_name);
                $msg->subject("Nouvelle réservation");
                $msg->to($agency->booking_email);
            });

        return view('front.payment.payment')->with('postParams', $postParams);

    }

    public static function payment($customer, $price, $product, $cmd)
    {
        $agency = TlAgency::first();

        $postParams['product'] = $product;
        $postParams['amount'] = $price;
        $postParams['TranType'] = "PreAuth";
        $postParams['callbackUrl'] = "https://".$agency->domain_name."/hotel-payment";
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
            //$email = new EmailVerification($customer);
            // Auth::guard('customer')->login($customer, true);
            /*
                        Mail::send("front.customer.email.validationNewCustomer",
                            ['email_token' => $customer->email_token, 'lastName' => $customer->lastName, 'firstName' => $customer->firstName,], function ($msg) use ($customer) {
                                $msg->from('no-reponde@levoyageur.ma', 'levoyageur.ma');
                                $msg->subject("validation de l'inscription");
                                $msg->to($customer->email);
                            });*/

            // return view('front.customer.confirmEmail')->with('customer',$customer);
            return $customer;
        }
    }

    private function unique_multidim_array($array, $key)
    {
        $temp_array = array();
        $i = 0;
        $key_array = array();

        foreach ($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
    }

    private function hotelLocal($city, $period, $rooms)
    {
        $roomsSearch = $rooms;

        $chickIn = Carbon::createFromFormat('d/m/Y', explode(" - ", $period)[0]);
        $chickOut = Carbon::createFromFormat('d/m/Y', explode(" - ", $period)[1]);

        $hotels = TlHotel::all()->where('isActive', 1)->where('tl_city_id', $city);
        $minPrice = 99999999;
        $maxPrice = 0;
        $hotelList = [];
        $hotelList['list'] = [];
        $hotelService = new HotelService();
        foreach ($hotels as $hotel) {
            $children = $roomsSearch[0]['children'];
            $adults = $roomsSearch[0]['adults'];
            $rooms = $hotelService->passengersOfRoom($roomsSearch, $hotel);
            $c = 0;
            if($hotel->tax_inclus == 1){
                $tax['adults'] = $hotel->tax ? $hotel->tax : 0;
                $tax['child'] = $hotel->tax_enfant ? $hotel->tax_enfant : 0;
            }else{
                $tax['adults'] = 0;
                $tax['child'] = 0;
            }
            $sup = $hotel->tlSupplements()->where('startDate', '<=', $chickIn->format("Y-m-d"))->where('endDate', '>=', $chickOut->format("Y-m-d"))->where("isObligatory", 1)->get();
            $board = TlPension::where('tl_hotel_id',$hotel->id)->first();
            $boardCategoryCode = $board ? $board->code : 'RO';
            foreach ($rooms as $r) {

                $priceSup = $hotelService->priceSupplement($sup, $r, $hotel);
                $minPrice = 99999999;

                if($r["Child"] != 0 && $r["adults"] != 0){
                    $capacity =  $r["adults"] + $r["Child"];
                    $roomTypes = $hotel->tlRoomTypes()->where('capacity', '>=', $capacity)
                                    ->where('minOccupation','<=',$capacity)
                                    ->where('minAdult','<=',$r["adults"])
                                    ->where('maxAdult','>=',$r["adults"])
                                    ->where('minEnfant','<=',$r["Child"])
                                    ->where('maxEnfant','>=',$r["Child"])
                                    ->get();
                }elseif($r["Child"] == 0 && $r["adults"] != 0){
                    if($children == 0){
                        $roomTypes = $hotel->tlRoomTypes()->where('capacity', '>=', $r["adults"])
                                        ->where('minOccupation','<=',$r["adults"])
                                        ->where('minAdult','<=',$adults)
                                        ->where('maxAdult','>=',$adults)
                                        ->get();
                    }else{
                        $roomTypes = $hotel->tlRoomTypes()->where('capacity', '>=', $r["adults"])
                                        ->where('minOccupation','<=',$r["adults"])
                                        ->where('minAdult','<=',$adults)
                                        ->where('maxAdult','>=',$adults)
                                        ->where('minEnfant','<=',$children)
                                        ->where('maxEnfant','>=',$children)
                                        ->get();
                    }
                }

                if($r["adults"] > 2 && $r["Child"] !== 0){

                    $roomTypes = collect($roomTypes)->where('child_condition', '!=', 1);
                }

                foreach ($roomTypes as $room) {

                    $prices = TlRoomType::with(["tlRates"])->find($room->id)->tlRates()->where('date', '>=', $chickIn->format("Y-m-d"))->where('date', '<', $chickOut->format("Y-m-d"))->where('stopSale', '!=', 1);


                    if ($prices->count() == $chickOut->diffInDays($chickIn)) {

                        $prices = $prices->get();
                        if(!empty($prices)){
                            $stayMin = $prices[0]['minStayNbre'];
                        }else{
                            $stayMin = 0;
                        }

                        $min = $hotelService->priceRoom($hotel, $room, $prices, $tax, $priceSup, $r, $chickIn, $chickOut, $minPrice);
                        if (isset($min["price"])) {
                            $data["cancelCondition"] = $min["condition"];
                            $min = $min["price"];
                            $data["price"] = ceil($min);
                            $data["promo"] = false;
                            $data["priceDiscount"] = 0;
                            //Early booking réservation hôtel contrat
                            $promo = $room->tlPromos()->where('startDate', '<=', $chickIn->format("Y-m-d"))
                                                      ->where('endDate', '>=', $chickOut->format("Y-m-d"))
                                                      ->first();
                            if($promo){
                                if($promo->deadline){
                                    if($promo->deadline >= Carbon::today()->format('Y-m-d')){
                                        if ($promo->minStay <= $chickIn->diffInDays($chickOut)) {
                                            if ($promo->typePromo == 1) {
                                                $discount =(ceil($min)* $promo->discount) / 100;
                                                $data["priceDiscount"] =ceil($min) - $discount ;
                                            }else{
                                                $data["priceDiscount"] = ceil($min) - $promo->discount;
                                            }
                                            $data["promo"] = true;
                                            $data["typePromo"] = $promo->typePromo;
                                            $data["discount"] = $promo->discount;
                                        }
                                    }else{
                                        $data["promo"] = false;
                                        $data["typePromo"] = '';
                                        $data["discount"] = '';
                                        $data["priceDiscount"] = '';
                                    }
                                }else{
                                    if ($promo->minStay <= $chickIn->diffInDays($chickOut)) {
                                        if ($promo->typePromo == 1) {
                                            $discount =(ceil($min)* $promo->discount) / 100;
                                            $data["priceDiscount"] =ceil($min) - $discount ;
                                        }else{
                                            $data["priceDiscount"] = ceil($min) - $promo->discount;
                                        }
                                        $data["promo"] = true;
                                        $data["typePromo"] = $promo->typePromo;
                                        $data["discount"] = $promo->discount;
                                    }
                                }
                            }else{
                                $data["promo"] = false;
                                $data["typePromo"] = '';
                                $data["discount"] = '';
                                $data["priceDiscount"] = '';
                            }


                            if ($minPrice > $min) {
                                $minPrice = $min;
                            }
                            if ($maxPrice < $min) {
                                $maxPrice = $min;
                            }
                        }
                        $c++;
                    }
                }
            }

            if ($c >= sizeof($rooms)) {
                $data["id"] = $hotel->id;
                $data["address"] = $hotel->address;
                $data["rooms"] = $rooms;
                $data["roomsSearch"] = $roomsSearch;
                $data["passengers"] = $hotelService->allPassengersRooms($rooms, $hotel);
                $data["img"] = $hotel->tlPictures()->first() ? $hotel->tlPictures()->first()->img : "";
                $data["chickIn"] = $chickIn->format('d/m/Y');
                $data["chickOut"] = $chickOut->format('d/m/Y');
                $data["nights"] = $chickIn->diffInDays($chickOut);
                $data["category"] = $hotel->category;
                $data["name"] = $hotel->name;
                $data["shortdesc"] = $hotel->shortdesc;
                $data['boardCategoryCode'] = $boardCategoryCode;
                $data["establishement"] = $hotel->establishement;
                if (array_key_exists('price', $data) == false) {
                    $data['conditionStay'] = false;
                    $data["cancelCondition"] = "";
                    $data['stayMin'] = $stayMin;
                }else{
                    $data['conditionStay'] = true;
                    $data['stayMin'] = 0;
                }
                $hotelList['list'][] = $data;
            }
        }


        $hotelList['min'] = $minPrice;

        $hotelList['max'] = $maxPrice;
        if (Session::has("hotel_morocco"))
            Session::forget("hotel_morocco");
        Session::put("hotel_morocco", $hotelList['list']);

        return $hotelList;
    }

}
