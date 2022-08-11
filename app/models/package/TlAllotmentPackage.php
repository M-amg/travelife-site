<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlAllotmentPackage extends Model
{
    public function tlFormulas()
    {
        return $this->belongsToMany('App\models\package\TlFormula', 'tl_allotment_package_formulas', 'tl_allotment_package_id', 'tl_formula_id');
    }

    public function tlTravel()
    {
        return $this->belongsTo('App\models\package\TlTravel');
    }

    public function tlPackageHotelInfo()
    {
        return $this->belongsTo('App\models\package\TlPackageHotelInfo');
    }
}
