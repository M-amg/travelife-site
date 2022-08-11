<?php

namespace App\models\book;

use Illuminate\Database\Eloquent\Model;

class TlCommandLine extends Model
{
    public function tlVouchers(){
        return $this->hasMany('App\models\book\TlVoucher');
    }

    public function tlCancelBooks(){
        return $this->hasMany('App\models\book\TlCancelBook');
    }

    public function tlBills(){
        return $this->hasMany('App\models\book\TlBill');
    }

    public function tlBillLines(){
        return $this->hasMany('App\models\book\TlBillLine');
    }

    public function tlCustomer(){
        return $this->belongsTo('App\models\customer\TlCustomer');
    }

    public function somePrice(){

        $total=$this->priceBuy+$this->marge+$this->marge_config-$this->remise;
        return $total;
    }
}
