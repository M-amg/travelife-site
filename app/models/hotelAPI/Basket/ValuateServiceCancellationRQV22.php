<?php

namespace App\models\hotelAPI\Basket;

class ValuateServiceCancellationRQV22 extends ValuateServiceCancellationRQ
{

    /**
     * @var ExtendedLogin $extendedLogin
     */
    protected $extendedLogin = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ExtendedLogin
     */
    public function getExtendedLogin()
    {
      return $this->extendedLogin;
    }

    /**
     * @param ExtendedLogin $extendedLogin
     * @return \App\models\hotelAPI\Basket\ValuateServiceCancellationRQV22
     */
    public function setExtendedLogin($extendedLogin)
    {
      $this->extendedLogin = $extendedLogin;
      return $this;
    }

}
