<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlFormula extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'room' => 'array',
    ];
    public function tlFormulaBooks(){
        return $this->hasMany('App\models\package\formula\TlFormulaBook');
    }
    public function tlTravel(){
        return $this->belongsTo('App\models\package\TlTravel');
    }


}
