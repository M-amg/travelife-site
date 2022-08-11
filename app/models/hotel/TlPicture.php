<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlPicture extends Model
{
    public function tlHotel(){
        return $this->belongsTo('App\models\hotel\TlHotel');
    }
}
