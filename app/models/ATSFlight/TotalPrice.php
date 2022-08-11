<?php

namespace App\models\ATSFlight;

class TotalPrice
{

    /**
     * @var SharedPrice $EquivalentTotalFlightPrice
     */
    protected $EquivalentTotalFlightPrice = null;

    /**
     * @var SharedPrice $EquivalentTotalPassengerPrice
     */
    protected $EquivalentTotalPassengerPrice = null;

    /**
     * @var SharedPrice $EquivalentTotalSurcharge
     */
    protected $EquivalentTotalSurcharge = null;

    /**
     * @var SharedPrice $EquivalentTotalTax
     */
    protected $EquivalentTotalTax = null;

    /**
     * @var SharedPrice $TotalFlightPrice
     */
    protected $TotalFlightPrice = null;

    /**
     * @var SharedPrice $TotalPassengerPrice
     */
    protected $TotalPassengerPrice = null;

    /**
     * @var SharedPrice $TotalSurcharge
     */
    protected $TotalSurcharge = null;

    /**
     * @var SharedPrice $TotalTax
     */
    protected $TotalTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTotalFlightPrice()
    {
      return $this->EquivalentTotalFlightPrice;
    }

    /**
     * @param SharedPrice $EquivalentTotalFlightPrice
     * @return \App\models\ATSFlight\TotalPrice
     */
    public function setEquivalentTotalFlightPrice($EquivalentTotalFlightPrice)
    {
      $this->EquivalentTotalFlightPrice = $EquivalentTotalFlightPrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTotalPassengerPrice()
    {
      return $this->EquivalentTotalPassengerPrice;
    }

    /**
     * @param SharedPrice $EquivalentTotalPassengerPrice
     * @return \App\models\ATSFlight\TotalPrice
     */
    public function setEquivalentTotalPassengerPrice($EquivalentTotalPassengerPrice)
    {
      $this->EquivalentTotalPassengerPrice = $EquivalentTotalPassengerPrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTotalSurcharge()
    {
      return $this->EquivalentTotalSurcharge;
    }

    /**
     * @param SharedPrice $EquivalentTotalSurcharge
     * @return \App\models\ATSFlight\TotalPrice
     */
    public function setEquivalentTotalSurcharge($EquivalentTotalSurcharge)
    {
      $this->EquivalentTotalSurcharge = $EquivalentTotalSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTotalTax()
    {
      return $this->EquivalentTotalTax;
    }

    /**
     * @param SharedPrice $EquivalentTotalTax
     * @return \App\models\ATSFlight\TotalPrice
     */
    public function setEquivalentTotalTax($EquivalentTotalTax)
    {
      $this->EquivalentTotalTax = $EquivalentTotalTax;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalFlightPrice()
    {
      return $this->TotalFlightPrice;
    }

    /**
     * @param SharedPrice $TotalFlightPrice
     * @return \App\models\ATSFlight\TotalPrice
     */
    public function setTotalFlightPrice($TotalFlightPrice)
    {
      $this->TotalFlightPrice = $TotalFlightPrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalPassengerPrice()
    {
      return $this->TotalPassengerPrice;
    }

    /**
     * @param SharedPrice $TotalPassengerPrice
     * @return \App\models\ATSFlight\TotalPrice
     */
    public function setTotalPassengerPrice($TotalPassengerPrice)
    {
      $this->TotalPassengerPrice = $TotalPassengerPrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalSurcharge()
    {
      return $this->TotalSurcharge;
    }

    /**
     * @param SharedPrice $TotalSurcharge
     * @return \App\models\ATSFlight\TotalPrice
     */
    public function setTotalSurcharge($TotalSurcharge)
    {
      $this->TotalSurcharge = $TotalSurcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalTax()
    {
      return $this->TotalTax;
    }

    /**
     * @param SharedPrice $TotalTax
     * @return \App\models\ATSFlight\TotalPrice
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

}
