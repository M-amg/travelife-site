<?php

namespace App\models\hotelAPI\Hotels;

class EstablishmentDataRQV22 extends EstablishmentDataRQV2
{

    /**
     * @var ExtendedLogin $extendedLogin
     */
    protected $extendedLogin = null;

    /**
     * @param boolean $onlySelectedLanguage
     */
    public function __construct($onlySelectedLanguage)
    {
      parent::__construct($onlySelectedLanguage);
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRQV22
     */
    public function setExtendedLogin($extendedLogin)
    {
      $this->extendedLogin = $extendedLogin;
      return $this;
    }

}
