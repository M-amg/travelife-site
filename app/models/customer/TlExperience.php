<?php

namespace App\models\customer;

use Illuminate\Database\Eloquent\Model;

class TlExperience extends Model
{
    public function tlCustomers(){
        return $this->belongsToMany('App\models\customer\TlCustomer', 'tl_experience_customers', 'tl_experience_id', 'tl_customer_id');
    }
}
