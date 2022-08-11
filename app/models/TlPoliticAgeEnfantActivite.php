<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TlPoliticAgeEnfantActivite extends Model
{
    public function tlActivite()
    {
        return $this->belongsTo('App\models\TlActivite');
    }
}
