<?php

namespace App\models\ATSFlight;

class SeatMapSurchargeDetail
{

    /**
     * @var int $PriceIndex
     */
    protected $PriceIndex = null;

    /**
     * @var SurchargeData $SeatSurcharge
     */
    protected $SeatSurcharge = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\SeatMapSurchargeDetail
     */
    public function setPriceIndex($PriceIndex)
    {
      $this->PriceIndex = $PriceIndex;
      return $this;
    }

    /**
     * @return SurchargeData
     */
    public function getSeatSurcharge()
    {
      return $this->SeatSurcharge;
    }

    /**
     * @param SurchargeData $SeatSurcharge
     * @return \App\models\ATSFlight\SeatMapSurchargeDetail
     */
    public function setSeatSurcharge($SeatSurcharge)
    {
      $this->SeatSurcharge = $SeatSurcharge;
      return $this;
    }

}
