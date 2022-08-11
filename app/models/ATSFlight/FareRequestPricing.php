<?php

namespace App\models\ATSFlight;

class FareRequestPricing
{

    /**
     * @var boolean $AddQSurchargeToFare
     */
    protected $AddQSurchargeToFare = null;

    /**
     * @var boolean $AllowSurcharge
     */
    protected $AllowSurcharge = null;

    /**
     * @var SharedPrice $MaximumFarePrice
     */
    protected $MaximumFarePrice = null;

    /**
     * @var boolean $ReturnQSurcharge
     */
    protected $ReturnQSurcharge = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getAddQSurchargeToFare()
    {
      return $this->AddQSurchargeToFare;
    }

    /**
     * @param boolean $AddQSurchargeToFare
     * @return \App\models\ATSFlight\FareRequestPricing
     */
    public function setAddQSurchargeToFare($AddQSurchargeToFare)
    {
      $this->AddQSurchargeToFare = $AddQSurchargeToFare;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowSurcharge()
    {
      return $this->AllowSurcharge;
    }

    /**
     * @param boolean $AllowSurcharge
     * @return \App\models\ATSFlight\FareRequestPricing
     */
    public function setAllowSurcharge($AllowSurcharge)
    {
      $this->AllowSurcharge = $AllowSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getMaximumFarePrice()
    {
      return $this->MaximumFarePrice;
    }

    /**
     * @param SharedPrice $MaximumFarePrice
     * @return \App\models\ATSFlight\FareRequestPricing
     */
    public function setMaximumFarePrice($MaximumFarePrice)
    {
      $this->MaximumFarePrice = $MaximumFarePrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnQSurcharge()
    {
      return $this->ReturnQSurcharge;
    }

    /**
     * @param boolean $ReturnQSurcharge
     * @return \App\models\ATSFlight\FareRequestPricing
     */
    public function setReturnQSurcharge($ReturnQSurcharge)
    {
      $this->ReturnQSurcharge = $ReturnQSurcharge;
      return $this;
    }

}
