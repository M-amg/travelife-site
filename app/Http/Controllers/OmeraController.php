<?php

namespace App\Http\Controllers;

use App\models\package\TlCategory;
use App\models\package\TlPackage;
use App\models\package\TlPackageType;
use App\models\page\TlSlider;
use App\models\TlCity;
use App\models\TlCountry;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OmeraController extends Controller
{
    public function index(Request $request)
    {

        $packages = TlPackage::all()->where('isActive', 1)->where('tl_package_type_id',3)->sortBy("ordered");
        $cities = TlCity::all();
        $types = TlPackageType::all();
        $categories = TlCategory::all();
        $destinations = array();
        foreach ($packages as $package) {
            foreach ($package->tlDestinations as $destination) {
                if (!array_key_exists($destination->tl_country_id, $destinations)) {
                    array_push($destinations, $destination->tl_country_id);
                }
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


        $destinations = TlCountry::all()->whereIn('id', $destinations)->sortBy('name');
        $slides=TlSlider::all()->where('property','omera')->where('status',1);
        return view('front.omera.index')
            ->with('packages', $packages)
            ->with('cities', $cities)
            ->with('types', $types)
            ->with('periods', $periods)
            ->with('slides', $slides)
            ->with('destinations', $destinations)
            ->with('categories', $categories);
    }
}
