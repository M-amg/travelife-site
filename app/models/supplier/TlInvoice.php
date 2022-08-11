<?php

namespace App\models\supplier;

use Illuminate\Database\Eloquent\Model;

class TlInvoice extends Model
{
    public function tlInvoiceLines(){
        return $this->hasMany('App\models\supplier\TlInvoiceLine');
    }
    public function tlBank(){
        return $this->belongsTo('App\models\agency\TlBank');
    }
    public function tlAgent(){
        return $this->belongsTo('App\models\agency\TlAgent');
    }

}
