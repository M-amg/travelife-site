<?php

namespace App\models\ATSFlight;

class FareTypeData
{

    /**
     * @var string $AgentCompanyID
     */
    protected $AgentCompanyID = null;

    /**
     * @var string $AgentID
     */
    protected $AgentID = null;

    /**
     * @var string $CorporateCode
     */
    protected $CorporateCode = null;

    /**
     * @var FareSubTypeEnum $FareSubType
     */
    protected $FareSubType = null;

    /**
     * @var QueryFareTypeEnum $FareType
     */
    protected $FareType = null;

    /**
     * @var boolean $IsPercentage
     */
    protected $IsPercentage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAgentCompanyID()
    {
      return $this->AgentCompanyID;
    }

    /**
     * @param string $AgentCompanyID
     * @return \App\models\ATSFlight\FareTypeData
     */
    public function setAgentCompanyID($AgentCompanyID)
    {
      $this->AgentCompanyID = $AgentCompanyID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgentID()
    {
      return $this->AgentID;
    }

    /**
     * @param string $AgentID
     * @return \App\models\ATSFlight\FareTypeData
     */
    public function setAgentID($AgentID)
    {
      $this->AgentID = $AgentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCorporateCode()
    {
      return $this->CorporateCode;
    }

    /**
     * @param string $CorporateCode
     * @return \App\models\ATSFlight\FareTypeData
     */
    public function setCorporateCode($CorporateCode)
    {
      $this->CorporateCode = $CorporateCode;
      return $this;
    }

    /**
     * @return FareSubTypeEnum
     */
    public function getFareSubType()
    {
      return $this->FareSubType;
    }

    /**
     * @param FareSubTypeEnum $FareSubType
     * @return \App\models\ATSFlight\FareTypeData
     */
    public function setFareSubType($FareSubType)
    {
      $this->FareSubType = $FareSubType;
      return $this;
    }

    /**
     * @return QueryFareTypeEnum
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param QueryFareTypeEnum $FareType
     * @return \App\models\ATSFlight\FareTypeData
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPercentage()
    {
      return $this->IsPercentage;
    }

    /**
     * @param boolean $IsPercentage
     * @return \App\models\ATSFlight\FareTypeData
     */
    public function setIsPercentage($IsPercentage)
    {
      $this->IsPercentage = $IsPercentage;
      return $this;
    }

}
