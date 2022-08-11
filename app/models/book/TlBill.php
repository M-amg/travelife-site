<?php

namespace App\models\book;

use Illuminate\Database\Eloquent\Model;

class TlBill extends Model
{
    public function tlCommandLine(){
        return $this->belongsTo('App\models\book\TlCommandLine');
    }
    public function tlCustomer(){
        return $this->belongsTo('App\models\customer\TlCustomer');
    }
    public function tlAgent(){
        return $this->belongsTo('App\models\agency\TlAgent');
    }
    public function tlRules(){
        return $this->hasMany('App\models\book\TlRule');
    }
}
