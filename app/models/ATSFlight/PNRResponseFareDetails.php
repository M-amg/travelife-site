<?php

namespace App\models\ATSFlight;

class PNRResponseFareDetails
{

    /**
     * @var SharedPrice $BaseFare
     */
    protected $BaseFare = null;

    /**
     * @var SharedPrice $EquivalentBaseFare
     */
    protected $EquivalentBaseFare = null;

    /**
     * @var string $FareCalculation
     */
    protected $FareCalculation = null;

    /**
     * @var SharedPrice $GrandTotal
     */
    protected $GrandTotal = null;

    /**
     * @var SharedPrice $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var SharedPrice $TotalFee
     */
    protected $TotalFee = null;

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
    public function getBaseFare()
    {
      return $this->BaseFare;
    }

    /**
     * @param SharedPrice $BaseFare
     * @return \App\models\ATSFlight\PNRResponseFareDetails
     */
    public function setBaseFare($BaseFare)
    {
      $this->BaseFare = $BaseFare;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentBaseFare()
    {
      return $this->EquivalentBaseFare;
    }

    /**
     * @param SharedPrice $EquivalentBaseFare
     * @return \App\models\ATSFlight\PNRResponseFareDetails
     */
    public function setEquivalentBaseFare($EquivalentBaseFare)
    {
      $this->EquivalentBaseFare = $EquivalentBaseFare;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareCalculation()
    {
      return $this->FareCalculation;
    }

    /**
     * @param string $FareCalculation
     * @return \App\models\ATSFlight\PNRResponseFareDetails
     */
    public function setFareCalculation($FareCalculation)
    {
      $this->FareCalculation = $FareCalculation;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getGrandTotal()
    {
      return $this->GrandTotal;
    }

    /**
     * @param SharedPrice $GrandTotal
     * @return \App\models\ATSFlight\PNRResponseFareDetails
     */
    public function setGrandTotal($GrandTotal)
    {
      $this->GrandTotal = $GrandTotal;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalAmount()
    {
      return $this->TotalAmount;
    }

    /**
     * @param SharedPrice $TotalAmount
     * @return \App\models\ATSFlight\PNRResponseFareDetails
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalFee()
    {
      return $this->TotalFee;
    }

    /**
     * @param SharedPrice $TotalFee
     * @return \App\models\ATSFlight\PNRResponseFareDetails
     */
    public function setTotalFee($TotalFee)
    {
      $this->TotalFee = $TotalFee;
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
     * @return \App\models\ATSFlight\PNRResponseFareDetails
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

}
