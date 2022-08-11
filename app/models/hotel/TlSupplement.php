<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlSupplement extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = ['title'];

    public function tlhotel(){
        return $this->belongsTo('App\models\hotel\TlHotel');
    }
    public function tlBookHotels(){
        return $this->belongsToMany('App\models\book\bookHotel\TlBookHotel', 'tl_book_hotel_supplements', 'tl_supplement_id', 'tl_book_hotel_id');
    }
}
