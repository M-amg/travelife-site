<?php

namespace App\models\hotel\room;

use Illuminate\Database\Eloquent\Model;

class TlBedRoom extends Model
{
    public $timestamps = false;
    public function tlRoomType()
    {
        return $this->belongsTo('App\models\hotel\TlRoomType');
    }
    public function TlBed(){
        return $this->belongsTo('App\models\hotel\room\TlBed');
    }
}
