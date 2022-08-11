<?php

namespace App\models\ATSFlight;

class SeatMapAirSeatData
{

    /**
     * @var SeatMapAvailabilityData $AvailabilityData
     */
    protected $AvailabilityData = null;

    /**
     * @var ArrayOfSeatMapCharacteristicData $Characteristics
     */
    protected $Characteristics = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var ArrayOfSeatPriceIDDATA $PriceIDs
     */
    protected $PriceIDs = null;

    /**
     * @var int $PriceIndex
     */
    protected $PriceIndex = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SeatMapAvailabilityData
     */
    public function getAvailabilityData()
    {
      return $this->AvailabilityData;
    }

    /**
     * @param SeatMapAvailabilityData $AvailabilityData
     * @return \App\models\ATSFlight\SeatMapAirSeatData
     */
    public function setAvailabilityData($AvailabilityData)
    {
      $this->AvailabilityData = $AvailabilityData;
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
     * @return \App\models\ATSFlight\SeatMapAirSeatData
     */
    public function setCharacteristics($Characteristics)
    {
      $this->Characteristics = $Characteristics;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \App\models\ATSFlight\SeatMapAirSeatData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return ArrayOfSeatPriceIDDATA
     */
    public function getPriceIDs()
    {
      return $this->PriceIDs;
    }

    /**
     * @param ArrayOfSeatPriceIDDATA $PriceIDs
     * @return \App\models\ATSFlight\SeatMapAirSeatData
     */
    public function setPriceIDs($PriceIDs)
    {
      $this->PriceIDs = $PriceIDs;
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
     * @return \App\models\ATSFlight\SeatMapAirSeatData
     */
    public function setPriceIndex($PriceIndex)
    {
      $this->PriceIndex = $PriceIndex;
      return $this;
    }

}
