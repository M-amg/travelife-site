<?php

namespace App\models\book;

use Illuminate\Database\Eloquent\Model;

class TlBillLine extends Model
{
    public function tlCommandLine(){
        return $this->belongsTo('App\models\book\TlCommandLine');
    }
    public function tlBill(){
        return $this->belongsTo('App\models\book\TlBill');
    }

    public function total(){

        return $this->price+$this->fees+$this->fees_config;
    }
}
