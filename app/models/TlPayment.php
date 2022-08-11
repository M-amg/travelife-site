<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class TlPayment extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['titre','description'];

    public function tlModules(){
        return $this->belongsToMany('App\models\agency\TlModule', 'tl_module_payments', 'tl_module_id', 'tl_payment_id');
    }
}
