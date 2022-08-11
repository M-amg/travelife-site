<?php

namespace App\models\book;

use Illuminate\Database\Eloquent\Model;

class TlVoucher extends Model
{
    public function tlCommandLine(){
        return $this->belongsTo('App\models\book\TlCommandLine');
    }
    public function tlCustomer(){
        return $this->belongsTo('App\models\customer\TlCustomer');
    }
}
