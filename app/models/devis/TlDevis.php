<?php

namespace App\models\devis;

use Illuminate\Database\Eloquent\Model;

class TlDevis extends Model
{
    public function tlAgent()
    {
        return $this->belongsTo('App\models\agency\TlAgent');
    }

    public function tlCustomer()
    {
        return $this->belongsTo('App\models\customer\TlCustomer');
    }
    public function tlDevisLine()
    {
        return $this->hasMany('App\models\devis\TlDevisLine');
    }
    public function tlRules(){
        return $this->belongsToMany('App\models\book\TlRule','tl_rule_devis','tl_devis_id','tl_rule_id');
    }
}
