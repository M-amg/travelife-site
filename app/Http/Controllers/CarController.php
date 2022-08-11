<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function cars(){
        return view('front.car.cars');
    }
}
