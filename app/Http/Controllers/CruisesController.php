<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CruisesController extends Controller
{

    public function index(){
        return view('front.cruises.index');
    }

    public function cruises(){
        return view('front.cruises.cruises');
    }
}
