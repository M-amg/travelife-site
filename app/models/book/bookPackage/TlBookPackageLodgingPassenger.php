<?php

namespace App\models\book\bookPackage;

use Illuminate\Database\Eloquent\Model;

class TlBookPackageLodgingPassenger extends Model
{
    public function tlBookPackage(){
        return $this->belongsTo('App\models\book\bookPackage\TlBookPackage');
    }
}
