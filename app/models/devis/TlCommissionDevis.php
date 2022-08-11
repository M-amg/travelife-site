<?php

namespace App\models\devis;

use Illuminate\Database\Eloquent\Model;

class TlCommissionDevis extends Model
{
    public function tlDevisLine()
    {
        return $this->belongsTo('App\models\devis\TlDevisLine');
    }
}
