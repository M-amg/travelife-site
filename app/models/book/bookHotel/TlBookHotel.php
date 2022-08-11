<?php

namespace App\models\book\bookHotel;

use Illuminate\Database\Eloquent\Model;

class TlBookHotel extends Model
{
    public function tlCustomer(){
        return $this->belongsTo('App\models\customer\TlCustomer');
    }
    public function tlHotel(){
        return $this->belongsTo('App\models\hotel\TlHotel');
    }
    public function tlAgent(){
        return $this->belongsTo('App\models\agency\TlAgent');
    }
    public function tlPassengers(){
        return $this->belongsToMany('App\models\book\TlPassenger')
            ->withPivot('firstName', 'lastName', 'dob', 'type', 'passport', 'gender', 'civility')
            ->withTimestamps();
    }
    public function tlBookRooms(){
        return $this->hasMany('App\models\book\bookHotel\TlBookRoom');
    }
    public function tlPayment(){
        return $this->belongsTo('App\models\TlPayment');
    }
    public function tlSupplements(){
        return $this->belongsToMany('App\models\hotel\TlSupplement', 'tl_book_package_supplements', 'tl_book_hotel_id', 'tl_supplement_id');
    }

    public function tlRules(){
        return $this->belongsToMany('App\models\book\TlRule','tl_rule_hotel_books','tl_book_hotel_id','tl_rule_id');
    }
}
