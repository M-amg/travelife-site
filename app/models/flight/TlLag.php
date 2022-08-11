<?php

namespace App\models\flight;

use Illuminate\Database\Eloquent\Model;

class TlLag extends Model
{
    public function tlFlight(){
        return $this->belongsTo('App\models\flight\TlFlight');
    }
    public function tlSegments(){
        return $this->hasMany('App\models\flight\TlSegment');
    }
    public function arrival(){
        return $this->belongsTo('App\models\TlCity','arrival');
    }
    public function departure(){
        return $this->belongsTo('App\models\TlCity','departure');
    }
}
