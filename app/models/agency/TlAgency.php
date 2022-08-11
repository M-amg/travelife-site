<?php

namespace App\models\agency;

use Illuminate\Database\Eloquent\Model;

class TlAgency extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['description'];

    public function tlBanks()
    {
        return $this->hasMany('App\models\agency\TlBank');
    }

    public function tlBranches()
    {
        return $this->hasMany('App\models\agency\TlBranch');
    }

    public function tlMedias()
    {
        return $this->hasMany('App\models\agency\TlMedia');
    }

    public function tlcity()
    {
        return $this->belongsTo('App\models\Tlcity');
    }
}
