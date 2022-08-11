<?php

namespace App\models\customer;

use Illuminate\Database\Eloquent\Model;

class TlAttachedPiece extends Model
{
    public function tlCustomer(){
        return $this->belongsTo('App\models\customer\TlCustomer');
    }
}
