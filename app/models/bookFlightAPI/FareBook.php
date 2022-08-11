<?php

namespace App\models\bookFlightAPI;

use Illuminate\Database\Eloquent\Model;

class FareBook extends Model
{
    public function legs(){
        return $this->hasMany('App\models\bookFlightAPI\Leg');
    }
    public function tlPassengers()
    {
        return $this->belongsToMany('App\models\book\TlPassenger')
            ->withPivot('firstName', 'lastName', 'dob', 'type', 'passport', 'gender', 'civility')
            ->withTimestamps();
    }
    public function apiFare(){
        return $this->hasOne('App\models\bookFlightAPI\ApiFare');
    }
    public function tlAgent(){
        return $this->belongsTo('App\models\agency\TlAgent');
    }
    public function tlCustomer(){
        return $this->belongsTo('App\models\customer\TlCustomer');
    }
    public function tickets(){
        return $this->hasMany('App\models\bookFlightAPI\Ticket');
    }
    public function tlRules(){
        return $this->belongsToMany('App\models\book\TlRule','tl_rule_flight_api_books','fare_book_id','tl_rule_id');
    }
}
