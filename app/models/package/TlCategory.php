<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlCategory extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $timestamps = false;
    public $translatedAttributes = ['title'];
    public function tlPackages(){
        return $this->hasMany('App\models\package\TlPackage');
    }
}
