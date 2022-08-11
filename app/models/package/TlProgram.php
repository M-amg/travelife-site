<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlProgram extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title','description'];

    public function tlPackage(){
        return $this->belongsTo('App\models\package\TlPackage');
    }
}
