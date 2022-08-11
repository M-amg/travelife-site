<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlPoliciesAgeEnfant extends Model
{
    public function tlHotel(){
        return $this->belongsTo('App\models\hotel\TlHotel');
    }
    public function tlRates(){
        return $this->belongsToMany('App\models\hotel\TlRate', 'tl_policies_age_enfant_rates', 'tl_policies_age_enfant_id', 'tl_rate_id');
    }
}
