<?php

namespace App\models\ATSFlight;

class SurchargeData
{

    /**
     * @var SharedPrice $Amount
     */
    protected $Amount = null;

    /**
     * @var SharedPrice $EquivalentAmount
     */
    protected $EquivalentAmount = null;

    /**
     * @var SharedPrice $EquivalentMinimumSurcharge
     */
    protected $EquivalentMinimumSurcharge = null;

    /**
     * @var boolean $IsForEachPassenger
     */
    protected $IsForEachPassenger = null;

    /**
     * @var boolean $IsForEachSegment
     */
    protected $IsForEachSegment = null;

    /**
     * @var SharedPrice $MinimumSurcharge
     */
    protected $MinimumSurcharge = null;

    /**
     * @var string $PercentageSurcharge
     */
    protected $PercentageSurcharge = null;

    /**
     * @var SurchargeContainsEnum $PercentageSurchargeContains
     */
    protected $PercentageSurchargeContains = null;

    /**
     * @var SharedPrice $PercentageSurchargeMinimum
     */
    protected $PercentageSurchargeMinimum = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param SharedPrice $Amount
     * @return \App\models\ATSFlight\SurchargeData
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentAmount()
    {
      return $this->EquivalentAmount;
    }

    /**
     * @param SharedPrice $EquivalentAmount
     * @return \App\models\ATSFlight\SurchargeData
     */
    public function setEquivalentAmount($EquivalentAmount)
    {
      $this->EquivalentAmount = $EquivalentAmount;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentMinimumSurcharge()
    {
      return $this->EquivalentMinimumSurcharge;
    }

    /**
     * @param SharedPrice $EquivalentMinimumSurcharge
     * @return \App\models\ATSFlight\SurchargeData
     */
    public function setEquivalentMinimumSurcharge($EquivalentMinimumSurcharge)
    {
      $this->EquivalentMinimumSurcharge = $EquivalentMinimumSurcharge;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsForEachPassenger()
    {
      return $this->IsForEachPassenger;
    }

    /**
     * @param boolean $IsForEachPassenger
     * @return \App\models\ATSFlight\SurchargeData
     */
    public function setIsForEachPassenger($IsForEachPassenger)
    {
      $this->IsForEachPassenger = $IsForEachPassenger;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsForEachSegment()
    {
      return $this->IsForEachSegment;
    }

    /**
     * @param boolean $IsForEachSegment
     * @return \App\models\ATSFlight\SurchargeData
     */
    public function setIsForEachSegment($IsForEachSegment)
    {
      $this->IsForEachSegment = $IsForEachSegment;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getMinimumSurcharge()
    {
      return $this->MinimumSurcharge;
    }

    /**
     * @param SharedPrice $MinimumSurcharge
     * @return \App\models\ATSFlight\SurchargeData
     */
    public function setMinimumSurcharge($MinimumSurcharge)
    {
      $this->MinimumSurcharge = $MinimumSurcharge;
      return $this;
    }

    /**
     * @return string
     */
    public function getPercentageSurcharge()
    {
      return $this->PercentageSurcharge;
    }

    /**
     * @param string $PercentageSurcharge
     * @return \App\models\ATSFlight\SurchargeData
     */
    public function setPercentageSurcharge($PercentageSurcharge)
    {
      $this->PercentageSurcharge = $PercentageSurcharge;
      return $this;
    }

    /**
     * @return SurchargeContainsEnum
     */
    public function getPercentageSurchargeContains()
    {
      return $this->PercentageSurchargeContains;
    }

    /**
     * @param SurchargeContainsEnum $PercentageSurchargeContains
     * @return \App\models\ATSFlight\SurchargeData
     */
    public function setPercentageSurchargeContains($PercentageSurchargeContains)
    {
      $this->PercentageSurchargeContains = $PercentageSurchargeContains;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPercentageSurchargeMinimum()
    {
      return $this->PercentageSurchargeMinimum;
    }

    /**
     * @param SharedPrice $PercentageSurchargeMinimum
     * @return \App\models\ATSFlight\SurchargeData
     */
    public function setPercentageSurchargeMinimum($PercentageSurchargeMinimum)
    {
      $this->PercentageSurchargeMinimum = $PercentageSurchargeMinimum;
      return $this;
    }

}
