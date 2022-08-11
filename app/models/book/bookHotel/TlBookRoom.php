<?php

namespace App\models\book\bookHotel;

use Illuminate\Database\Eloquent\Model;

class TlBookRoom extends Model
{
    public $timestamps = false;
    public function tlBookHotel(){
        return $this->belongsTo('App\models\book\bookHotel\TlBookHotel');
    }
    public function tlRoomType(){
        return $this->belongsTo('App\models\hotel\TlRoomType');
    }
    public function tlPassengers(){
        return $this->belongsToMany('App\models\book\TlPassenger')
            ->withPivot('firstName', 'lastName', 'dob', 'type', 'passport', 'gender', 'civility')
            ->withTimestamps();
    }
}
