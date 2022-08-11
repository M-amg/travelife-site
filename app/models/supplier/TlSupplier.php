<?php

namespace App\models\supplier;

use Illuminate\Database\Eloquent\Model;

class TlSupplier extends Model
{
    public function tlHotels()
    {
        return $this->hasMany('App\models\hotel\TlHotel');
    }

    public function tlContactSuppliers()
    {
        return $this->hasMany('App\models\supplier\TlContactSupplier');
    }

    public function tlBankSuppliers()
    {
        return $this->hasMany('App\models\supplier\TlBankSupplier');
    }

    public function tlFlights()
    {
        return $this->hasMany('App\models\flight\TlFlight');
    }

    public function tlPackages()
    {
        return $this->belongsToMany('App\models\package\TlPackage', 'tl_supplier_packages', 'tl_supplier_id', 'tl_package_id');
    }

    public function tlCompanies()
    {
        return $this->belongsToMany('App\models\package\TlCompany', 'tl_supplier_companies', 'tl_supplier_id', 'tl_company_id');
    }

    public function tlCarriers()
    {
        return $this->belongsToMany('App\models\package\TlCarrier', 'tl_supplier_carriers', 'tl_supplier_id', 'tl_carrier_id');
    }

    public function tlActivites()
    {
        return $this->hasMany('App\models\TlActivite');
    }
}
