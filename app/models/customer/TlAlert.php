<?php

namespace App\models\customer;

use Illuminate\Database\Eloquent\Model;

class TlAlert extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = ['title','description'];
    public function tlCustomer(){
        return $this->belongsTo('App\models\customer\TlCustomer');
    }
    public function tlAgent(){
        return $this->belongsTo('App\models\agency\TlAgent');
    }
}
