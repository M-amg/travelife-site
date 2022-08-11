<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlPoliticAgeEnfantLodging extends Model
{
    public function tlLodging(){
        return $this->belongsTo('App\models\package\TlLodging');
    }
    public function tlPoliciesAgeEnfant(){
        return $this->belongsTo('App\models\hotel\TlPoliciesAgeEnfant');
    }
}
