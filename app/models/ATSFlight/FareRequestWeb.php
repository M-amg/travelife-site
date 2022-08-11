<?php

namespace App\models\ATSFlight;

class FareRequestWeb
{

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var int $NumberOfWebFares
     */
    protected $NumberOfWebFares = null;

    /**
     * @var boolean $ReturnEstimatedResults
     */
    protected $ReturnEstimatedResults = null;

    /**
     * @var RoutingTypeEnum $RoutingType
     */
    protected $RoutingType = null;

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
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \App\models\ATSFlight\FareRequestWeb
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfWebFares()
    {
      return $this->NumberOfWebFares;
    }

    /**
     * @param int $NumberOfWebFares
     * @return \App\models\ATSFlight\FareRequestWeb
     */
    public function setNumberOfWebFares($NumberOfWebFares)
    {
      $this->NumberOfWebFares = $NumberOfWebFares;
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
     * @return \App\models\ATSFlight\FareRequestWeb
     */
    public function setReturnEstimatedResults($ReturnEstimatedResults)
    {
      $this->ReturnEstimatedResults = $ReturnEstimatedResults;
      return $this;
    }

    /**
     * @return RoutingTypeEnum
     */
    public function getRoutingType()
    {
      return $this->RoutingType;
    }

    /**
     * @param RoutingTypeEnum $RoutingType
     * @return \App\models\ATSFlight\FareRequestWeb
     */
    public function setRoutingType($RoutingType)
    {
      $this->RoutingType = $RoutingType;
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
     * @return \App\models\ATSFlight\FareRequestWeb
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
     * @return \App\models\ATSFlight\FareRequestWeb
     */
    public function setWebAgents($WebAgents)
    {
      $this->WebAgents = $WebAgents;
      return $this;
    }

}
