<?php

namespace App\models\agency;

use Illuminate\Database\Eloquent\Model;

class TlNameMedia extends Model
{
    public function tlMedias(){
        return $this->hasMany('App\models\agency\TlMedia');
    }
}
