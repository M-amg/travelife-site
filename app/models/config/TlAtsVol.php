<?php

namespace App\models\config;

use Illuminate\Database\Eloquent\Model;

class TlAtsVol extends Model
{
    public function tlSupplier()
    {
        return $this->belongsTo('App\models\supplier\TlSupplier');
    }

}
