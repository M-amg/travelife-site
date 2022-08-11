<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlLodging extends Model
{
    public function tlHotel(){
        return $this->belongsTo('App\models\hotel\TlHotel');
    }
    public function tlRoomType(){
        return $this->belongsTo('App\models\hotel\TlRoomType');
    }
    public function tlPoliticAgeEnfantLodgings(){
        return $this->hasMany('App\models\package\TlPoliticAgeEnfantLodging');
    }
    public function tlStays(){
        return $this->belongsToMany('App\models\package\TlStay', 'tl_stay_lodgings', 'tl_lodging_id', 'tl_stay_id');
    }
    public function tlFormula(){
        return $this->belongsTo('App\models\package\TlFormula');
    }
    public function tlPassengers(){
        return $this->belongsToMany('App\models\book\TlPassenger', 'tl_book_package_lodging_passengers', 'tl_lodging_id', 'tl_passenger_id');
    }

}
