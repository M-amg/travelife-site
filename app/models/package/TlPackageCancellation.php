<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlPackageCancellation extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['description'];

    public function tlPackage(){
        return $this->belongsTo('App\models\package\TlPackage');
    }
}
