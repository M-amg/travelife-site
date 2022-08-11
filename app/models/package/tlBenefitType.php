<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlBenefitType extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $timestamps = false;
    public $translatedAttributes = ['name'];
    public function tlBenefits(){
        return $this->hasMany('App\models\package\TlBenefit');
    }
    public function tlActivites(){
        return $this->hasMany('App\models\TlActivite');
    }
}
