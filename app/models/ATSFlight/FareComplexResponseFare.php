<?php

namespace App\models\ATSFlight;

class FareComplexResponseFare
{

    /**
     * @var ArrayOfFareComplexResponseFareItem $FareItems
     */
    protected $FareItems = null;

    /**
     * @var TotalPrice $TotalPriceDetail
     */
    protected $TotalPriceDetail = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfFareComplexResponseFareItem
     */
    public function getFareItems()
    {
      return $this->FareItems;
    }

    /**
     * @param ArrayOfFareComplexResponseFareItem $FareItems
     * @return \App\models\ATSFlight\FareComplexResponseFare
     */
    public function setFareItems($FareItems)
    {
      $this->FareItems = $FareItems;
      return $this;
    }

    /**
     * @return TotalPrice
     */
    public function getTotalPriceDetail()
    {
      return $this->TotalPriceDetail;
    }

    /**
     * @param TotalPrice $TotalPriceDetail
     * @return \App\models\ATSFlight\FareComplexResponseFare
     */
    public function setTotalPriceDetail($TotalPriceDetail)
    {
      $this->TotalPriceDetail = $TotalPriceDetail;
      return $this;
    }

}
