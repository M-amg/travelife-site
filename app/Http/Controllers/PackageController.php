<?php

namespace App\Http\Controllers;

use App\models\package\TlAllotmentPackage;
use App\models\package\TlCategory;
use App\models\package\TlDestination;
use App\models\package\TlFormula;
use App\models\package\TlPackage;
use App\models\package\TlPackageHotelInfo;
use App\models\package\TlPackageRoom;
use App\models\package\TlPackageType;
use App\models\package\TlThematic;
use App\models\package\TlTravel;
use App\models\page\TlSlider;
use App\models\TlCity;
use App\models\TlCountry;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PackageController extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }
    public function index(Request $request)
    {

        $packages = TlPackage::all()->where('isActive', 1)->sortBy("orderList")->where('deleted_at', null);
        $cities = TlCity::all();
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

        $periods = array();
        $typeIds = [];

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
        $types = TlPackageType::all()->whereIn("id", $typeIds);
        $thematics = array();
        foreach ($packages as $package) {
            // $package->tlThematics();
            foreach ($package->tlThematics as $tlThematic) {
                if (!array_key_exists($tlThematic->id, $thematics)) {
                    array_push($thematics, $tlThematic->id);
                }
            }
        }
        $thematics = TlThematic::all()->whereIn('id', $thematics);

        $slide = TlSlider::all()->where('property', 'package')->where('status', 1)->first();
        return view('front.package.index')
            ->with('packages', $packages)
            ->with('cities', $cities)
            ->with('types', $types)
            ->with('periods', $periods)
            ->with('duree', $duree)
            ->with('thematics', $thematics)
            ->with('slide', $slide)
            ->with('destinations', $destinations);
    }

    public function packages(Request $request)
    {
        $category = $request->get('category');
        $type = $request->get('type');
        $period = $request->get('period');
        $country = $request->get('destination');
        $pension = $request->get('pension');
        $minDays = $request->get('minDays');
        $maxDays = $request->get('maxDays');
        $thematic = $request->get('thematic');
        $minimum_price = $request->get('minimum_price');
        $maximum_price = $request->get('maximum_price');
        $sortBy = $request->get('sortBy');

        $packages = TlPackage::all()->where('isActive', 1)->where('deleted_at', null);
        $cities = TlCity::all();
        $types = TlPackageType::all();
        $categories = TlCategory::all();
        $duree = [];
        foreach ($packages as $package) {
            foreach ($package->tlTravels as $travel) {
                $date = Carbon::parse($travel->DepartureDate);
                if (Carbon::now() < $date) {

                    $dateDepart = Carbon::parse($travel->first()->DepartureDate);
                    $dateReturn = Carbon::parse($travel->first()->arrivedDate);
                    $d = $dateDepart->diffInDays($dateReturn) + 1;
                    if (!in_array($d, $duree))
                        $duree[] = $d;
                }

            }

        }


        // $destinations = array();
        // foreach ($packages as $package) {
        //     foreach ($package->tlDestinations as $destination) {
        //         if (!array_key_exists($destination->tl_country_id, $destinations)) {
        //             array_push($destinations, $destination->tl_country_id);
        //         }
        //     }
        // }

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

        $periods = array();

        foreach ($packages as $package) {
            foreach ($package->tlTravels as $travel) {
                $date = Carbon::parse($travel->DepartureDate)->format('M-Y');
                if (!in_array($date, $periods)) {
                    array_push($periods, $date);
                }

            }
        }
        if ($type) {
            $packages = $packages->where('tl_package_type_id', $type);
        }
        if ($period) {
            $date = Carbon::createFromFormat('d-M-Y', '1-' . $period)->format('Y-m-d');


            $ids = TlTravel::all()->where('DepartureDate', '>=', $date)->pluck('tl_package_id');
            $packages = $packages->whereIn('id', $ids);
        }
        if ($country) {
            $cities = TlCity::all()->where('tl_country_id', $country)->pluck('id');
            $ids = TlDestination::all()->whereIn('tl_city_id', $cities)->pluck('tl_package_id');
            $packages = $packages->whereIn('id', $ids);
        }

        $minPrice = $packages->min('startPrice');
        $maxPrice = $packages->max('startPrice');
        $daysMin = 100;
        $daysMax = 0;
        foreach ($packages as $p) {
            $depart = $p->tlTravels()->where('DepartureDate', '>', \Carbon\Carbon::now())->orderBy('DepartureDate', 'desc');
            if (!empty($depart->first())) {
                $dateDepart = Carbon::parse($depart->first()->DepartureDate);
                $dateReturn = Carbon::parse($depart->first()->arrivedDate);
            }
            if (!empty($dateDepart)) {
                if ($daysMin > $dateDepart->diffInDays($dateReturn) + 1) {
                    $daysMin = $dateDepart->diffInDays($dateReturn) + 1;
                }
                if ($daysMax < $dateDepart->diffInDays($dateReturn) + 1) {
                    $daysMax = $dateDepart->diffInDays($dateReturn) + 1;
                }
            }


        }
        if ($minimum_price) {

            $packages = $packages->where('startPrice', '>=', $minimum_price)->where('startPrice', '<=', $maximum_price);
        }
        if ($minDays) {

            $ids = array();
            foreach ($packages as $p) {
                $depart = $p->tlTravels()->where('DepartureDate', '>', \Carbon\Carbon::now())->orderBy('DepartureDate', 'desc');
                if (!empty($depart->first())) {
                    $dateDepart = Carbon::parse($depart->first()->DepartureDate);
                    $dateReturn = Carbon::parse($depart->first()->arrivedDate);
                }
                if (!empty($dateDepart)) {
                    if ($minDays <= $dateDepart->diffInDays($dateReturn) + 1 and $maxDays >= $dateDepart->diffInDays($dateReturn) + 1) {
                        if (!in_array($p->id, $ids)) {
                            array_push($ids, $p->id);
                        }
                    }
                }


            }
            $packages = $packages->whereIn('id', $ids);
        }

        $thematics = array();
        foreach ($packages as $package) {
            // $package->tlThematics();
            foreach ($package->tlThematics as $tlThematic) {
                if (!array_key_exists($tlThematic->id, $thematics)) {
                    array_push($thematics, $tlThematic->id);
                }
            }
        }
        $thematics = TlThematic::all()->whereIn('id', $thematics);
        if (!empty($category)) {
            $packages = $packages->whereIn('tl_category_id', $category);
        }

        if ($pension) {
            $hotel = TlPackageHotelInfo::all()->whereIn('pension', $pension)->pluck('tl_package_id')->toArray();
            $packages = $packages->whereIn('id', $hotel);
        }

        if ($thematic) {
            $ids = array();
            foreach (TlThematic::all()->whereIn('id', $thematic) as $tlThematic) {
                foreach ($tlThematic->tlPackages as $p) {
                    if (!array_key_exists($p->id, $ids)) {
                        array_push($ids, $p->id);
                    }
                }
            }
            $packages = $packages->whereIn('id', $ids);

        }


        if ($sortBy) {
            if ($sortBy == "ASC") {
                $packages = $packages->sortBy("startPrice");
            } else {
                $packages = $packages->sortByDesc("startPrice");
            }
        } else {
            $packages = $packages->sortBy("orderList");
        }
        // dd('$destinations1', $destinations);
        // $destinations = [];
        // foreach ($packages as $package) {
        //     foreach ($package->tlDestinations as $destination) {

        //         $l["id"] = $destination->tl_country_id;
        //         $l["country"] = $destination->tlCountry()->first()->name;
        //         $l["type"] = $package->tl_package_type_id;
        //         if (!in_array($l, $destinations))
        //             $destinations[] = $l;
        //     }
        // }
        // $destinations = TlCountry::all()->whereIn('id', $destinations)->sortBy('name');
        // dd('$destinations2', $destinations);

        return view('front.package.packages')
            ->with('packages', $packages)
            ->with('cities', $cities)
            ->with('types', $types)
            ->with('periods', $periods)
            ->with('minPrice', $minPrice)
            ->with('maxPrice', $maxPrice)
            ->with('daysMin', $daysMin)
            ->with('daysMax', $daysMax)
            ->with('thematics', $thematics)
            ->with('destinations', $destinations)
            ->with('duree', $duree)
            ->with('categories', $categories);
    }

    public function package($alias)
    {
        $package = TlPackage::all()->where('alias', $alias)->first();
        $hotelInfos = TlPackageHotelInfo::all()->where('tl_package_id', $package->id);

        $photos =  $package->tlPackagePhotos->pluck('path');
        $pathImg = config('services.pathImg');

        $packageType = TlPackage::all()->where('tl_package_type_id', $package->tl_package_type_id)->whereNotIn("id", $package->id)->take(3);
        $packageCategory = TlPackage::all()->where('tl_category_id', $package->tl_category_id)->whereNotIn("id", $package->id)->take(4);

        return view('front.package.package')
            ->with('packageType', $packageType)
            ->with('packageCategory', $packageCategory)
            ->with('package', $package)
            ->with('photos', $photos)
            ->with('pathImg', $pathImg)
            ->with('hotelInfos', $hotelInfos);
    }


    public function getLodgingFormula(Request $request)
    {
        $travel = $request->get('travel');
        $adults = $request->get('adults');
        $packages = $request->get('package');
        $room = $request->get('room');
        $package = TlPackage::all()->find($packages);
        if (!$package) {
            return abort(404);
        }
        $infant = [];
        foreach ($package->tlPoliticAgeEnfantPackages as $ageInfant) {
            $infant[$ageInfant->TypeEnfant] = $request->get($ageInfant->TypeEnfant);
        }
        if (Session::has('travel'))
            Session::forget('travel');
        Session::put('travel', $travel);
        if (Session::has('package'))
            Session::forget('package');
        Session::put('package', $packages);
        if (Session::has('adults'))
            Session::forget('adults');
        Session::put('adults', $adults);
        if (Session::has('infants'))
            Session::forget('infants');
        Session::put('infants', $infant);

        $formulas = TlFormula::all()->where('tl_package_id', $package->id)
            ->where('tl_travel_id', $travel)->where("capacity", $room);

        $data = [];
        foreach ($formulas as $formula) {
            $isGood = true;
            $price = $formula->priceSale * $adults;
            foreach ($package->tlPoliticAgeEnfantPackages as $ageInfant) {
                $nbI = $request->get($ageInfant->TypeEnfant);
                $nbI = is_numeric($nbI) ? $nbI : 0;

                if ($ageInfant->TypeEnfant == "Child") {
                    if (!$formula->priceInfant && $nbI > 0) {
                        $isGood = false;
                    } else {
                        $price += $formula->priceInfant * $nbI;
                    }
                } else if ($ageInfant->priceEnfant == "Minor") {
                    if (!$formula->priceMinor && $nbI > 0) {
                        $isGood = false;
                    } else {
                        $price += $formula->priceMinor * $nbI;
                    }

                } else {
                    if (!$formula->priceBaby && $nbI > 0) {
                        $isGood = false;
                    } else {
                        $price += $formula->priceBaby * $nbI;
                    }
                }
            }
            $line['id'] = $formula->id;
            $line['name'] = $formula->name;
            $line['price'] = $price;
            $line['hotels'] = [];

            $rooms = TlPackageRoom::all()->whereIn("id", unserialize($formula->room));

            if ($rooms->first()) {
                foreach ($rooms as $room) {
                    $stay = $room->tlPackageHotelInfo()->first()->tlStays()->where('tl_travel_id', $travel)->first();
                    $capacity = 0;
                    if ($stay) {
                        if ($stay->allotment > 0) {
                            $allotment = $stay->tlPackageRoomAllotments()->where("tl_package_room_id", $room->id)->first();

                            if ($allotment) {
                                if ($allotment->allotment === 0) {
                                    $isGood = false;
                                }
                                $capacity = $allotment->capacity;
                                if ($room->isOpen == 1) {
                                    if ($allotment->capacity < $adults)
                                        $isGood = false;
                                } else {
                                    if ($allotment->capacity == $adults) {

                                    } else
                                        $isGood = false;
                                }
                            } else
                                $isGood = false;

                        } else {
                            $isGood = false;
                        }
                    } else {
                        $isGood = false;
                    }
                    $h["hotel"] = $room->tlPackageHotelInfo()->first()->name;
                    $h["category"] = $room->tlPackageHotelInfo()->first()->category;
                    $h["address"] = $room->tlPackageHotelInfo()->first()->address;
                    $h["city"] = $room->tlPackageHotelInfo()->first()->tlCity()->first()->name;
                    $h["pension"] = $room->tlPackageHotelInfo()->first()->pension;
                    if ($stay) {
                        $h["checkIn"] = Carbon::parse($stay->checkIn)->format("d-m-Y");
                        $h["checkOut"] = Carbon::parse($stay->checkOut)->format("d-m-Y");
                    } else {
                        $h["checkIn"] = "";
                        $h["checkOut"] = "";
                    }
                    $h["room"] = $room->name;
                    $h["capacity"] = $capacity;
                    $h["typeLodging"] = $room->typeLodging;
                    $h["isOpen"] = $room->isOpen;
                    $line['hotels'][] = $h;
                }
            } else {
                $isGood = false;
            }


            if ($isGood)
                $data[] = $line;

        }


        $data = collect($data)->sortBy('price');
        return response()->json($data);
    }

    public function getDestinationType(Request $request)
    {
        $id = $request->id;
        $packages = TlPackage::all()->where('tl_package_type_id', $id);
        $destinations = [];
        foreach ($packages as $package) {
            $l["id"] = $package->tl_category_id;
            $l["name"] =( $package->tlCategory()->first()) ? $package->tlCategory()->first()->title : '';
            if (!in_array($l, $destinations))
                $destinations[] = $l;
        }
        return response()->json($destinations);
    }

    public function getAvailableRoom(Request $request){
        $package = TlPackage::all()->find($request->package);
        $travel = $request->get('travel');
        $formulas = TlFormula::all()->where('tl_package_id', $package->id)
            ->where('tl_travel_id', $travel)->sortByDesc('capacity');

        return response()->json($formulas);
    }

}
