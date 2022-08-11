<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TlCountry extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];

    public function tlCities(){
        return $this->hasMany('App\models\TlCity');
    }

    public function tlHotels(){
        return $this->hasMany('App\models\hotel\TlHotel');
    }

}
