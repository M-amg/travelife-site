<?php

namespace App\models\hotelAPI\Hotels;

class ValuationRQV21 extends ValuationRQV20
{

    /**
     * @var ExtendedLogin $extendedLogin
     */
    protected $extendedLogin = null;

    /**
     * @param boolean $onlyOnline
     */
    public function __construct($onlyOnline)
    {
      parent::__construct($onlyOnline);
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
     * @return \App\models\hotelAPI\Hotels\ValuationRQV21
     */
    public function setExtendedLogin($extendedLogin)
    {
      $this->extendedLogin = $extendedLogin;
      return $this;
    }

}
