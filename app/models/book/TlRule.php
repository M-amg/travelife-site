<?php

namespace App\models\book;

use Illuminate\Database\Eloquent\Model;

class TlRule extends Model
{
    public function tlBank(){
        return $this->belongsTo('App\models\agency\TlBank');
    }
    public function tlDevis(){
        return $this->belongsToMany('App\models\devis\TlDevis','tl_rule_devis','tl_rule_id','tl_devis_id');
    }
    public function tlFormulaBook(){
        return $this->belongsToMany('App\models\package\formula\TlFormulaBook','tl_rule_formula_books','tl_rule_id','tl_formula_book_id');
    }
    public function fareBooks(){
        return $this->belongsToMany('App\models\bookFlightAPI\FareBook','tl_rule_flight_api_books','tl_rule_id','fare_book_id');
    }
    public function apiHotelBook(){
        return $this->belongsToMany('App\models\bookHotelApi\ApiHotelBook','tl_rule_hotel_api_books','tl_rule_id','hotel_book_id');
    }
    public function tlBill(){
        return $this->belongsTo('App\models\book\TlBill');
    }
    public function tlBookHotel(){
        return $this->belongsToMany('App\models\book\bookHotel\TlBookHotel','tl_rule_hotel_books','tl_rule_id','tl_book_hotel_id');
    }
}
