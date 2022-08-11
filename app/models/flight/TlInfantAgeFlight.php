<?php

namespace App\models\flight;

use Illuminate\Database\Eloquent\Model;

class TlInfantAgeFlight extends Model
{
    public function tlFlight(){
        return $this->belongsTo('App\models\flight\TlFlight');
    }
}
