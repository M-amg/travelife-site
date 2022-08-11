<?php

namespace App\models\hotelAPI\Hotels;

class GetBoardTypesV22RQ extends GetBoardTypesV2RQ
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
     * @return \App\models\hotelAPI\Hotels\GetBoardTypesV22RQ
     */
    public function setExtendedLogin($extendedLogin)
    {
      $this->extendedLogin = $extendedLogin;
      return $this;
    }

}
