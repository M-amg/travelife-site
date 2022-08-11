<?php

namespace App\models\package\formula;

use Illuminate\Database\Eloquent\Model;

class TlFormulaBook extends Model
{
    public function tlCustomer(){
        return $this->belongsTo('App\models\customer\TlCustomer');
    }

    public function tlTravel(){
        return $this->belongsTo('App\models\package\TlTravel');
    }

    public function tlFormula(){
        return $this->belongsTo('App\models\package\TlFormula');
    }

    public function tlPayment(){
        return $this->belongsTo('App\models\TlPayment');
    }

    public function tlPassengers(){
        return $this->belongsToMany('App\models\book\TlPassenger')
            ->withPivot('firstName', 'lastName', 'dob', 'type', 'passport', 'gender', 'civility')
            ->withTimestamps();

    }

    public function tlFormulaRoomBooks(){
        return $this->hasMany('App\models\package\formula\TlFormulaRoomBook');
    }

    public function tlFormulaBenefitBooks(){
        return $this->hasMany('App\models\package\formula\TlFormulaBenefitBook');
    }
    public function tlRules(){
        return $this->belongsToMany('App\models\book\TlRule','tl_rule_formula_books','tl_formula_book_id','tl_rule_id');
    }
    public function tlAgent(){
        return $this->belongsTo('App\models\agency\TlAgent');
    }
}
