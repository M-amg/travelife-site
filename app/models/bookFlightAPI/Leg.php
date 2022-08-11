<?php

namespace App\models\bookFlightAPI;

use Illuminate\Database\Eloquent\Model;

class Leg extends Model
{
    public function segments(){
        return $this->hasMany('App\models\bookFlightAPI\Segment');
    }
    public function fareBook(){
        return $this->belongsTo('App\models\bookFlightAPI\FareBook');
    }
}
