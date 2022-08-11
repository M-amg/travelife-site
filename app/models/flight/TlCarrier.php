<?php

namespace App\models\flight;

use Illuminate\Database\Eloquent\Model;

class TlCarrier extends Model
{
    public function tlFlights(){
        return $this->hasMany('App\models\flight\TlFlight');
    }
    public function tlSegments(){
        return $this->hasMany('App\models\flight\TlSegment');
    }
    public function tlSuppliers(){
        return $this->belongsToMany('App\models\supplier\TlSupplier', 'tl_supplier_carriers', 'tl_carrier_id', 'tl_supplier_id');
    }
}
