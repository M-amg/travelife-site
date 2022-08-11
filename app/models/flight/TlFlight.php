<?php

namespace App\models\flight;

use Illuminate\Database\Eloquent\Model;

class TlFlight extends Model
{
    public function tlCarrier(){
        return $this->belongsTo('App\models\flight\TlCarrier');
    }
    public function tlSupplier(){
        return $this->belongsTo('App\models\supplier\TlSupplier');
    }
    public function tlEnfantAges(){
        return $this->hasMany('App\models\flight\TlInfantAgeFlight');
    }
    public function tlLags(){
        return $this->hasMany('App\models\flight\TlLag');
    }
    public function tlTravels(){
        return $this->hasMany('App\models\package\TlTravel');
    }
}
