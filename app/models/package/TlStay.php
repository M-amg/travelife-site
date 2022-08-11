<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlStay extends Model
{
    public function tlPackageHotelInfo()
    {
        return $this->belongsTo('App\models\package\TlPackageHotelInfo');
    }
    public function tlTravel(){
        return $this->belongsTo('App\models\package\TlTravel');
    }
    public function tlPackageRoomAllotments(){
        return $this->hasMany('App\models\package\TlPackageRoomAllotment');
    }

}
