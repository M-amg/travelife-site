<?php

namespace App\models\package;

use Illuminate\Database\Eloquent\Model;

class TlBenefit extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $timestamps = false;
    public $translatedAttributes = ['title','description'];
    public function tlPackages(){
        return $this->belongsToMany('App\models\package\TlPackage', 'tl_benefit_packages', 'tl_benefit_id', 'tl_package_id');
    }
    public function tlBookPackages(){
        return $this->belongsToMany('App\models\book\bookPackage\TlBookPackage', 'tl_book_package_benefits', 'tl_benefit_id', 'tl_book_package_id');
    }
    public function tlBenefitType(){
        return $this->belongsTo('App\models\package\TlBenefitType');
    }
    public function tlBenefitPhotos(){
        return $this->hasMany('App\models\package\TlBenefitPhoto');
    }
}
