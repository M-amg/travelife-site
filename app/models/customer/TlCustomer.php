<?php

namespace App\models\customer;

use Illuminate\Foundation\Auth\User as Authenticatable;

class TlCustomer extends Authenticatable
{
    protected $guard = 'customer';

    public function tlCompanyCustomer()
    {
        return $this->belongsTo('App\models\customer\TlCompanyCustomer');
    }

    public function tlAgent()
    {
        return $this->belongsTo('App\models\agency\TlAgent');
    }

    public function tlCity()
    {
        return $this->belongsTo('App\models\TlCity');
    }

    public function tlAlerts()
    {
        return $this->hasMany('App\models\customer\TlAlert');
    }

    public function tlAttachedPieces()
    {
        return $this->hasMany('App\models\customer\TlAttachedPiece');
    }

    public function tlVouchers()
    {
        return $this->hasMany('App\models\book\TlVoucher');
    }

    public function tlBills()
    {
        return $this->hasMany('App\models\book\TlBill');
    }

    public function tlBookPackages()
    {
        return $this->hasMany('App\models\book\bookPackage\TlBookPackage');
    }

    public function tlBookHotels()
    {
        return $this->hasMany('App\models\book\bookHotel\TlBookHotel');
    }

    public function tlExperiences()
    {
        return $this->belongsToMany('App\models\customer\TlExperience', 'tl_experience_customers', 'tl_customer_id', 'tl_experience_id');
    }

    public function tlCommandLines()
    {
        return $this->hasMany('App\models\book\TlCommandLine');
    }

    public function tlDevis()
    {
        return $this->hasMany('App\models\manage\TlDevis');
    }
}
