<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlRate extends Model
{
    public function tlSaison(){
        return $this->belongsTo('App\models\hotel\TlSaison',"tl_saison_id");
    }
    public function tlRoomType(){
        return $this->belongsTo('App\models\hotel\TlRoomType');
    }
    public function tlPoliciesAgeEnfants(){
        return $this->belongsToMany('App\models\hotel\TlPoliciesAgeEnfant', 'tl_policies_age_enfant_rates', 'tl_rate_id', 'tl_policies_age_enfant_id');
    }
    public function tlPoliciesAgeEnfantRates(){
        return $this->hasMany('App\models\hotel\TlPoliciesAgeEnfantRate');
    }
    public function tlPassengers(){
        return $this->belongsToMany('App\models\book\TlPassenger', 'tl_book_hotel_rate_passengers', 'tl_rate_id', 'tl_passenger_id');
    }
}
