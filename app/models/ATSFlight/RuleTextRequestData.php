<?php

namespace App\models\ATSFlight;

class RuleTextRequestData
{

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var ArrayOfstring $Categories
     */
    protected $Categories = null;

    /**
     * @var RuleTextRequestCharter $Charter
     */
    protected $Charter = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var ArrayOfRuleTextRequestLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var ArrayOfRuleTextRequestPassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var string $RecordSet
     */
    protected $RecordSet = null;

    /**
     * @var RuleTypeEnum $RuleType
     */
    protected $RuleType = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var Agent $WebAgent
     */
    protected $WebAgent = null;

    /**
     * @param SourceModuleEnum $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
    }

    /**
     * @return CRS
     */
    public function getCRSConfig()
    {
      return $this->CRSConfig;
    }

    /**
     * @param CRS $CRSConfig
     * @return \App\models\ATSFlight\RuleTextRequestData
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCategories()
    {
      return $this->Categories;
    }

    /**
     * @param ArrayOfstring $Categories
     * @return \App\models\ATSFlight\RuleTextRequestData
     */
    public function setCategories($Categories)
    {
      $this->Categories = $Categories;
      return $this;
    }

    /**
     * @return RuleTextRequestCharter
     */
    public function getCharter()
    {
      return $this->Charter;
    }

    /**
     * @param RuleTextRequestCharter $Charter
     * @return \App\models\ATSFlight\RuleTextRequestData
     */
    public function setCharter($Charter)
    {
      $this->Charter = $Charter;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \App\models\ATSFlight\RuleTextRequestData
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
      return $this->LanguageCode;
    }

    /**
     * @param string $LanguageCode
     * @return \App\models\ATSFlight\RuleTextRequestData
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return ArrayOfRuleTextRequestLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfRuleTextRequestLeg $Legs
     * @return \App\models\ATSFlight\RuleTextRequestData
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return ArrayOfRuleTextRequestPassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfRuleTextRequestPassenger $Passengers
     * @return \App\models\ATSFlight\RuleTextRequestData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordSet()
    {
      return $this->RecordSet;
    }

    /**
     * @param string $RecordSet
     * @return \App\models\ATSFlight\RuleTextRequestData
     */
    public function setRecordSet($RecordSet)
    {
      $this->RecordSet = $RecordSet;
      return $this;
    }

    /**
     * @return RuleTypeEnum
     */
    public function getRuleType()
    {
      return $this->RuleType;
    }

    /**
     * @param RuleTypeEnum $RuleType
     * @return \App\models\ATSFlight\RuleTextRequestData
     */
    public function setRuleType($RuleType)
    {
      $this->RuleType = $RuleType;
      return $this;
    }

    /**
     * @return SourceModuleEnum
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param SourceModuleEnum $Source
     * @return \App\models\ATSFlight\RuleTextRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return Agent
     */
    public function getWebAgent()
    {
      return $this->WebAgent;
    }

    /**
     * @param Agent $WebAgent
     * @return \App\models\ATSFlight\RuleTextRequestData
     */
    public function setWebAgent($WebAgent)
    {
      $this->WebAgent = $WebAgent;
      return $this;
    }

}
