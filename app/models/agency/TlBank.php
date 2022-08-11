<?php

namespace App\models\agency;

use Illuminate\Database\Eloquent\Model;

class TlBank extends Model
{
    public function tlAgency(){
        return $this->belongsTo('App\models\agency\TlAgency');
    }

}
