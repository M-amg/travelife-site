<?php

namespace App\models\ATSFlight;

class RequestWebData
{

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var int $NumberOfFares
     */
    protected $NumberOfFares = null;

    /**
     * @var boolean $ReturnEstimatedResults
     */
    protected $ReturnEstimatedResults = null;

    /**
     * @var DiscountEnum $SpecialDiscounts
     */
    protected $SpecialDiscounts = null;

    /**
     * @var ArrayOfAgent $WebAgents
     */
    protected $WebAgents = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \App\models\ATSFlight\RequestWebData
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
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
     * @return \App\models\ATSFlight\RequestWebData
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfFares()
    {
      return $this->NumberOfFares;
    }

    /**
     * @param int $NumberOfFares
     * @return \App\models\ATSFlight\RequestWebData
     */
    public function setNumberOfFares($NumberOfFares)
    {
      $this->NumberOfFares = $NumberOfFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnEstimatedResults()
    {
      return $this->ReturnEstimatedResults;
    }

    /**
     * @param boolean $ReturnEstimatedResults
     * @return \App\models\ATSFlight\RequestWebData
     */
    public function setReturnEstimatedResults($ReturnEstimatedResults)
    {
      $this->ReturnEstimatedResults = $ReturnEstimatedResults;
      return $this;
    }

    /**
     * @return DiscountEnum
     */
    public function getSpecialDiscounts()
    {
      return $this->SpecialDiscounts;
    }

    /**
     * @param DiscountEnum $SpecialDiscounts
     * @return \App\models\ATSFlight\RequestWebData
     */
    public function setSpecialDiscounts($SpecialDiscounts)
    {
      $this->SpecialDiscounts = $SpecialDiscounts;
      return $this;
    }

    /**
     * @return ArrayOfAgent
     */
    public function getWebAgents()
    {
      return $this->WebAgents;
    }

    /**
     * @param ArrayOfAgent $WebAgents
     * @return \App\models\ATSFlight\RequestWebData
     */
    public function setWebAgents($WebAgents)
    {
      $this->WebAgents = $WebAgents;
      return $this;
    }

}
