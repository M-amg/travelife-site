<?php

namespace App\models\hotel\room;

use Illuminate\Database\Eloquent\Model;

class TlBed extends Model
{
    public function tlRoomTypes(){
        return $this->belongsToMany('App\models\hotel\TlRoomType', 'tl_bed_rooms', 'tl_bed_id', 'tl_room_type_id');
    }
}
