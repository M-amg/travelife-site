<?php

namespace App\models\bookFlightAPI;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function fareBook(){
        return $this->belongsTo('App\models\bookFlightAPI\FareBook');
    }
}
