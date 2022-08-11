<?php

namespace App\models\hotelAPI\Hotels;

class GetEstablishmentsByNameRQV22 extends GetEstablishmentsByNameRQ
{

    /**
     * @var ExtendedLogin $extendedLogin
     */
    protected $extendedLogin = null;

    /**
     * @param int $fromRow
     * @param int $numRows
     */
    public function __construct($fromRow, $numRows)
    {
      parent::__construct($fromRow, $numRows);
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
     * @return \App\models\hotelAPI\Hotels\GetEstablishmentsByNameRQV22
     */
    public function setExtendedLogin($extendedLogin)
    {
      $this->extendedLogin = $extendedLogin;
      return $this;
    }

}
