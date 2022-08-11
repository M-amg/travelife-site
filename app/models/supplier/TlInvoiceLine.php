<?php

namespace App\models\supplier;

use Illuminate\Database\Eloquent\Model;

class TlInvoiceLine extends Model
{
    public function tlAgent(){
        return $this->belongsTo('App\models\agency\TlAgent');
    }
    public function tlInvoice(){
        return $this->belongsTo('App\models\supplier\TlInvoice');
    }
}
