<?php

namespace App\models\hotelAPI\Hotels;

class AvailableHotelsByMultiQueryRQV21 extends AvailableHotelsByMultiQueryRQV16
{

    /**
     * @var ExtendedLogin $extendedLogin
     */
    protected $extendedLogin = null;

    /**
     * @param float $fromPrice
     * @param int $fromRow
     * @param boolean $includeEstablishmentData
     * @param int $maxRoomCombinationsPerEstablishment
     * @param int $numRows
     * @param boolean $onlyOnline
     * @param float $toPrice
     */
    public function __construct($fromPrice, $fromRow, $includeEstablishmentData, $maxRoomCombinationsPerEstablishment, $numRows, $onlyOnline, $toPrice)
    {
      parent::__construct($fromPrice, $fromRow, $includeEstablishmentData, $maxRoomCombinationsPerEstablishment, $numRows, $onlyOnline, $toPrice);
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByMultiQueryRQV21
     */
    public function setExtendedLogin($extendedLogin)
    {
      $this->extendedLogin = $extendedLogin;
      return $this;
    }

}
