<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlInfoHotel extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title','description'];

    public function tlHotel(){
        return $this->belongsTo('App\models\hotel\TlHotel');
    }
}
