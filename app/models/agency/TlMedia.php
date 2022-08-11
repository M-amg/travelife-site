<?php

namespace App\models\agency;

use Illuminate\Database\Eloquent\Model;

class TlMedia extends Model
{
    public function tlAgency(){
        return $this->belongsTo('App\models\agency\TlAgency');

    }
    public function tlNameMedia(){
        return $this->belongsTo('App\models\agency\TlNameMedia');
    }
}
