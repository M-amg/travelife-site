<?php

namespace App\models\flight;

use Illuminate\Database\Eloquent\Model;

class TlFlightPromo extends Model
{
    public function tlLagPromos(){
        return $this->hasMany('App\models\flight\TlLagPromo');
    }
}
