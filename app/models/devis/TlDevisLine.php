<?php

namespace App\models\devis;

use Illuminate\Database\Eloquent\Model;

class TlDevisLine extends Model
{
    public function tlDevis()
    {
        return $this->belongsTo('App\models\devis\TlDevis');
    }
    public function tlCommissionDevis()
    {
        return $this->hasMany('App\models\devis\TlCommissionDevis');
    }
}
