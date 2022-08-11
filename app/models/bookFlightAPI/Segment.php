<?php

namespace App\models\bookFlightAPI;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model
{
    public function leg(){
        return $this->belongsTo('App\models\bookFlightAPI\Leg');
    }
}
