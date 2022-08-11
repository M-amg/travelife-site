<?php

namespace App\models\ATSFlight;

class FareResponseLeg
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
     * @var BookingOnHoldData $BookingOnHoldInfo
     */
    protected $BookingOnHoldInfo = null;

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var ArrayOfFareResponseConnection $Connections
     */
    protected $Connections = null;

    /**
     * @var string $FareTypeCode
     */
    protected $FareTypeCode = null;

    /**
     * @var FareResponseLegFareInfo $LegFareInfo
     */
    protected $LegFareInfo = null;

    /**
     * @var string $MajorCarrier
     */
    protected $MajorCarrier = null;

    /**
     * @var ArrayOfFareResponseLegPassenger $Passenger
     */
    protected $Passenger = null;

    /**
     * @var string $Recordset
     */
    protected $Recordset = null;

    /**
     * @var int $RequirementValues
     */
    protected $RequirementValues = null;

    /**
     * @var SupportedFunctionsEnum $SupportedFunctions
     */
    protected $SupportedFunctions = null;

    /**
     * @var string $UsedCRSProfileGUID
     */
    protected $UsedCRSProfileGUID = null;

    /**
     * @var int $UsedMCRELegNumber
     */
    protected $UsedMCRELegNumber = null;

    /**
     * @var string $UsedMCRESubActionName
     */
    protected $UsedMCRESubActionName = null;

    /**
     * @var string $UsedTicketGroupID
     */
    protected $UsedTicketGroupID = null;

    /**
     * @var ArrayOfFareResponseUserData $Users
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
     * @return \App\models\ATSFlight\FareResponseLeg
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
     * @return \App\models\ATSFlight\FareResponseLeg
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
     * @return \App\models\ATSFlight\FareResponseLeg
     */
    public function setAgentID($AgentID)
    {
      $this->AgentID = $AgentID;
      return $this;
    }

    /**
     * @return BookingOnHoldData
     */
    public function getBookingOnHoldInfo()
    {
      return $this->BookingOnHoldInfo;
    }

    /**
     * @param BookingOnHoldData $BookingOnHoldInfo
     * @return \App\models\ATSFlight\FareResponseLeg
     */
    public function setBookingOnHoldInfo($BookingOnHoldInfo)
    {
      $this->BookingOnHoldInfo = $BookingOnHoldInfo;
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
     * @return \App\models\ATSFlight\FareResponseLeg
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return ArrayOfFareResponseConnection
     */
    public function getConnections()
    {
      return $this->Connections;
    }

    /**
     * @param ArrayOfFareResponseConnection $Connections
     * @return \App\models\ATSFlight\FareResponseLeg
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
     * @return \App\models\ATSFlight\FareResponseLeg
     */
    public function setFareTypeCode($FareTypeCode)
    {
      $this->FareTypeCode = $FareTypeCode;
      return $this;
    }

    /**
     * @return FareResponseLegFareInfo
     */
    public function getLegFareInfo()
    {
      return $this->LegFareInfo;
    }

    /**
     * @param FareResponseLegFareInfo $LegFareInfo
     * @return \App\models\ATSFlight\FareResponseLeg
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
     * @return \App\models\ATSFlight\FareResponseLeg
     */
    public function setMajorCarrier($MajorCarrier)
    {
      $this->MajorCarrier = $MajorCarrier;
      return $this;
    }

    /**
     * @return ArrayOfFareResponseLegPassenger
     */
    public function getPassenger()
    {
      return $this->Passenger;
    }

    /**
     * @param ArrayOfFareResponseLegPassenger $Passenger
     * @return \App\models\ATSFlight\FareResponseLeg
     */
    public function setPassenger($Passenger)
    {
      $this->Passenger = $Passenger;
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
     * @return \App\models\ATSFlight\FareResponseLeg
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
     * @return \App\models\ATSFlight\FareResponseLeg
     */
    public function setRequirementValues($RequirementValues)
    {
      $this->RequirementValues = $RequirementValues;
      return $this;
    }

    /**
     * @return SupportedFunctionsEnum
     */
    public function getSupportedFunctions()
    {
      return $this->SupportedFunctions;
    }

    /**
     * @param SupportedFunctionsEnum $SupportedFunctions
     * @return \App\models\ATSFlight\FareResponseLeg
     */
    public function setSupportedFunctions($SupportedFunctions)
    {
      $this->SupportedFunctions = $SupportedFunctions;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsedCRSProfileGUID()
    {
      return $this->UsedCRSProfileGUID;
    }

    /**
     * @param string $UsedCRSProfileGUID
     * @return \App\models\ATSFlight\FareResponseLeg
     */
    public function setUsedCRSProfileGUID($UsedCRSProfileGUID)
    {
      $this->UsedCRSProfileGUID = $UsedCRSProfileGUID;
      return $this;
    }

    /**
     * @return int
     */
    public function getUsedMCRELegNumber()
    {
      return $this->UsedMCRELegNumber;
    }

    /**
     * @param int $UsedMCRELegNumber
     * @return \App\models\ATSFlight\FareResponseLeg
     */
    public function setUsedMCRELegNumber($UsedMCRELegNumber)
    {
      $this->UsedMCRELegNumber = $UsedMCRELegNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsedMCRESubActionName()
    {
      return $this->UsedMCRESubActionName;
    }

    /**
     * @param string $UsedMCRESubActionName
     * @return \App\models\ATSFlight\FareResponseLeg
     */
    public function setUsedMCRESubActionName($UsedMCRESubActionName)
    {
      $this->UsedMCRESubActionName = $UsedMCRESubActionName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsedTicketGroupID()
    {
      return $this->UsedTicketGroupID;
    }

    /**
     * @param string $UsedTicketGroupID
     * @return \App\models\ATSFlight\FareResponseLeg
     */
    public function setUsedTicketGroupID($UsedTicketGroupID)
    {
      $this->UsedTicketGroupID = $UsedTicketGroupID;
      return $this;
    }

    /**
     * @return ArrayOfFareResponseUserData
     */
    public function getUsers()
    {
      return $this->Users;
    }

    /**
     * @param ArrayOfFareResponseUserData $Users
     * @return \App\models\ATSFlight\FareResponseLeg
     */
    public function setUsers($Users)
    {
      $this->Users = $Users;
      return $this;
    }

}
