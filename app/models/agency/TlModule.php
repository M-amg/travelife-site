<?php

namespace App\models\agency;

use Illuminate\Database\Eloquent\Model;

class TlModule extends Model
{
    public function tlPayments(){
        return $this->belongsToMany('App\models\TlPayment', 'tl_module_payments', 'tl_module_id', 'tl_payment_id');
    }
}
