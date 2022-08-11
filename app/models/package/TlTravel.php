<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlTravel extends Model
{
    public function tlCity(){
        return $this->belongsTo('App\models\TlCity');
    }
    public function tlPackage(){
        return $this->belongsTo('App\models\package\TlPackage');
    }
    public function tlStays(){
        return $this->hasMany('App\models\package\TlStay');
    }
    public function tlFlight(){
        return $this->belongsTo('App\models\flight\TlFlight');
    }
    public function tlBookPackages(){
        return $this->hasMany('App\models\book\bookPackage\TlBookPackage');
    }
    public function tlFormulaBooks(){
        return $this->hasMany('App\models\package\formula\TlFormulaBook');
    }
    public function tlFormulas(){
        return $this->belongsToMany('App\models\package\TlFormula', 'tl_formula_travels', 'tl_travel_id', 'tl_formula_id');
    }
    public function tlAllotmentPackages(){
        return $this->hasMany('App\models\package\TlAllotmentPackage');
    }
}
