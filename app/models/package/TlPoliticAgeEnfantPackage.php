<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlPoliticAgeEnfantPackage extends Model
{
    public function tlPackage(){
        return $this->belongsTo('App\models\package\TlPackage');
    }
}
