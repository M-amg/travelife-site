<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlHotelOption extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name'];

    public function tlHotels(){
        return $this->belongsToMany('App\models\hotel\TlHotel', 'tl_hotel_option_hotels', 'tl_hotel_option_id', 'tl_hotel_id');
    }
}
