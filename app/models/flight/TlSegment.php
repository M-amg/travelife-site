<?php

namespace App\models\flight;

use Illuminate\Database\Eloquent\Model;

class TlSegment extends Model
{
    public function tlCarrier(){
        return $this->belongsTo('App\models\flight\TlCarrier');
    }
    public function tlLag(){
        return $this->belongsTo('App\models\flight\TlLag');
    }
    public function arrival(){
        return $this->belongsTo('App\models\TlCity','arrival');
    }
    public function departure()
    {
        return $this->belongsTo('App\models\TlCity', 'departure');
    }
}
