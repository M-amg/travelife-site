<?php

namespace App\models\ATSFlight;

class CalculationInfoData
{

    /**
     * @var SharedPrice $CalcMarkup
     */
    protected $CalcMarkup = null;

    /**
     * @var boolean $IsCalcMarkUpInFare
     */
    protected $IsCalcMarkUpInFare = null;

    /**
     * @var string $ModelName
     */
    protected $ModelName = null;

    /**
     * @var float $PriceLevel
     */
    protected $PriceLevel = null;

    /**
     * @var string $RuleName
     */
    protected $RuleName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getCalcMarkup()
    {
      return $this->CalcMarkup;
    }

    /**
     * @param SharedPrice $CalcMarkup
     * @return \App\models\ATSFlight\CalculationInfoData
     */
    public function setCalcMarkup($CalcMarkup)
    {
      $this->CalcMarkup = $CalcMarkup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCalcMarkUpInFare()
    {
      return $this->IsCalcMarkUpInFare;
    }

    /**
     * @param boolean $IsCalcMarkUpInFare
     * @return \App\models\ATSFlight\CalculationInfoData
     */
    public function setIsCalcMarkUpInFare($IsCalcMarkUpInFare)
    {
      $this->IsCalcMarkUpInFare = $IsCalcMarkUpInFare;
      return $this;
    }

    /**
     * @return string
     */
    public function getModelName()
    {
      return $this->ModelName;
    }

    /**
     * @param string $ModelName
     * @return \App\models\ATSFlight\CalculationInfoData
     */
    public function setModelName($ModelName)
    {
      $this->ModelName = $ModelName;
      return $this;
    }

    /**
     * @return float
     */
    public function getPriceLevel()
    {
      return $this->PriceLevel;
    }

    /**
     * @param float $PriceLevel
     * @return \App\models\ATSFlight\CalculationInfoData
     */
    public function setPriceLevel($PriceLevel)
    {
      $this->PriceLevel = $PriceLevel;
      return $this;
    }

    /**
     * @return string
     */
    public function getRuleName()
    {
      return $this->RuleName;
    }

    /**
     * @param string $RuleName
     * @return \App\models\ATSFlight\CalculationInfoData
     */
    public function setRuleName($RuleName)
    {
      $this->RuleName = $RuleName;
      return $this;
    }

}
