<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlAllotment extends Model
{
    public function tlRoomType(){
        return $this->belongsTo('App\models\hotel\TlRoomType');
    }
}
