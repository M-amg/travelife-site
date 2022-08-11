<?php

namespace App\models\book\bookPackage;

use Illuminate\Database\Eloquent\Model;

class TlBookPackage extends Model
{
    public function tlCustomer(){
        return $this->belongsTo('App\models\customer\TlCustomer');
    }
    public function tlTravel(){
        return $this->belongsTo('App\models\package\TlTravel');
    }
    public function tlAgent(){
        return $this->belongsTo('App\models\agency\TlAgent');
    }
    public function tlBookPackageLodgingPassengers(){
        return $this->hasMany('App\models\book\bookPackage\TlBookPackageLodgingPassenger');
    }
    public function tlPassengers(){
        return $this->belongsToMany('App\models\book\TlPassenger', 'tl_book_package_passengers', 'tl_book_package_id', 'tl_passenger_id');
    }
    public function tlBenefits(){
        return $this->belongsToMany('App\models\book\TlBenefit', 'tl_book_package_benefits', 'tl_book_package_id', 'tl_benefit_id');
    }
}
