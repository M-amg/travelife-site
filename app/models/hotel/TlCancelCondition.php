<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlCancelCondition extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['description'];

    public function tlRoomTypes(){
        return $this->belongsToMany('App\models\hotel\TlRoomType', 'tl_room_type_cancel_conditions', 'tl_cancel_condition_id', 'tl_room_type_id');
    }
}
