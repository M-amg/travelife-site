<?php

namespace App\models\ATSFlight;

class QuoteTax
{

    /**
     * @var TaxOverrideAction $Action
     */
    protected $Action = null;

    /**
     * @var string $AdditionalInfo
     */
    protected $AdditionalInfo = null;

    /**
     * @var int $FareGroup
     */
    protected $FareGroup = null;

    /**
     * @var QuoteFareTypeEnum $FareType
     */
    protected $FareType = null;

    /**
     * @var SharedPrice $Price
     */
    protected $Price = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxOverrideAction
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param TaxOverrideAction $Action
     * @return \App\models\ATSFlight\QuoteTax
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalInfo()
    {
      return $this->AdditionalInfo;
    }

    /**
     * @param string $AdditionalInfo
     * @return \App\models\ATSFlight\QuoteTax
     */
    public function setAdditionalInfo($AdditionalInfo)
    {
      $this->AdditionalInfo = $AdditionalInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getFareGroup()
    {
      return $this->FareGroup;
    }

    /**
     * @param int $FareGroup
     * @return \App\models\ATSFlight\QuoteTax
     */
    public function setFareGroup($FareGroup)
    {
      $this->FareGroup = $FareGroup;
      return $this;
    }

    /**
     * @return QuoteFareTypeEnum
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param QuoteFareTypeEnum $FareType
     * @return \App\models\ATSFlight\QuoteTax
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param SharedPrice $Price
     * @return \App\models\ATSFlight\QuoteTax
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \App\models\ATSFlight\QuoteTax
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
