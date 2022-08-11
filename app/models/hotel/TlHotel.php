<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlHotel extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['shortdesc'];

    public function tlSupplier(){
        return $this->belongsTo('App\models\supplier\TlSupplier');
    }
    public function tlCity(){
        return $this->belongsTo('App\models\TlCity');
    }
    public function tlCountry(){
        return $this->belongsTo('App\models\TlCountry');
    }
    public function tlInfoHotels(){
        return $this->hasMany('App\models\hotel\TlInfoHotel');
    }
    public function tlPictures(){
        return $this->hasMany('App\models\hotel\TlPicture');
    }
    public function tlContrats(){
        return $this->hasMany('App\models\hotel\TlContrat');
    }
    public function tlBookingManagers(){
        return $this->hasMany('App\models\hotel\TlBookingManager');
    }
    public function tlPoliciesAgeEnfants(){
        return $this->hasMany('App\models\hotel\TlPoliciesAgeEnfant');
    }
    public function tlRoomTypes(){
        return $this->hasMany('App\models\hotel\TlRoomType');
    }
    public function tlPromos(){
        return $this->hasMany('App\models\hotel\TlPromo');
    }
    public function tlCancelConditions(){
        return $this->hasMany('App\models\hotel\TlCancelCondition');
    }
    public function tlHotelOptions(){
        return $this->belongsToMany('App\models\hotel\TlHotelOption', 'tl_hotel_option_hotels', 'tl_hotel_id', 'tl_hotel_option_id');
    }
    public function tlSupplements(){
        return $this->hasMany('App\models\hotel\TlSupplement');
    }
    public function tlLodgings(){
        return $this->hasMany('App\models\package\TlLodging');
    }
    public function tlDevise(){
        return $this->belongsTo('App\models\agency\TlDevise');
    }
    
    public function tlPensions(){
        return $this->hasMany('App\models\hotel\TlPension');
    }
}
