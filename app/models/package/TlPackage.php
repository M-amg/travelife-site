<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlPackage extends Model
{
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = ['title', 'description', 'shortDescription', 'inclus', 'noninclus'];


    public function tlPackageCancellations(){
        return $this->hasMany('App\models\package\TlPackageCancellation');
    }
    public function tlPoliticAgeEnfantPackages()
    {
        return $this->hasMany('App\models\package\TlPoliticAgeEnfantPackage');
    }
    public function tlPackagePhotos(){
        return $this->hasMany('App\models\package\TlPackagePhoto');
    }
    public function tlPrograms(){
        return $this->hasMany('App\models\package\TlProgram');
    }
    public function tlCategory(){
        return $this->belongsTo('App\models\package\TlCategory');
    }
    public function tlDestinations(){
        return $this->belongsToMany('App\models\TlCity', 'tl_destinations', 'tl_package_id', 'tl_city_id');
    }
    public function tlCity(){
        return $this->belongsTo('App\models\TlCity');
    }
    public function tlTravels(){
        return $this->hasMany('App\models\package\TlTravel');
    }
    public function tlFormulas(){
        return $this->hasMany('App\models\package\TlFormula');
    }
    public function tlPackageType(){
        return $this->belongsTo('App\models\package\TlPackageType');
    }
    public function tlFlight(){
        return $this->belongsTo('App\models\flight\TlFlight');
    }
    public function tlThematics(){
        return $this->belongsToMany('App\models\package\TlThematic', 'tl_thematic_packages', 'tl_package_id', 'tl_thematic_id');
    }
    public function tlBenefits(){
        return $this->belongsToMany('App\models\package\TlBenefit', 'tl_benefit_packages', 'tl_package_id', 'tl_benefit_id');
    }

    public function tlSuppliers(){
        return $this->belongsToMany('App\models\supplier\TlSupplier', 'tl_supplier_packages', 'tl_package_id', 'tl_supplier_id');
    }
    public function tlPackageHotelInfo(){
        return $this->hasMany('App\models\package\TlPackageHotelInfo');
    }

}
