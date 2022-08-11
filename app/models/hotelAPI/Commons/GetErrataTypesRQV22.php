<?php

namespace App\models\hotelAPI\Commons;

class GetErrataTypesRQV22 extends GetErrataTypesRQ
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
     * @return \App\models\hotelAPI\Commons\GetErrataTypesRQV22
     */
    public function setExtendedLogin($extendedLogin)
    {
      $this->extendedLogin = $extendedLogin;
      return $this;
    }

}
