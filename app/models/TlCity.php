<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TlCity extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];

    public function tlCountry(){
        return $this->belongsTo('App\models\TlCountry');
    }
    public function tlHotels(){
        return $this->hasMany('App\models\hotel\TlHotel');
    }
    public function tlAgents(){
        return $this->hasMany('App\models\agency\TlAgent');
    }

    public function tlBranches(){
        return $this->hasMany('App\models\agency\TlBranch');
    }
    public function tlAgencies(){
        return $this->hasMany('App\models\agency\TlAgency');
    }
    public function tlDestinations(){
        return $this->belongsToMany('App\models\TlCity', 'tl_destinations', 'tl_city_id', 'tl_package_id');
    }
    public function tlStays(){
        return $this->hasMany('App\models\package\TlStay');
    }
    public function tlPackages(){
        return $this->hasMany('App\models\package\TlPackage');
    }
}
