<?php

namespace App\Http\Controllers;

// use App\models\page\TlSlider;

use App\models\page\TlSlider;
use App\models\package\TlPackage;
use App\models\package\TlThematic;

class ThematicController extends Controller
{
    public function index($id = null)
    {
        $thematics = TlThematic::all()->sortBy('id')->take(6);
        $slides = TlSlider::all()->where('property', 'thematic')->where('status', 1)->take(3);

        $package = $id;

        return view('front.thematic.index', compact('slides','thematics', 'package'));
            
    }
    public function thematic($id)
    {
        $thematic = TlThematic::find($id);

        // $slides = TlSlider::all()->where('property', 'vol')->where('status', 1);

        return view('front.thematic.thematic')
            ->with('thematic', $thematic);
    }
    public function devis()
    {
        $thematics = TlThematic::all()->sortBy('id')->take(6);

        // $slides = TlSlider::all()->where('property', 'vol')->where('status', 1);

        return view('front.thematic.demandeDevis')
            ->with('thematics', $thematics);
    }
    public function inspiration($id)
    {
        $thematics = TlThematic::all()->sortBy('id')->take(6);

        $package = TlPackage::all()->where('id', $id)->first();
        

        // $slides = TlSlider::all()->where('property', 'vol')->where('status', 1);


        $photos =  $package->tlPackagePhotos->pluck('path');
        $pathImg = config('services.pathImg');

        // return view('front.thematic.inspiration', compact('package'));
        // return view('front.thematic.inspiration')
        return view('front.package.package')
                ->with('photos', $photos)
                ->with('pathImg', $pathImg)
                ->with('package', $package);
    }
}
