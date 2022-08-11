<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlPromo extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['description'];

    public function tlRoomTypes(){
        return $this->belongsToMany('App\models\hotel\TlRoomType', 'tl_room_type_promos', 'tl_promo_id', 'tl_room_type_id');
    }
}
