<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlPackagePhoto extends Model
{
    public function tlPackage(){
        return $this->belongsTo('App\models\package\TlPackage');
    }
}
