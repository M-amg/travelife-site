<?php

namespace App\models\hotel;

use Illuminate\Database\Eloquent\Model;

class TlSaison extends Model
{
    public function tlRate(){
        return $this->hasMany('App\models\hotel\TlRate');
    }
}
