<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlRoomService extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];

    public function tlRoomTypes(){
        return $this->belongsToMany('App\models\hotel\TlRoomType', 'tl_room_type_room_services', 'tl_room_service_id', 'tl_room_type_id');
    }
}
