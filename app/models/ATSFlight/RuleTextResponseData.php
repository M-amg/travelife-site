<?php

namespace App\models\ATSFlight;

class RuleTextResponseData
{

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var string $RecordSet
     */
    protected $RecordSet = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var ArrayOfEnhancedRules $RuleItems
     */
    protected $RuleItems = null;

    /**
     * @var ArrayOfstring $RuleTextCollection
     */
    protected $RuleTextCollection = null;

    /**
     * @var ArrayOfRuleTextResponseRule $Rules
     */
    protected $Rules = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \App\models\ATSFlight\RuleTextResponseData
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return \App\models\ATSFlight\RuleTextResponseData
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return ModuleResponseData
     */
    public function getModuleInfo()
    {
      return $this->ModuleInfo;
    }

    /**
     * @param ModuleResponseData $ModuleInfo
     * @return \App\models\ATSFlight\RuleTextResponseData
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
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
     * @return \App\models\ATSFlight\RuleTextResponseData
     */
    public function setRecordSet($RecordSet)
    {
      $this->RecordSet = $RecordSet;
      return $this;
    }

    /**
     * @return ResponseInfoDetails
     */
    public function getResponseInfo()
    {
      return $this->ResponseInfo;
    }

    /**
     * @param ResponseInfoDetails $ResponseInfo
     * @return \App\models\ATSFlight\RuleTextResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

    /**
     * @return ArrayOfEnhancedRules
     */
    public function getRuleItems()
    {
      return $this->RuleItems;
    }

    /**
     * @param ArrayOfEnhancedRules $RuleItems
     * @return \App\models\ATSFlight\RuleTextResponseData
     */
    public function setRuleItems($RuleItems)
    {
      $this->RuleItems = $RuleItems;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getRuleTextCollection()
    {
      return $this->RuleTextCollection;
    }

    /**
     * @param ArrayOfstring $RuleTextCollection
     * @return \App\models\ATSFlight\RuleTextResponseData
     */
    public function setRuleTextCollection($RuleTextCollection)
    {
      $this->RuleTextCollection = $RuleTextCollection;
      return $this;
    }

    /**
     * @return ArrayOfRuleTextResponseRule
     */
    public function getRules()
    {
      return $this->Rules;
    }

    /**
     * @param ArrayOfRuleTextResponseRule $Rules
     * @return \App\models\ATSFlight\RuleTextResponseData
     */
    public function setRules($Rules)
    {
      $this->Rules = $Rules;
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
     * @return \App\models\ATSFlight\RuleTextResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
