<?php

namespace App\models\hotelAPI\Basket;

class GetBasketsRQV22 extends GetBasketsRQV16
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
     * @return \App\models\hotelAPI\Basket\GetBasketsRQV22
     */
    public function setExtendedLogin($extendedLogin)
    {
      $this->extendedLogin = $extendedLogin;
      return $this;
    }

}
