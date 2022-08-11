<?php

namespace App\models\hotelAPI\Hotels;

class AvailableHotelsByMultiQueryRQV16 extends AvailableHotelsByMultiQueryRQ
{

    /**
     * @var string[] $districtCode
     */
    protected $districtCode = null;

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
     * @return string[]
     */
    public function getDistrictCode()
    {
      return $this->districtCode;
    }

    /**
     * @param string[] $districtCode
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByMultiQueryRQV16
     */
    public function setDistrictCode(array $districtCode = null)
    {
      $this->districtCode = $districtCode;
      return $this;
    }

}
