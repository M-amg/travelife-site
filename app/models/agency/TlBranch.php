<?php

namespace App\models\agency;

use Illuminate\Database\Eloquent\Model;

class TlBranch extends Model
{
    public function tlAgency(){
        return $this->belongsTo('App\models\agency\TlAgency');
    }

    public function tlAgents(){
        return $this->hasMany('App\models\agency\TlAgent');
    }
    public function tlCity(){
        return $this->belongsTo('App\models\TlCity');
    }
}
