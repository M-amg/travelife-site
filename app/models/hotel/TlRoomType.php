<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlRoomType extends Model
{
    public function tlRates(){
        return $this->hasMany('App\models\hotel\TlRate');
    }
    public function tlHotel(){
        return $this->belongsTo('App\models\hotel\TlHotel');
    }
    public function tlAllotments(){
        return $this->hasMany('App\models\hotel\TlAllotment');
    }
    public function tlRoomServices(){
        return $this->belongsToMany('App\models\hotel\TlRoomService', 'tl_room_type_room_services', 'tl_room_type_id', 'tl_room_service_id');
    }
    public function tlCancelConditions(){
        return $this->belongsToMany('App\models\hotel\TlCancelCondition', 'tl_room_type_cancel_conditions', 'tl_room_type_id', 'tl_cancel_condition_id');
    }
    public function tlPromos(){
        return $this->belongsToMany('App\models\hotel\TlPromo', 'tl_room_type_promos', 'tl_room_type_id', 'tl_promo_id');
    }
    public function tlBedRooms(){
        return $this->hasMany('App\models\hotel\room\TlBedRoom');
    }
    public function TlSaisons(){
        return $this->hasMany('App\models\hotel\TlSaison');
    }
    public function tlLodgings(){
        return $this->hasMany('App\models\package\TlLodging');
    }
}
