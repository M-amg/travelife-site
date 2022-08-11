<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TlActivite extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $timestamps = false;
    public $translatedAttributes = ['title', 'description'];

    public function tlBenefitType()
    {
        return $this->belongsTo('App\models\package\TlBenefitType');
    }

    public function tlSupplier()
    {
        return $this->belongsTo('App\models\supplier\TlSupplier');
    }

    public function tlActivitePhotos()
    {
        return $this->hasMany('App\models\TlActivitePhoto');
    }

    public function tlPoliticAgeEnfantActivites()
    {
        return $this->hasMany('App\models\TlPoliticAgeEnfantActivite');
    }
}
