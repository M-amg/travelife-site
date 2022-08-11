<?php

namespace App\models\customer;

use Illuminate\Database\Eloquent\Model;

class TlCompanyB2b extends Model
{
    public function tlCompanyCustomer()
    {
        return $this->belongsTo('App\models\customer\TlCompanyCustomer');
    }
}
