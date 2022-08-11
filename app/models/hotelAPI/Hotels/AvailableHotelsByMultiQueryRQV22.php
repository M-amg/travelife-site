<?php

namespace App\models\hotelAPI\Hotels;

class AvailableHotelsByMultiQueryRQV22 extends AvailableHotelsByMultiQueryRQV21
{

    /**
     * @var CoordinatesRQ[] $coordinates
     */
    protected $coordinates = null;

    /**
     * @var PaxNationalitiesRQ $paxNationalities
     */
    protected $paxNationalities = null;

    /**
     * @var string[] $rateCode
     */
    protected $rateCode = null;

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
     * @return CoordinatesRQ[]
     */
    public function getCoordinates()
    {
      return $this->coordinates;
    }

    /**
     * @param CoordinatesRQ[] $coordinates
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByMultiQueryRQV22
     */
    public function setCoordinates(array $coordinates = null)
    {
      $this->coordinates = $coordinates;
      return $this;
    }

    /**
     * @return PaxNationalitiesRQ
     */
    public function getPaxNationalities()
    {
      return $this->paxNationalities;
    }

    /**
     * @param PaxNationalitiesRQ $paxNationalities
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByMultiQueryRQV22
     */
    public function setPaxNationalities($paxNationalities)
    {
      $this->paxNationalities = $paxNationalities;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getRateCode()
    {
      return $this->rateCode;
    }

    /**
     * @param string[] $rateCode
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsByMultiQueryRQV22
     */
    public function setRateCode(array $rateCode = null)
    {
      $this->rateCode = $rateCode;
      return $this;
    }

}
