<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlBenefitPhoto extends Model
{
    public function tlBenefit(){
        return $this->belongsTo('App\models\package\TlBenefit');
    }
}
