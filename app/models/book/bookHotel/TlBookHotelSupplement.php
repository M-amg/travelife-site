<?php

namespace App\models\book\bookHotel;

use Illuminate\Database\Eloquent\Model;

class TlBookHotelSupplement extends Model
{
    public $timestamps = false;
    public function tlSupplement(){
        return $this->belongsTo('App\models\hotel\TlSupplement');
    }

}
