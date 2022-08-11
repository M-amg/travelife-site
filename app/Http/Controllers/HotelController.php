<?php

namespace App\Http\Controllers;

use App\models\agency\TlAgency;
use App\models\book\bookHotel\TlBookHotel;
use App\models\book\bookHotel\TlBookHotelSupplement;
use App\models\book\bookHotel\TlBookRoom;
use App\models\book\TlCommandLine;
use App\models\book\TlPassenger;
use App\models\customer\TlCustomer;
use App\models\hotel\TlHotel;
use App\models\hotel\TlHotelOption;
use App\models\hotel\TlPromoHotel;
use App\models\hotel\TlRate;
use App\models\hotel\TlRoomType;
use App\models\hotel\TlSupplement;
use App\models\hotel\TlTypePension;
use App\models\page\TlSlider;
use App\models\TlCity;
use App\models\TlPayment;
use App\Services\HotelService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class HotelController extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    public function hotels(Request $request)
    {
        $city = $request->get('city');
        $period = $request->get('period');

        $rooms = $request->get('room');
        $roomsSearch = $request->get('room');

        $adults = $request->get('adult');

        //children childrenAges[]
        $chickIn = Carbon::createFromFormat('d/m/Y', explode(" - ", $period)[0]);
        $chickOut = Carbon::createFromFormat('d/m/Y', explode(" - ", $period)[1]);

        $hotels = TlHotel::all()->where('isActive', 1)->where('tl_city_id', $city);
        $hotelList = $this->hotelsList($hotels, $rooms, $roomsSearch, $chickIn, $chickOut);
        if (Session::has("hotel_morocco"))
            Session::forget("hotel_morocco");
        Session::put("hotel_morocco", $hotelList['list']);
        $cities = TlCity::all();
        $services = TlHotelOption::all();
        return view('front.hotel.hotels')->with('hotels', $hotelList)->with('cities', $cities)->with('services', $services);
    }

    public function hotel($name, Request $request)
    {
        $hotel = TlHotel::all()->where('id', $request->get('id'));
        $chickIn = Carbon::createFromFormat('d/m/Y', $request->get('chickIn'));
        $chickOut = Carbon::createFromFormat('d/m/Y', $request->get('chickOut'));
        $hotelBook = $this->hotelsList($hotel, $request->get('room'), $request->get('room'), $chickIn, $chickOut);
        $price = ceil($hotelBook["max"]);


        if ($hotelBook['list']) {
            $hotelBook = $hotelBook['list'][0];
            $chickIn = Carbon::createFromFormat('d/m/Y', $hotelBook["chickIn"])->format("Y-m-d");
            $chickOut = Carbon::createFromFormat('d/m/Y', $hotelBook["chickOut"])->format("Y-m-d");
        } else {
            $hotelBook = $hotelBook['list'];
        }

        $hotel = TlHotel::all()->find($request->get('id'));
        $sup = $hotel->tlSupplements()->where('startDate', '<=', $chickIn)->where('endDate', '>=', $chickOut)->get();
        $cities = TlCity::all();

        $photos =  $hotel->tlPictures->pluck('img');
        $pathImg = config('services.pathImg');

        return view('front.hotel.display-hotel', [
            "supplements" => $sup,
            "price" => $price,
            "hotel" => $hotel,
            "hotelBook" => $hotelBook,
            'cities' => $cities,
            'photos' => $photos,
            'pathImg' => $pathImg
        ]);

    }

    private function hotelsList($hotels, $rooms, $roomsSearch, $chickIn, $chickOut)
    {

        $minPrice = 99999999;
        $maxPrice = 0;
        $hotelList = [];
        $hotelList['list'] = [];

        $hotelService = new HotelService();
        foreach ($hotels as $hotel) {
            $children = $roomsSearch[0]['children'];
            $adults = $roomsSearch[0]['adults'];
            $rooms = $hotelService->passengersOfRoom($rooms, $hotel);
            $c = 0;

            if($hotel->tax_inclus == 1){
                $tax['adults'] = $hotel->tax ? $hotel->tax : 0;
                $tax['child'] = $hotel->tax_enfant ? $hotel->tax_enfant : 0;
            }else{
                $tax['adults'] = 0;
                $tax['child'] = 0;
            }
            //2020-12-01  2020-12-28
            $sup = $hotel->tlSupplements()->where('startDate', '<=', $chickIn->format("Y-m-d"))->where('endDate', '>=', $chickOut->format("Y-m-d"))->where("isObligatory", 1)->get();

            foreach ($rooms as $r) {

                $priceSup = $hotelService->priceSupplement($sup, $r, $hotel);
                $min = 999999999;

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

                if( $r["adults"] > 2 && $r["Child"] !== 0){

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
                $data["img"] = null;
                foreach ($hotel->tlPictures()->get() as $k => $picture) {
                    $data["img"][$k] = $picture->img;
                }

                $data["chickIn"] = $chickIn->format('d/m/Y');
                $data["chickOut"] = $chickOut->format('d/m/Y');
                $data["nights"] = $chickIn->diffInDays($chickOut);
                $data["category"] = $hotel->category;
                $data["name"] = $hotel->name;
                $data["shortdesc"] = $hotel->shortdesc;
                if (array_key_exists('price', $data) == false) {
                    $data['conditionStay'] = false;
                    $data['promo'] = false;
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
        return $hotelList;
    }

    public function index()
    {
        $hotels = TlHotel::all()->where('isActive', 1);
        $promos = TlPromoHotel::all()->where('status', 1)->where('type', 1)->sortBy('created_at');
        $cities = TlCity::all()->where("tl_country_id", 1);
        $slides = TlSlider::all()->where('property', 'hotel')->where('status', 1);
        return view('front.hotel.index')
            ->with('hotels', $hotels)
            ->with('slides', $slides)
            ->with('promos', $promos)
            ->with('cities', $cities);
    }

    public function getCities(Request $request)
    {
        //$cities=TlCity::all()->where("name","like","%".$request->get("term")."%");
        $cities = DB::table("tl_cities")->join('tl_city_translations', 'tl_cities.id', '=', 'tl_city_translations.tl_city_id')
            ->where("tl_city_translations.name", "like", "%" . $request->get("term") . "%")->distinct('tl_city_id')->take(6)->get(['tl_city_id', 'name']);
        return response()->json($cities);
    }

    public function getRoom(Request $request)
    {

        $hotel = TlHotel::find($request->get('hotel'));
        $roomsBooks = $request->get('room');
        $period = $request->get('period');
        $period = explode(" - ", $period);
        $chickIn = Carbon::createFromFormat('d/m/Y', $period[0]);
        $chickOut = Carbon::createFromFormat('d/m/Y', $period[1]);
        if($hotel->tax_inclus == 1){
            $tax['adults'] = $hotel->tax ? $hotel->tax : 0;
            $tax['child'] = $hotel->tax_enfant ? $hotel->tax_enfant : 0;
        }else{
            $tax['adults'] = 0;
            $tax['child'] = 0;
        }
        $rooms = [];
        $board = collect(TlTypePension::all());
        $id = 1;
        $sup = $hotel->tlSupplements()->where('startDate', '<=', $chickIn->format("Y-m-d"))->where('endDate', '>=', $chickOut->format("Y-m-d"))->where("isObligatory", 1)->get();
        $codePension = "RO";
        $orderPension = ["RO" => 0, "BB" => 1, "HB" => 2, "FB" => 3, "AI" => 4];

        $hotelService = new HotelService();
        $children = $roomsBooks[0]['children'];
        $adults = $roomsBooks[0]['adults'];
        $roomsBooks = $hotelService->passengersOfRoom($roomsBooks, $hotel);
        foreach ($roomsBooks as $key => $roomsBook) {
            $priceSup = $hotelService->priceSupplement($sup, $roomsBook, $hotel);
            if($roomsBook["Child"] != 0 && $roomsBook["adults"] != 0){
                $capacity =  $roomsBook["adults"] + $roomsBook["Child"];
                $roomTypes = $hotel->tlRoomTypes()->where('capacity', '>=', $capacity)
                                ->where('minOccupation','<=',$capacity)
                                ->where('minAdult','<=',$roomsBook["adults"])
                                ->where('maxAdult','>=',$roomsBook["adults"])
                                ->where('minEnfant','<=',$roomsBook["Child"])
                                ->where('maxEnfant','>=',$roomsBook["Child"])
                                ->get();
            }elseif($roomsBook["Child"] == 0 && $roomsBook["adults"] != 0){
                if($children == 0){
                    $roomTypes = $hotel->tlRoomTypes()->where('capacity', '>=', $roomsBook["adults"])
                                    ->where('minOccupation','<=',$roomsBook["adults"])
                                    ->where('minAdult','<=',$adults)
                                    ->where('maxAdult','>=',$adults)
                                    ->get();
                }else{
                    $roomTypes = $hotel->tlRoomTypes()->where('capacity', '>=', $roomsBook["adults"])
                                    ->where('minOccupation','<=',$roomsBook["adults"])
                                    ->where('minAdult','<=',$adults)
                                    ->where('maxAdult','>=',$adults)
                                    ->where('minEnfant','<=',$children)
                                    ->where('maxEnfant','>=',$children)
                                    ->get();
                }
            }

            if($roomsBook["adults"] > 2 && $roomsBook["Child"] !== 0){

                $roomTypes = collect($roomTypes)->where('child_condition', '!=', 1);

            }

            foreach ($roomTypes as $room) {
                $rates = TlRate::all()->where('stopSale', 0)->where('tl_room_type_id', $room->id)
                    ->where('date', '>=', $chickIn->format("Y-m-d"))->where('date', '<', $chickOut->format("Y-m-d"));

                $data = [];
                if ($chickIn->diffInDays($chickOut) <= $rates->count()) {
                    $br = $board->where("code", "like", $codePension)->first()->name;
                    $brcode = $codePension;

                    $data["key"] = $key;
                    $data["id"] = $id;
                    $data["room"] = $room->id;
                    $data["nights"] = $chickIn->diffInDays($chickOut);
                    $data["img"] = $room->picture;
                    $data["tax"] = $hotel->tax;
                    $data["board"] = $br;
                    $data["boardCode"] = $brcode;
                    $data["name"] = $room->name;
                    $data["chickIn"] = $chickIn;
                    $data["chickOut"] = $chickOut;
                    $data["hotel"] = $hotel->id;
                    $data["tax_inclus"] = $hotel->tax_inclus;
                    $data["services"] = [];
                    $data["cancels"] = [];
                    foreach ($room->tlRoomServices as $service) {
                        $l = [];
                        $l["name"] = $service->name;
                        $l["icon"] = $service->icone;
                        $data["services"][] = $l;
                    }
                    //dd($room->tlCancelConditions()->first());
                    foreach ($room->tlCancelConditions->sortBy("conditionDay") as $condition) {

                        $l = [];
                        if ($condition->percentageTaxe == 0) {
                            $l["condition"] = "annulation gratuite ";
                        }else{
                            $l["condition"] = $condition->translate(session()->get('local'))->description;
                        }
                        $data["cancels"][] = $l;
                    }

                    $data["bed"] = [];
                    foreach ($room->tlBedRooms as $bedRoom) {
                        $l = [];
                        $l['nb'] = $bedRoom->number;
                        $l['name'] = ($bedRoom->tlBed()->first()) ? $bedRoom->tlBed()->first()->name : '';
                        $l['capacity'] = ($bedRoom->tlBed()->first()) ? $bedRoom->tlBed()->first()->capacity : '';
                        $data["bed"][] = $l;
                    }
                    $data["typeRoom"] = $room->typeStay;
                    $data["typeBay"] = $room->typeBay;
                    $data["capacity"] = $room->capacity;
                    $data["passengers"] = $roomsBook;
                    $data["pensions"] = [];
                    if ($brcode == "RO") {
                        $l["code"] = $brcode;
                        $l["name"] = $br;
                        $l["price"] = 0;
                        $data["pensions"][] = $l;
                    }
                    $price = array();
                    foreach ($hotel->tlPensions as $pension) {
                        $price["$pension->code"] = 0;
                    }
                    $pensions = TlTypePension::all();
                    foreach ($hotel->tlPensions as $key => $pension) {
                        foreach($rates as $rate){
                            foreach($pensions as $ps){
                                if($rate->tl_saison_id == $pension->tl_season_id){
                                    if($pension->code == $ps->code){
                                        if ($pension->type_marge == 1) {
                                            $marge = ((int)$pension->buy_price_adult * $pension->marge) / 100;
                                            $price["$pension->code"] += ((int)$pension->buy_price_adult + $marge) * $roomsBook["adults"];
                                            $price["$pension->code"] += ((int)$pension->buy_price_baby + $marge) * $roomsBook["Baby"];
                                            $price["$pension->code"] += ((int)$pension->buy_price_child + $marge) * $roomsBook["Child"];
                                            $price["$pension->code"] += ((int)$pension->buy_price_minor + $marge) * $roomsBook["Minor"];
                                        } else {
                                            $marge = $pension->marge;
                                            $price["$pension->code"] += ((int)$pension->buy_price_adult + $marge) * $roomsBook["adults"];
                                            $price["$pension->code"] += ((int)$pension->buy_price_baby + $marge) * $roomsBook["Baby"];
                                            $price["$pension->code"] += ((int)$pension->buy_price_child + $marge) * $roomsBook["Child"];
                                            $price["$pension->code"] += ((int)$pension->buy_price_minor + $marge) * $roomsBook["Minor"];
                                        }
                                        $l["code"] = $pension->code;
                                        $l["name"] = $pension->name;
                                        $l['price'] = $price["$pension->code"];

                                    }
                                }
                            }
                        }
                        if ($orderPension[$brcode] < $orderPension[$pension->code]){
                                $data["pensions"][] = $l;
                                $indice = $l['code'];
                                $count["$indice"] = 0;
                                foreach($data["pensions"] as $i => $psn){
                                     if( in_array($l["code"], $psn,true)){

                                         if($l['price'] > $psn['price']){
                                            unset($data["pensions"][$i]);
                                         }else{
                                             $count["$indice"] += 1;
                                             if($count["$indice"] == 2)
                                                 unset($data["pensions"][$i]);

                                         }
                                    }
                                }
                        }


                    }

                    foreach($data["pensions"] as $pensionInclus){
                        if($pensionInclus["price"] == 0 && $pensionInclus["code"] != "RO"){
                            foreach($data["pensions"] as $k => $pensionSearch){
                                if( in_array("RO", $pensionSearch,true)){
                                    unset($data["pensions"][$k]);
                                }
                            }
                        }
                        if($pensionInclus["price"] == 0 && $pensionInclus["code"] == "HB"){
                            foreach($data["pensions"] as $k => $pensionSearch){
                                if( in_array("BB", $pensionSearch,true)){
                                    unset($data["pensions"][$k]);
                                }
                            }
                        }
                        if($pensionInclus["price"] == 0 && $pensionInclus["code"] == "FB"){
                            foreach($data["pensions"] as $k => $pensionSearch){
                                if( in_array("HB", $pensionSearch,true)){
                                    unset($data["pensions"][$k]);
                                }
                                if( in_array("BB", $pensionSearch,true)){
                                    unset($data["pensions"][$k]);
                                }
                            }
                        }
                        if($pensionInclus["price"] == 0 && $pensionInclus["code"] == "AI"){
                            foreach($data["pensions"] as $k => $pensionSearch){
                                if( in_array("HB", $pensionSearch,true)){
                                    unset($data["pensions"][$k]);
                                }
                                if( in_array("BB", $pensionSearch,true)){
                                    unset($data["pensions"][$k]);
                                }
                                if( in_array("FB", $pensionSearch,true)){
                                    unset($data["pensions"][$k]);
                                }
                            }
                        }
                    }
                    $price = $hotelService->priceRoom($hotel, $room, $rates, $tax, $priceSup, $roomsBook, $chickIn, $chickOut, 9999999999);
                    if ($price != 9999999999) {
                        if (array_key_exists('price', $price) == false) {
                            foreach($rates as $rate) {
                                $first_rate = $rate->minStayNbre;
                                break; // exits the foreach loop
                            }
                            $chickIn = Carbon::createFromFormat('d/m/Y', $period[0]);
                            $chickOut = Carbon::createFromFormat('d/m/Y', $period[1]);
                            $diffInDays = $chickIn->diffInDays($chickOut);
                            $rates = TlRate::all()->where('stopSale', 0)->where('tl_room_type_id', $room->id)
                            ->where('date', '>=', $chickIn->format("Y-m-d"))->where('date', '<', $chickOut->addDays($first_rate)->subDays($diffInDays)->subDays(1));
                            $chickOut = Carbon::createFromFormat('d/m/Y', $period[1]);
                            $price = $hotelService->priceRoom($hotel, $room, $rates, $tax, $priceSup, $roomsBook, $chickIn, $chickOut->addDays($first_rate)->subDays($diffInDays), 9999999999);
                            $data["price"] = ceil($price["price"]-($priceSup * $roomsBook["adults"]));
                            $data["commission"] = ceil($price["commission"]);
                            $data["discount"] = $price["discount"];
                            $data["type"] = $price["type"];
                            $data['conditionStay'] = false;
                            $data['stayMin'] = $first_rate;
                            $data["nights"] = $chickIn->diffInDays($chickOut);
                            $data["chickIn"] = Carbon::createFromFormat('Y-m-d H:i:s', $chickIn)->format('d/m/Y');
                            $data["chickOut"] = Carbon::createFromFormat('Y-m-d H:i:s', $chickOut)->format('d/m/Y');
                        }else{
                            $data["price"] = ceil($price["price"]-($priceSup * $roomsBook["adults"]));
                            $data["commission"] = ceil($price["commission"]);
                            $data["discount"] = $price["discount"];
                            $data["type"] = $price["type"];
                            $data["minStay"] = $price["minStay"];
                            $data['conditionStay'] = true;
                            $data['stayMin'] = 0;
                        }
                        $id++;
                        $rooms[] = $data;
                    }


                }
            }


        }


        $rooms = collect($rooms)->groupBy("room");

        if (Session::has('RoomBookHotel'))
            Session::forget('RoomBookHotel');

        Session::put('RoomBookHotel', $rooms);

        return response()->json($rooms);
    }

    public function booking(Request $request)
    {
        $rooms = Session::get("RoomBookHotel");
        $data = [];
        if (!$rooms)
            return abort(404);
        if ($request->isMethod("Post")) {
            $roomBooks = $request->input('room');
            $supplementBooks = $request->input('supplement');
            $pensions = $request->input('pension');
            $totalPrice = $request->input('total');
            Session::put('hotelRoom', $roomBooks);
            Session::put('supplementBooks', $supplementBooks);
            Session::put('pensions', $pensions);
            Session::put('price', $totalPrice);
        } else {
            $roomBooks = Session::get('hotelRoom');
            $supplementBooks = Session::get('supplementBooks');
            $pensions = Session::get('pensions');
            $totalPrice = Session::get('price');
        }

        $hotel = TlHotel::all()->find(collect($rooms)->first()[0]['hotel']);
        $checkIn = collect($rooms)->first()[0]["chickIn"];
        $chickOut = collect($rooms)->first()[0]["chickOut"];

        $hotelService = new HotelService();

        $r = [];
        foreach ($roomBooks as $roomsBook) {
            foreach ($rooms as $rm) {
                if (collect($rm)->where('id', $roomsBook)->first()) {
                    $r[] = collect($rm)->where('id', $roomsBook)->first();
                }
            }
        }
        $rooms = collect($r);

        $adult = 0;
        $infant["Baby"] = 0;
        $infant["Minor"] = 0;
        $infant["Child"] = 0;
        $priceWithoutDisc = 0;
        foreach ($rooms as $key => $rm) {

            foreach ($roomBooks as $room) {
                if ($room == $rm["id"]) {
                    $pension = $hotel->tlPensions()->where("code", $pensions[$room])->first();

                    if ($pension) {
                        $pricePension = $hotelService->pensionPrice($pension);
                        $rm["board"] = $pension->name;
                        $rm["boardCode"] = $pension->code;
                        $rm["price"] += $pricePension["adults"] * $rm["passengers"]["adults"];
                        $adult += $rm["passengers"]["adults"];
                        foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
                            $rm["price"] += $pricePension[$ageEnfant->TypeEnfant] * $rm["passengers"][$ageEnfant->TypeEnfant];
                            $infant[$ageEnfant->TypeEnfant] += $rm["passengers"][$ageEnfant->TypeEnfant];
                        }
                        if($rm["discount"] != 0){
                            if ( $rm["type"] == "%") {
                                $discount =($rm["price"] * $rm["discount"]) / 100;
                                $rm["priceDiscount"] =$rm["price"] - $discount ;
                            }else{
                                $rm["priceDiscount"] = $rm["price"] - $rm["discount"];
                            }
                            $priceWithoutDisc += $rm["price"];
                        }else{
                            $rm["priceDiscount"] = '';
                        }

                        $rooms->put($key, $rm);
                    }
                }
            }
        }


        $data["address"] = $hotel->address . " - " . $hotel->tlCity()->first()->name . " - " . $hotel->tlCountry()->first()->name;
        $data["category"] = $request->get('category');
        $data["img"] = $hotel->tlPictures()->first() ? $hotel->tlPictures()->first()->img : '';
        $data["hotel"] = $request->get('nameHotel');
        $data["hotelId"] = $hotel->id;
        $data["policiesAgeInfants"] = $hotel->tlPoliciesAgeEnfants;
        $data["price"] = $totalPrice;
        $data["priceWithoutDisc"] = $priceWithoutDisc;
        $data["checkIn"] = Carbon::createFromFormat('d/m/Y H:i:s', $checkIn . " 12:00:00");
        $data["checkOut"] = Carbon::createFromFormat('d/m/Y H:i:s', $chickOut . " 12:00:00");
        $data["rooms"] = $rooms;
        $data["supplements"] = [];
        $payments = TlPayment::all();
        $price = 0;
        $supplementBooksId = [];
        if ($supplementBooks) {
            foreach ($supplementBooks as $key => $supplementBook) {
                $priceSup = 0;
                $supplement = $hotel->tlSupplements()->where('id', $key)->first();
                if ($supplement->isObligatory == 0) {
                    $supplementBooksId[] = $key;
                    $s["name"] = $supplement->title;
                    $priceInfant["Baby"] = $supplement->price_baby;
                    $priceInfant["Minor"] = $supplement->price_minor;
                    $priceInfant["Child"] = $supplement->price_child;
                    $commission = $supplement->marge;
                    if ($supplement->type_supplement == "pax") {

                        if ($supplement->price_adult) {
                            if ($supplement->type_marge == 1) {
                                $commission = ($supplement->price_adult * $supplement->marge) / 100;
                            }
                            $priceSup += ($supplement->price_adult + $commission) * $supplementBook["adults"];
                        }

                        foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
                            if (isset($supplementBook[$ageEnfant->TypeEnfant])) {
                                $commission = $supplement->marge;
                                if ($priceInfant[$ageEnfant->TypeEnfant]) {
                                    if ($supplement->type_marge == 1) {
                                        $commission = ($priceInfant[$ageEnfant->TypeEnfant] * $supplement->marge) / 100;
                                    }
                                    $priceSup += ($priceInfant[$ageEnfant->TypeEnfant] + $commission) * $supplementBook[$ageEnfant->TypeEnfant];
                                }
                            }
                        }
                    } else {
                        if ($supplement->type_marge == 1) {
                            $commission = ($supplement->price_prestation * $supplement->marge) / 100;
                        }
                        $priceSup += $supplement->price_prestation + $commission;
                    }

                    $s["passengers"] = $supplementBook;
                    $s["price"] = $priceSup;
                    $s["isObligatory"] = $supplement->isObligatory;
                    $s["id"] = $supplement->id;
                    $data["supplements"][] = $s;
                }

            }
            Session::put('supplementBooks', $supplementBooksId);

        }

        // $supp = $hotel->tlSupplements()->where('startDate', '<=', $checkIn)->where('endDate', '>=', $chickOut);
        $supp = TlSupplement::all()->where("tl_hotel_id", $hotel->id)->where('startDate', '<=', $checkIn)->where('endDate', '>=', $chickOut);

        foreach ($supp as $supplement) {


            $priceSup = 0;
            if ($supplement->isObligatory == 1) {
                $s["name"] = $supplement->title;
                $priceInfant["Baby"] = $supplement->price_baby;
                $priceInfant["Minor"] = $supplement->price_minor;
                $priceInfant["Child"] = $supplement->price_child;
                $commission = $supplement->marge;
                if ($supplement->type_supplement == "pax") {

                    if ($supplement->price_adult) {
                        if ($supplement->type_marge == 1) {
                            $commission = ($supplement->price_adult * $supplement->marge) / 100;
                        }

                        $priceSup += ($supplement->price_adult + $commission) * $adult;
                    }
                    foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
                        $commission = $supplement->marge;
                        if ($priceInfant[$ageEnfant->TypeEnfant]) {
                            if ($supplement->type_marge == 1) {
                                $commission = ($priceInfant[$ageEnfant->TypeEnfant] * $supplement->marge) / 100;
                            }
                            $priceSup += ($priceInfant[$ageEnfant->TypeEnfant] + $commission) * $infant[$ageEnfant->TypeEnfant];
                        }
                    }
                } else {
                    if ($supplement->type_marge == 1) {
                        $commission = ($supplement->price_prestation * $supplement->marge) / 100;
                    }
                    $priceSup += $supplement->price_prestation + $commission;
                }
                $infant["adults"] = $adult;
                $s["passengers"] = $infant;
                $s["price"] = $priceSup;
                $s["isObligatory"] = $supplement->isObligatory;
                $s["id"] = $supplement->id;
                $data["supplements"][] = $s;
            }
        }

        Session::put('hotelRoomBooking', $rooms);
        return view('front.hotel.booking')->with('book', $data)->with('payments', $payments)->with('roomBooks', $roomBooks);
    }

    public function confirmBooking(Request $request)
    {
        $this->validate($request, [
            // array('civility' => 'required'),
            'civility.*' => 'required',
            // array('lastName' => 'required'),
            'lastname.*' => 'required',
            // array('firstName' => 'required|email'),
            'firstname.*' => 'required',
        ], [
            'civility.*.required' => 'Le champ Civilité est obligatoire',
            'lastname.*.required' => 'Le champ Nom est obligatoire',
            'firstname.*.required' => 'Le champ Prénom est obligatoire',
        ]);


        if (!Auth::guard("customer")->check())
            $customer = $this->createdCustomer($request);
        else
            $customer = Auth::guard("customer")->user();

        $roomBooks = Session::get('hotelRoomBooking');
        $supplementBooks = Session::get('supplementBooks');
        $rooms = $request->input('room');
        $payment = $request->input('payment');
        $book = new TlBookHotel();
        $book->tl_hotel_id = collect($roomBooks)->first()["hotel"];
        $book->tl_payment_id = $payment;
        $book->checkIn = collect($roomBooks)->first()["chickIn"];
        $book->checkOut = collect($roomBooks)->first()["chickOut"];
        $book->tl_customer_id = $customer->id;
        $book->status = 0;
        $book->price = 0;
        $book->save();

        $price = 0;
        $commissionPrice = 0;
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
// dd($passengers);
        foreach ($rooms as $key => $room) {
            $roomBook = $roomBooks[$key];
            $bookRoom = new TlBookRoom();
            $bookRoom->tl_room_type_id = $roomBook["room"];
            $bookRoom->tl_book_hotel_id = $book->id;
            $bookRoom->pension = $roomBook["board"];
            //$price=getHotelPrice($book->hotel_id,$bookRoom->tl_room_type_id,$book->checkIn,$book->checkOut,$room[$key]);
            $bookRoom->price = $roomBook['price'];
            $bookRoom->save();
            $passengersAll = [];
            foreach ($room as $passager) {
                foreach ($passager as $p) {

                    if (isset($p['lastName'])) {
                        $passenger = TlPassenger::where('firstName', $p['firstName'])->where('lastName', $p['lastName'])->where('tl_customer_id', $customer->id)->first();

                        if (empty($passenger)) {
                            $passenger = new TlPassenger();
                        }

                        $passenger->firstName = $p['firstName'];
                        $passenger->lastName = $p['lastName'];
                        $passenger->civility = $p['civility'];
                        $passenger->type = $p['type'];
                        $passenger->room = $key;
                        if (empty($p['dob']))
                            $passenger->dob = Carbon::now()->subYear(30)->format('Y-m-d');
                        else
                            $passenger->dob = Carbon::createFromFormat('Y-d-m', $p['dob'])->format('Y-m-d');
                        //   $passenger->passport = $p['passport'];
                        $passenger->tl_customer_id = $customer->id;
                        $passenger->save();
                        $passenger->attachBookHotel($book->id);
                        $passengersAll[] = $passenger;
                        $passenger->attachBookRoom($bookRoom->id);
                    }
                }
            }
            if ($roomBook["discount"] != 0) {
                $price += $roomBook["priceDiscount"];
            }else{
                $price += $roomBook['price'];
            }

            //$commissionPrice += $roomBook['commission'];
        }
        $supplements = TlSupplement::all()
            ->where("tl_hotel_id", $hotel->id)
            ->where('startDate', '<=', collect($roomBooks)->first()["chickIn"]->format("Y-m-d"))
            ->where('endDate', '>=', collect($roomBooks)->first()["chickOut"]->format("Y-m-d"));

        if (!$supplementBooks)
            $supplementBooks = [];
        foreach ($supplements as $supplement) {
            $priceSup = 0;
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

                        $priceSup += ($supplement->price_adult + $commission) * $passengers['adults'];
                    }
                    foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
                        $commission = $supplement->marge;
                        if ($priceInfant[$ageEnfant->TypeEnfant]) {
                            if ($supplement->type_marge == 1) {
                                $commission = ($priceInfant[$ageEnfant->TypeEnfant] * $supplement->marge) / 100;
                            }
                            $priceSup += ($priceInfant[$ageEnfant->TypeEnfant] + $commission) * $passengers[$ageEnfant->TypeEnfant];

                        }
                    }
                } else {
                    if ($supplement->type_marge == 1) {
                        $commission = ($supplement->price_prestation * $supplement->marge) / 100;
                    }
                    $priceSup += $supplement->price_prestation + $commission;

                }


                $bookSupplement = new TlBookHotelSupplement();
                $bookSupplement->adult = $passengers['adults'];
                $bookSupplement->Baby = $passengers['Baby'];
                $bookSupplement->Minor = $passengers['Minor'];
                $bookSupplement->Child = $passengers['Child'];
                $bookSupplement->price = $priceSup;
                $bookSupplement->fees = $commission;
                $bookSupplement->tl_supplement_id = $supplement->id;
                $bookSupplement->tl_book_hotel_id = $book->id;
                $bookSupplement->save();
                $price += $bookSupplement->price;
                //$commissionPrice+=$commission;

            }
        }

        $book->price = $price;
        $book->fees = 0;
        $book->save();
        $commandLine = new TlCommandLine();
        $commandLine->book_id = $book->id;
        $commandLine->bookName = "TlBookHotel";
        $commandLine->type = "Hotel";
        $commandLine->status = 0;
        // $commandLine->tl_agent_id = Auth::guard('agent')->user()->id;
        $commandLine->price = $price;
        $commandLine->priceBuy = $price - $commissionPrice;
        $commandLine->tl_payment_id = $payment;
        $commandLine->tl_customer_id = $customer->id;
        $commandLine->save();

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

        Session::forget("supplementBooks");
        Session::forget("RoomBookHotel");
        return redirect()->route('front.hotel.bookDetail', ['id' => $commandLine->id]);
    }

    private function createdCustomer($request)
    {
        if ($request->isMethod('Post')) {
            $this->validate($request, [
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
            ]);

            // TODO VIRIFAT IS EXECET CUSTEMER
            $customer = TlCustomer::all()->where("email", $request->input('email'))->first();

            if (!$customer) {
                $customer = new  TlCustomer();
                $customer->firstName = $request->input('firstName');
                $customer->lastName = $request->input('lastName');
                $customer->email = $request->input('email');
                $customer->email_token = base64_encode($request->input('email'));
                $customer->password = Str::random(8); /*Hash::make($request->input('password')); */
                $customer->status = 1;
                $customer->etat = 3;
                $customer->save();
            }


            Auth::guard('customer')->login($customer, true);

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
        $postParams['storetype'] = "3D_PAY_HOSTING";
        $postParams['hashAlgorithm'] = "ver3";
        $postParams['lang'] = "fr";
        $postParams['refreshtime'] = "5";
        $postParams['BillToName'] = $customer->firstName . " " . $customer->lastName;
        $postParams['BillToStreet1'] = $customer->address;
        $postParams['BillToCountry'] = "504";
        $postParams['email'] = $customer->email;
        $postParams['tel'] = $customer->tel;
        $postParams['encoding'] = "UTF-8";
        $postParams['oid'] = (new \DateTime())->format('Y-m-d_H-i-s');
        return $postParams;
    }


}
