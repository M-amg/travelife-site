<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlPackageHotelInfo extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = ['description'];

    public function tlPackage(){
        return $this->belongsTo('App\models\package\TlPackage');
    }
    public function tlDestination(){
        return $this->belongsTo('App\models\package\TlDestination');
    }
    public function tlSupplier(){
        return $this->belongsTo('App\models\supplier\TlSupplier');
    }
    public function tlTravels(){
        return $this->belongsToMany('App\models\package\TlTravel', 'tl_allotment_packages', 'tl_package_hotel_info_id', 'tl_travel_id');
    }
    public function tlCity(){
        return $this->belongsTo('App\models\TlCity');
    }
    public function tlPackageRooms(){
        return $this->hasMany('App\models\package\TlPackageRoom');
    }
    public function tlStays(){
        return $this->hasMany('App\models\package\TlStay');
    }
}
