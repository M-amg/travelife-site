<?php

namespace  App\models\package\formula;

use Illuminate\Database\Eloquent\Model;

class TlFormulaBenefitBook extends Model
{
    public function tlBenefit(){
        return $this->belongsTo('App\models\package\TlBenefit');
    }

}
