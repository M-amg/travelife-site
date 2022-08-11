<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlPackageType extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['name', 'description'];

    public function tlPackages(){
        return $this->hasMany('App\models\package\TlPackage');
    }
}
