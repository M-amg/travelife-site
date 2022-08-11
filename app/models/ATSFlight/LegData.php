<?php

namespace App\models\ATSFlight;

class LegData
{

    /**
     * @var string $AgentCompanyID
     */
    protected $AgentCompanyID = null;

    /**
     * @var string $AgentCorporateCode
     */
    protected $AgentCorporateCode = null;

    /**
     * @var string $AgentID
     */
    protected $AgentID = null;

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var ArrayOfLegConnectionData $Connections
     */
    protected $Connections = null;

    /**
     * @var string $FareTypeCode
     */
    protected $FareTypeCode = null;

    /**
     * @var string $Farebase
     */
    protected $Farebase = null;

    /**
     * @var ResponseLegFareInfo $LegFareInfo
     */
    protected $LegFareInfo = null;

    /**
     * @var string $MajorCarrier
     */
    protected $MajorCarrier = null;

    /**
     * @var string $Recordset
     */
    protected $Recordset = null;

    /**
     * @var int $RequirementValues
     */
    protected $RequirementValues = null;

    /**
     * @var RequirementEnum $Requirements
     */
    protected $Requirements = null;

    /**
     * @var TariffSubTypeEnum $TariffSubType
     */
    protected $TariffSubType = null;

    /**
     * @var TariffTypeEnum $TariffType
     */
    protected $TariffType = null;

    /**
     * @var ArrayOfResponseUserData $Users
     */
    protected $Users = null;

    
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
     * @return \App\models\ATSFlight\LegData
     */
    public function setAgentCompanyID($AgentCompanyID)
    {
      $this->AgentCompanyID = $AgentCompanyID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgentCorporateCode()
    {
      return $this->AgentCorporateCode;
    }

    /**
     * @param string $AgentCorporateCode
     * @return \App\models\ATSFlight\LegData
     */
    public function setAgentCorporateCode($AgentCorporateCode)
    {
      $this->AgentCorporateCode = $AgentCorporateCode;
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
     * @return \App\models\ATSFlight\LegData
     */
    public function setAgentID($AgentID)
    {
      $this->AgentID = $AgentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingClass()
    {
      return $this->BookingClass;
    }

    /**
     * @param string $BookingClass
     * @return \App\models\ATSFlight\LegData
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierCode()
    {
      return $this->CarrierCode;
    }

    /**
     * @param string $CarrierCode
     * @return \App\models\ATSFlight\LegData
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return ArrayOfLegConnectionData
     */
    public function getConnections()
    {
      return $this->Connections;
    }

    /**
     * @param ArrayOfLegConnectionData $Connections
     * @return \App\models\ATSFlight\LegData
     */
    public function setConnections($Connections)
    {
      $this->Connections = $Connections;
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
     * @return \App\models\ATSFlight\LegData
     */
    public function setFareTypeCode($FareTypeCode)
    {
      $this->FareTypeCode = $FareTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFarebase()
    {
      return $this->Farebase;
    }

    /**
     * @param string $Farebase
     * @return \App\models\ATSFlight\LegData
     */
    public function setFarebase($Farebase)
    {
      $this->Farebase = $Farebase;
      return $this;
    }

    /**
     * @return ResponseLegFareInfo
     */
    public function getLegFareInfo()
    {
      return $this->LegFareInfo;
    }

    /**
     * @param ResponseLegFareInfo $LegFareInfo
     * @return \App\models\ATSFlight\LegData
     */
    public function setLegFareInfo($LegFareInfo)
    {
      $this->LegFareInfo = $LegFareInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getMajorCarrier()
    {
      return $this->MajorCarrier;
    }

    /**
     * @param string $MajorCarrier
     * @return \App\models\ATSFlight\LegData
     */
    public function setMajorCarrier($MajorCarrier)
    {
      $this->MajorCarrier = $MajorCarrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordset()
    {
      return $this->Recordset;
    }

    /**
     * @param string $Recordset
     * @return \App\models\ATSFlight\LegData
     */
    public function setRecordset($Recordset)
    {
      $this->Recordset = $Recordset;
      return $this;
    }

    /**
     * @return int
     */
    public function getRequirementValues()
    {
      return $this->RequirementValues;
    }

    /**
     * @param int $RequirementValues
     * @return \App\models\ATSFlight\LegData
     */
    public function setRequirementValues($RequirementValues)
    {
      $this->RequirementValues = $RequirementValues;
      return $this;
    }

    /**
     * @return RequirementEnum
     */
    public function getRequirements()
    {
      return $this->Requirements;
    }

    /**
     * @param RequirementEnum $Requirements
     * @return \App\models\ATSFlight\LegData
     */
    public function setRequirements($Requirements)
    {
      $this->Requirements = $Requirements;
      return $this;
    }

    /**
     * @return TariffSubTypeEnum
     */
    public function getTariffSubType()
    {
      return $this->TariffSubType;
    }

    /**
     * @param TariffSubTypeEnum $TariffSubType
     * @return \App\models\ATSFlight\LegData
     */
    public function setTariffSubType($TariffSubType)
    {
      $this->TariffSubType = $TariffSubType;
      return $this;
    }

    /**
     * @return TariffTypeEnum
     */
    public function getTariffType()
    {
      return $this->TariffType;
    }

    /**
     * @param TariffTypeEnum $TariffType
     * @return \App\models\ATSFlight\LegData
     */
    public function setTariffType($TariffType)
    {
      $this->TariffType = $TariffType;
      return $this;
    }

    /**
     * @return ArrayOfResponseUserData
     */
    public function getUsers()
    {
      return $this->Users;
    }

    /**
     * @param ArrayOfResponseUserData $Users
     * @return \App\models\ATSFlight\LegData
     */
    public function setUsers($Users)
    {
      $this->Users = $Users;
      return $this;
    }

}
