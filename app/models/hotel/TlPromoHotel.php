<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlPromoHotel extends Model
{
    public function tlHotel(){
        return $this->belongsTo('App\models\hotel\tlHotel');
    }
    public function tlCountry(){
        return $this->belongsTo('App\models\TlCountry');
    }

}
