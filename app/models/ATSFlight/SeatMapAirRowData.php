<?php

namespace App\models\ATSFlight;

class SeatMapAirRowData
{

    /**
     * @var ArrayOfSeatMapAirSeatData $AirSeats
     */
    protected $AirSeats = null;

    /**
     * @var ArrayOfSeatMapCharacteristicData $Characteristics
     */
    protected $Characteristics = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var int $PriceIndex
     */
    protected $PriceIndex = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfSeatMapAirSeatData
     */
    public function getAirSeats()
    {
      return $this->AirSeats;
    }

    /**
     * @param ArrayOfSeatMapAirSeatData $AirSeats
     * @return \App\models\ATSFlight\SeatMapAirRowData
     */
    public function setAirSeats($AirSeats)
    {
      $this->AirSeats = $AirSeats;
      return $this;
    }

    /**
     * @return ArrayOfSeatMapCharacteristicData
     */
    public function getCharacteristics()
    {
      return $this->Characteristics;
    }

    /**
     * @param ArrayOfSeatMapCharacteristicData $Characteristics
     * @return \App\models\ATSFlight\SeatMapAirRowData
     */
    public function setCharacteristics($Characteristics)
    {
      $this->Characteristics = $Characteristics;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \App\models\ATSFlight\SeatMapAirRowData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriceIndex()
    {
      return $this->PriceIndex;
    }

    /**
     * @param int $PriceIndex
     * @return \App\models\ATSFlight\SeatMapAirRowData
     */
    public function setPriceIndex($PriceIndex)
    {
      $this->PriceIndex = $PriceIndex;
      return $this;
    }

}
