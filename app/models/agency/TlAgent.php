<?php

namespace App\models\agency;

use Illuminate\Foundation\Auth\User as Authenticatable;

class TlAgent extends Authenticatable
{
    protected $guard = 'agent';

    public function tlBranch()
    {
        return $this->belongsTo('App\models\agency\TlBranch');
    }

    public function tlCity()
    {
        return $this->belongsTo('App\models\TlCity');
    }

    public function permissions()
    {
        return $this->belongsToMany('App\models\agency\TlPermission', 'tl_agent_permissions', 'tl_agent_id', 'tl_permission_id');
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

    public function tlCustomers()
    {
        return $this->hasMany('App\models\customer\TlCustomer');
    }

    public function tlAlerts()
    {
        return $this->hasMany('App\models\customer\TlAlert');
    }

    public function tlDevis()
    {
        return $this->hasMany('App\models\manage\TlDevis');
    }
}
