<?php

namespace App\models\ATSFlight;

class EnhancedRules
{

    /**
     * @var string $BrandDecription
     */
    protected $BrandDecription = null;

    /**
     * @var string $BrandDescription
     */
    protected $BrandDescription = null;

    /**
     * @var string $BrandName
     */
    protected $BrandName = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $FareBase
     */
    protected $FareBase = null;

    /**
     * @var string $FareType
     */
    protected $FareType = null;

    /**
     * @var string $FareTypeCode
     */
    protected $FareTypeCode = null;

    /**
     * @var string $FareTypeInfo
     */
    protected $FareTypeInfo = null;

    /**
     * @var string $PassengerTypeCode
     */
    protected $PassengerTypeCode = null;

    /**
     * @var ArrayOfRuleChapter $RuleChapters
     */
    protected $RuleChapters = null;

    /**
     * @var ArrayOfint $SegmentNumbers
     */
    protected $SegmentNumbers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBrandDecription()
    {
      return $this->BrandDecription;
    }

    /**
     * @param string $BrandDecription
     * @return \App\models\ATSFlight\EnhancedRules
     */
    public function setBrandDecription($BrandDecription)
    {
      $this->BrandDecription = $BrandDecription;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandDescription()
    {
      return $this->BrandDescription;
    }

    /**
     * @param string $BrandDescription
     * @return \App\models\ATSFlight\EnhancedRules
     */
    public function setBrandDescription($BrandDescription)
    {
      $this->BrandDescription = $BrandDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandName()
    {
      return $this->BrandName;
    }

    /**
     * @param string $BrandName
     * @return \App\models\ATSFlight\EnhancedRules
     */
    public function setBrandName($BrandName)
    {
      $this->BrandName = $BrandName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return \App\models\ATSFlight\EnhancedRules
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBase()
    {
      return $this->FareBase;
    }

    /**
     * @param string $FareBase
     * @return \App\models\ATSFlight\EnhancedRules
     */
    public function setFareBase($FareBase)
    {
      $this->FareBase = $FareBase;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param string $FareType
     * @return \App\models\ATSFlight\EnhancedRules
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareTypeCode()
    {
      return $this->FareTypeCode;
    }

    /**
     * @param string $FareTypeCode
     * @return \App\models\ATSFlight\EnhancedRules
     */
    public function setFareTypeCode($FareTypeCode)
    {
      $this->FareTypeCode = $FareTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareTypeInfo()
    {
      return $this->FareTypeInfo;
    }

    /**
     * @param string $FareTypeInfo
     * @return \App\models\ATSFlight\EnhancedRules
     */
    public function setFareTypeInfo($FareTypeInfo)
    {
      $this->FareTypeInfo = $FareTypeInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassengerTypeCode()
    {
      return $this->PassengerTypeCode;
    }

    /**
     * @param string $PassengerTypeCode
     * @return \App\models\ATSFlight\EnhancedRules
     */
    public function setPassengerTypeCode($PassengerTypeCode)
    {
      $this->PassengerTypeCode = $PassengerTypeCode;
      return $this;
    }

    /**
     * @return ArrayOfRuleChapter
     */
    public function getRuleChapters()
    {
      return $this->RuleChapters;
    }

    /**
     * @param ArrayOfRuleChapter $RuleChapters
     * @return \App\models\ATSFlight\EnhancedRules
     */
    public function setRuleChapters($RuleChapters)
    {
      $this->RuleChapters = $RuleChapters;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegmentNumbers()
    {
      return $this->SegmentNumbers;
    }

    /**
     * @param ArrayOfint $SegmentNumbers
     * @return \App\models\ATSFlight\EnhancedRules
     */
    public function setSegmentNumbers($SegmentNumbers)
    {
      $this->SegmentNumbers = $SegmentNumbers;
      return $this;
    }

}
