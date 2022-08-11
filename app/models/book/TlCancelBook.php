<?php

namespace App\models\book;

use Illuminate\Database\Eloquent\Model;

class TlCancelBook extends Model
{
    public function tlCommandLine(){
        return $this->belongsTo('App\models\book\TlCommandLine');
    }
}
