<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\models\TlCity;
use App\models\Payment;
use App\models\TlCountry;
use App\models\page\TlPage;
use Illuminate\Support\Str;
use App\models\hotel\TlRate;
use App\models\TlNewsLetter;
use Illuminate\Http\Request;
use App\models\hotel\TlHotel;
use App\Services\BookService;
use App\Adapters\JumboAdapter;
use App\models\flight\Airport;
use App\models\package\TlStay;
use App\Services\HotelService;
use App\models\agency\TlAgency;
use App\models\agency\TlBranch;
use App\models\agency\TlDevise;
use App\models\marketing\TlSeo;
use App\models\flight\TlCarrier;
use App\models\hotel\TlRoomType;
use App\Services\HotelServiceII;

use App\models\package\TlPackage;
use App\Adapters\HotelBedsAdapter;
use App\models\book\TlCommandLine;
use App\models\hotel\TlPromoHotel;
use App\models\package\TlCategory;
use App\models\package\TlThematic;
use App\models\customer\TlCustomer;
use Illuminate\Support\Facades\Log;
use App\models\flight\TlFlightPromo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\models\package\TlPackageType;
use App\models\marketing\TlSeoAnalytic;
use App\Services\HotelProviderRegistry;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    private $hotelProivderRegistry;

    /**
     * Create a new controller instance.
     *
     * @param HotelProviderRegistry $registry
     */
    public function __construct(HotelProviderRegistry $registry)
    {
        parent::__construct();
        $this->hotelProivderRegistry = $registry;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->getLocal();
        $hotels = TlHotel::all();
        $packages = TlPackage::all()->where('atHome', 1)->where('isActive', 1)->where('deleted_at', null);
        $packagesFiltre = TlPackage::all()->where('isActive', 1)->sortBy("orderList");
        $devis = TlDevise::all();
        $periods = array();
        $carriers = TlCarrier::all();
        $typeIds=[];
        foreach ($packages as $package) {
            foreach ($package->tlTravels as $travel) {
                $date = Carbon::parse($travel->DepartureDate);


                if (Carbon::now() < $date) {
                    if (!in_array($date->format('M-Y'), $periods)) {
                        array_push($periods, $date->format('M-Y'));
                    }
                }
            }
            if (!in_array($package->tl_package_type_id, $typeIds))
                $typeIds[] = $package->tl_package_type_id;

        }

        $destinations = [];
        foreach ($packages as $package) {
            foreach ($package->tlDestinations as $destination) {

                $l["id"] = $destination->tl_country_id;
                $l["country"] = $destination->tlCountry()->first()->name;
                $l["type"] = $package->tl_package_type_id;
                if (!in_array($l, $destinations))
                    $destinations[] = $l;
            }
        }

        // dd('$destinations', $destinations);


        // dd($destinations);
        $flights = TlFlightPromo::all()->sortBy('id')->take(12);
        $cityId = $hotels->pluck('tl_city_id')->toArray();
        $cities = TlCity::all()->whereIn('id', $cityId);
        $packages = $packages->sortBy("orderList");
        //dump($packages);
        $promos = TlPromoHotel::all()->where('status', 1)->where('type', 1)->sortBy('created_at');
        $PromoHotels = TlPromoHotel::all()->where('status', 1)->sortBy('created_at');
        //dump($PromoHotels);
        $types = TlPackageType::all()->whereIn('id',$typeIds);
        //dd($types);
        $duree = [];
        foreach ($packages as $package) {
            foreach ($package->tlTravels as $travel) {
                $date = Carbon::parse($travel->DepartureDate);
                if (Carbon::now() < $date) {
                    if (!in_array($date->format('M-Y'), $periods)) {
                        array_push($periods, $date->format('M-Y'));
                    }
                    $dateDepart = Carbon::parse($travel->first()->DepartureDate);
                    $dateReturn = Carbon::parse($travel->first()->arrivedDate);
                    $d = $dateDepart->diffInDays($dateReturn) + 1;
                    if (!in_array($d, $duree))
                        $duree[] = $d;
                }

            }
            if (!in_array($package->tl_package_type_id, $typeIds))
                $typeIds[] = $package->tl_package_type_id;
        }
        $thematics = array();
        foreach ($packagesFiltre as $package) {
            // $package->tlThematics();
            foreach ($package->tlThematics as $tlThematic) {
                if (!array_key_exists($tlThematic->id, $thematics)) {
                    array_push($thematics, $tlThematic->id);
                }
            }
        }
        $thematics = TlThematic::all()->whereIn('id', $thematics);

        return view('front.home')
            ->with('hotels', $hotels)
            ->with('periods', $periods)
            ->with('types', $types)
            ->with('promos', $promos)
            ->with('PromoHotels', $PromoHotels)
            ->with('carriers', $carriers)
            ->with('cities', $cities)
            ->with('destinations', $destinations)
            ->with('duree', $duree)
            ->with('thematics', $thematics)
            ->with('devis', $devis)
            ->with('flights', $flights)
            ->with('packages', $packages);
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function page(Request $request)
    {
        $p = $request->get('p');
        $page = TlPage::all()->where("alias", $p)->first();
        if (!$page)
            return abort(404);
        return view("front.page")->with('page', $page);
    }

    public function getAirport(Request $request)
    {


        // $term = $request->get("term")["term"];
        $term = $request->get("term");

        $companion = Airport::where('CityName', 'like', $term . '%')->orWhere('CountryCode', $term)
            ->orWhere('AirportName', 'like', $term . '%')
            ->orWhere('AirportCode', 'like', $term . '%')
            ->select('CityName', 'AirportCode', 'AirportName')->distinct('AirportCode')->take(6)->get();
        return response()->json($companion);
    }

    public function getAirports()
    {
        $companion = Airport::select('CityName', 'AirportCode', 'AirportName')->get();
        return response()->json($companion);
    }

    public function getcity(Request $request)
    {
        $this->getLocal();
        $cities = TlCity::all()->where('tl_country_id', $request->get('id'));
        $citiesArray = array();
        foreach ($cities as $city) {
            array_push($citiesArray, ["id" => $city->id, "name" => $city->name]);
        }
        return response()->json($citiesArray);
    }

    public function getroom(Request $request)
    {
        $this->getLocal();
        $hotel = TlHotel::all()->find($request->get('id'));
        if (!$hotel) {
            return abort(404);
        }
        $roomsArray = array();
        foreach ($hotel->tlRoomTypes as $room) {
            array_push($roomsArray, ["id" => $room->id, "name" => $room->name]);
        }
        return response()->json(array(
            'roomsArray' => $roomsArray,
            'hotel' => $hotel));
    }

    public function getTypeSale(Request $request)
    {
        $this->getLocal();
        $type = TlRoomType::all()->find($request->get('id'));

        if (!$type) {
            return abort(404);
        }
        $sejour = TlStay::all()->find($request->get('idstay'));
        if (!$sejour) {
            return abort(404);
        }
        $rates = TlRate::where('tl_room_type_id', $request->get('id'))
            ->whereBetween('date', array($sejour->checkIn, $sejour->checkOut))
            ->get();
        // var_dump($sejour->tlLodgings()->first());die;
        $allotement = 0;
        if ($sejour->tlLodgings()->first()) {

            $allotement = $sejour->tlLodgings()->first()->allotement;
        }
        //
        $sommePrice = 0;
        $sommeSingle = 0;
        $sommeDouble = 0;
        $sommeTriple = 0;
        $sommeQuadruple = 0;
        foreach ($rates as $key => $rate) {
            if ($key == sizeof($rates)) {
                break;
            }
            if ($rate->price == null) {
                return response()->json(array('sommePrice' => null));
            } else {
                if ($type->typeBay == 1 || $type->typeBay == 2) {
                    $sommePrice += $rate->price;
                } else {
                    $sommeSingle += $rate->single;
                    $sommeDouble += $rate->double;
                    $sommeTriple += $rate->triple;
                    $sommeQuadruple += $rate->quadruple;
                }
            }

        }

        return response()->json(array('allotement' => $allotement, 'type' => $type, 'sommePrice' => $sommePrice, 'sommeSingle' => $sommeSingle, 'sommeDouble' => $sommeDouble, 'sommeTriple' => $sommeTriple, 'sommeQuadruple' => $sommeQuadruple));
    }

    public static function showPrice($prix)
    {
        if (session()->get('Change')) {
            $selected = session()->get('Change')->value;
            $code = session()->get('Change')->code;
            $calcul = $prix / $selected;
            return $calcul . $code;
        }

    }

    public function addNewsLetter(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required|unique:tl_news_letters'
        ]);
        $newsLetter = new TlNewsLetter();
        $newsLetter->email = $request->input('email');
        $newsLetter->save();
        return redirect()->back()->with('success', 'votre email a été bien envoyé!');
    }

    public function contactEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'email|required'
        ]);
        $email = $request->input("email");
        Mail::send("front.customer.email.contactEmail",
            ['lastName' => $request->input("lastName"), 'firstName' => $request->input("firstName"), 'text' => $request->input("message"), 'demand' => $request->input("demande"), 'email' => $request->input("email")], function ($msg) use ($email) {
                $msg->from($email);
                $msg->subject("Contact");
                $msg->to('contact@lfen.ma');
            });
        return redirect()->back()->with('success', 'votre email a été bien envoyé!');
    }

    public function branches()
    {
        $branches = TlBranch::all();
        return view("front.local")->with("branches", $branches);
    }

    public function payment(Request $request)
    {

        $storeKey = "Ovoyage_a2022";
        $p = new Payment();
        $p->code = $request->input('TransId');
        $p->nbOperation = $request->input('oid');
        $p->err = $request->input('ErrMsg');
        $p->save();

        $postParams = $request->all();

        natcasesort($postParams);
        $hach = "";
        $hashval = "";
        foreach ($postParams as $param) {
            $paramValue = html_entity_decode(preg_replace("/\n$/", "", $request->input($param)), ENT_QUOTES, 'UTF-8');

            $hach = $hach . "(!" . $param . "!:!" . $request->input($param) . "!)";
            $escapedParamValue = str_replace("|", "\\|", str_replace("\\", "\\\\", $paramValue));

            $lowerParam = strtolower($param);
            if ($lowerParam != "hash" && $lowerParam != "encoding") {
                $hashval = $hashval . $escapedParamValue . "|";
            }
        }


        $escapedStoreKey = str_replace("|", "\\|", str_replace("\\", "\\\\", $storeKey));
        $hashval = $hashval . $escapedStoreKey;

        $calculatedHashValue = hash('sha512', $hashval);
        $actualHash = base64_encode(pack('H*', $calculatedHashValue));

        $retrievedHash = $request->input("HASH");
        if ($retrievedHash == $actualHash && $request->input("ProcReturnCode") == "00") {
            $bookType = Session::get("bookProduct")["type"];
            $bookId = Session::get("bookProduct")["book"];

            switch ($bookType) {
                case 'package':
                    BookService::package($bookId, $request->input('amount'), $request->input('TransId'), $request->input('cardHolderName'), $request->input('EXTRA_CARDBRAND'));
                    break;
                case 'vol':
                    BookService::Vol($bookId, $request->input('amount'), $request->input('TransId'), $request->input('cardHolderName'), $request->input('EXTRA_CARDBRAND'));
                    break;
                case 'hotelApi':
                    BookService::Vol($bookId, $request->input('amount'), $request->input('TransId'), $request->input('cardHolderName'), $request->input('EXTRA_CARDBRAND'));
                    break;
            }
            echo "ACTION=POSTAUTH";
        } else {


            echo "APPROVED";
        }
    }

    public function cancelBook()
    {
        Session::forget('travel');
        Session::forget('reservationFlight');
        Session::forget('reservationHotel');
        Session::forget('RoomBookHotel');
        return redirect()->route('home');
    }

    public function okPayment(Request $request)
    {
        $cmd = $request->input("shopurl");
        Auth::guard('customer')->logout();
        $command = TlCommandLine::all()->find($cmd);

        $user = TlCustomer::all()->find($command->tl_customer_id);
        Auth::guard('customer')->login($user);

        if ($command->bookName == "TlFormulaBook")
            return redirect()->route('front.package.bookDetail', ['id' => $cmd]);
        elseif ($command->bookName == "FlightAPI")
            return redirect()->route('front.flight.bookDetail', ['id' => $cmd]);
        elseif ($command->bookName == "TlBookHotel")
            return redirect()->route('front.hotel.bookDetail', ['id' => $cmd]);
        elseif ($command->bookName == "HotelApi")
            return redirect()->route('front.hotelWord.bookDetail', ['id' => $cmd]);
        else
            return abort(404);
    }

    public function failUrl(Request $request)
    {
        $this->getLocal();
        $cmd = $request->input("shopurl");
        Auth::guard('customer')->logout();
        $command = TlCommandLine::find($cmd);

        $user = TlCustomer::all()->find($command->tl_customer_id);
        Auth::guard('customer')->login($user);
        Storage::disk('local')->put("xml/payment/fail.txt", $cmd);

        if ($command->bookName == "TlFormulaBook")
            return redirect()->route('front.package.bookDetail', ['id' => $cmd,'error'=>'payment']);
        elseif ($command->bookName == "FlightAPI")
            return redirect()->route('front.flight.bookDetail', ['id' => $cmd,'error'=>'payment']);
        elseif ($command->bookName == "TlBookHotel")
            return redirect()->route('front.hotel.bookDetail', ['id' => $cmd,'error'=>'payment']);
        elseif ($command->bookName == "HotelApi")
            return redirect()->route('front.hotelWord.bookDetail', ['id' => $cmd,'error'=>'payment']);
        else
            return abort(404);
    }

    public function hotelInfo(Request $request)
    {
        $hotelCode = $request->get('hotelCode');
        $provider = $request->get('p');
        // dd($provider);
        switch ($provider) {
            case 2:
                $adapter = new JumboAdapter();
                break;
            case 3:
                $adapter = new HotelBedsAdapter();
                break;
        }
        $hotelService = new HotelServiceII($adapter);
        $hotel = $hotelService->getHotel($hotelCode);

        // TODO normalize the output so that there is only one line
        $hotelInfo = [];
        if ($provider == 3) {
            $hotelInfo['description'] = Str::words(strip_tags($hotel['description']), 30, '...');
            $hotelInfo['address'] = $hotel['address'];
            $hotelInfo['pictureUrl'] = $hotel['pictureUrl'];
        } else {
            $hotelInfo['description'] = Str::words(strip_tags($hotel['hotelDescription']), 30, '...');
            $hotelInfo['address'] = $hotel['address'];
            $hotelInfo['pictureUrl'] = $hotel['pictureUrl'];
        }
        return response()->json($hotelInfo);
    }

    public function moncompte()
    {
        return view('front.moncompte');
    }
    public function newcompte()
    {
        return view('front.newcompte');
    }

    public function resetPwd()
    {
        return view('front.resetPwd');
    }
    public function agences()
    {
        $branchs = TlBranch::get();
        return view('front.agences', compact('branchs'));
    }
    
    public function propos()
    {
        return view('front.pages.propos');
    }
}
