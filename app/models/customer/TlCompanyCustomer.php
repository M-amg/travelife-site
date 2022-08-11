<?php

namespace App\models\customer;

use Illuminate\Database\Eloquent\Model;

class TlCompanyCustomer extends Model
{
    public function tlCustomers(){
        return $this->hasMany('App\models\customer\TlCustomer');
    }
    public function tlCompanyB2bs(){
        return $this->hasMany('App\models\customer\TlCompanyB2b');
    }
    public function tlSoldes(){
        return $this->hasMany('App\models\customer\TlSolde');
    }
}
