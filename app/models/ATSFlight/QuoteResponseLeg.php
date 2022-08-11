<?php

namespace App\models\ATSFlight;

class QuoteResponseLeg
{

    /**
     * @var string $AllotmentMatchCode
     */
    protected $AllotmentMatchCode = null;

    /**
     * @var int $AllotmentMinDistance
     */
    protected $AllotmentMinDistance = null;

    /**
     * @var AllotmentAllowanceEnum $AllotmentType
     */
    protected $AllotmentType = null;

    /**
     * @var ArrayOfBlackoutDateData $BlackoutDates
     */
    protected $BlackoutDates = null;

    /**
     * @var int $FareGroup
     */
    protected $FareGroup = null;

    /**
     * @var ArrayOfstring $FareGroups
     */
    protected $FareGroups = null;

    /**
     * @var string $FareLink
     */
    protected $FareLink = null;

    /**
     * @var QuoteFareTypeEnum $FareType
     */
    protected $FareType = null;

    /**
     * @var FlightTypeEnum $FlightType
     */
    protected $FlightType = null;

    /**
     * @var \DateTime $LastBookingDate
     */
    protected $LastBookingDate = null;

    /**
     * @var \DateTime $LastTicketingDate
     */
    protected $LastTicketingDate = null;

    /**
     * @var QuoteResponseLegInfo $LegInfo
     */
    protected $LegInfo = null;

    /**
     * @var int $MaximumTicketingDaysAfterBooking
     */
    protected $MaximumTicketingDaysAfterBooking = null;

    /**
     * @var int $MinimumBookingDaysBeforeDeparture
     */
    protected $MinimumBookingDaysBeforeDeparture = null;

    /**
     * @var int $MinimumTicketingDaysBeforeDeparture
     */
    protected $MinimumTicketingDaysBeforeDeparture = null;

    /**
     * @var string $ProductID
     */
    protected $ProductID = null;

    /**
     * @var string $Recordset
     */
    protected $Recordset = null;

    /**
     * @var ArrayOfstring $RoutingNames
     */
    protected $RoutingNames = null;

    /**
     * @var string $RuleBookingClass
     */
    protected $RuleBookingClass = null;

    /**
     * @var ArrayOfstring $RuleNames
     */
    protected $RuleNames = null;

    /**
     * @var ArrayOfSeasonDateData $SeasonDates
     */
    protected $SeasonDates = null;

    /**
     * @var ArrayOfQuoteResponseSegmentData $Segments
     */
    protected $Segments = null;

    /**
     * @var ArrayOfstring $TarifLinks
     */
    protected $TarifLinks = null;

    /**
     * @var ArrayOfstring $TarifNames
     */
    protected $TarifNames = null;

    /**
     * @var TariffSubTypeEnum $TariffSubType
     */
    protected $TariffSubType = null;

    /**
     * @var TariffTypeEnum $TariffType
     */
    protected $TariffType = null;

    /**
     * @var ArrayOfQuoteResponseUserData $UserDefinedFields
     */
    protected $UserDefinedFields = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAllotmentMatchCode()
    {
      return $this->AllotmentMatchCode;
    }

    /**
     * @param string $AllotmentMatchCode
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setAllotmentMatchCode($AllotmentMatchCode)
    {
      $this->AllotmentMatchCode = $AllotmentMatchCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getAllotmentMinDistance()
    {
      return $this->AllotmentMinDistance;
    }

    /**
     * @param int $AllotmentMinDistance
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setAllotmentMinDistance($AllotmentMinDistance)
    {
      $this->AllotmentMinDistance = $AllotmentMinDistance;
      return $this;
    }

    /**
     * @return AllotmentAllowanceEnum
     */
    public function getAllotmentType()
    {
      return $this->AllotmentType;
    }

    /**
     * @param AllotmentAllowanceEnum $AllotmentType
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setAllotmentType($AllotmentType)
    {
      $this->AllotmentType = $AllotmentType;
      return $this;
    }

    /**
     * @return ArrayOfBlackoutDateData
     */
    public function getBlackoutDates()
    {
      return $this->BlackoutDates;
    }

    /**
     * @param ArrayOfBlackoutDateData $BlackoutDates
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setBlackoutDates($BlackoutDates)
    {
      $this->BlackoutDates = $BlackoutDates;
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
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setFareGroup($FareGroup)
    {
      $this->FareGroup = $FareGroup;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFareGroups()
    {
      return $this->FareGroups;
    }

    /**
     * @param ArrayOfstring $FareGroups
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setFareGroups($FareGroups)
    {
      $this->FareGroups = $FareGroups;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareLink()
    {
      return $this->FareLink;
    }

    /**
     * @param string $FareLink
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setFareLink($FareLink)
    {
      $this->FareLink = $FareLink;
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
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return FlightTypeEnum
     */
    public function getFlightType()
    {
      return $this->FlightType;
    }

    /**
     * @param FlightTypeEnum $FlightType
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setFlightType($FlightType)
    {
      $this->FlightType = $FlightType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastBookingDate()
    {
      if ($this->LastBookingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastBookingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastBookingDate
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setLastBookingDate(\DateTime $LastBookingDate = null)
    {
      if ($LastBookingDate == null) {
       $this->LastBookingDate = null;
      } else {
        $this->LastBookingDate = $LastBookingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastTicketingDate()
    {
      if ($this->LastTicketingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastTicketingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastTicketingDate
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setLastTicketingDate(\DateTime $LastTicketingDate = null)
    {
      if ($LastTicketingDate == null) {
       $this->LastTicketingDate = null;
      } else {
        $this->LastTicketingDate = $LastTicketingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return QuoteResponseLegInfo
     */
    public function getLegInfo()
    {
      return $this->LegInfo;
    }

    /**
     * @param QuoteResponseLegInfo $LegInfo
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setLegInfo($LegInfo)
    {
      $this->LegInfo = $LegInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumTicketingDaysAfterBooking()
    {
      return $this->MaximumTicketingDaysAfterBooking;
    }

    /**
     * @param int $MaximumTicketingDaysAfterBooking
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setMaximumTicketingDaysAfterBooking($MaximumTicketingDaysAfterBooking)
    {
      $this->MaximumTicketingDaysAfterBooking = $MaximumTicketingDaysAfterBooking;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumBookingDaysBeforeDeparture()
    {
      return $this->MinimumBookingDaysBeforeDeparture;
    }

    /**
     * @param int $MinimumBookingDaysBeforeDeparture
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setMinimumBookingDaysBeforeDeparture($MinimumBookingDaysBeforeDeparture)
    {
      $this->MinimumBookingDaysBeforeDeparture = $MinimumBookingDaysBeforeDeparture;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumTicketingDaysBeforeDeparture()
    {
      return $this->MinimumTicketingDaysBeforeDeparture;
    }

    /**
     * @param int $MinimumTicketingDaysBeforeDeparture
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setMinimumTicketingDaysBeforeDeparture($MinimumTicketingDaysBeforeDeparture)
    {
      $this->MinimumTicketingDaysBeforeDeparture = $MinimumTicketingDaysBeforeDeparture;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductID()
    {
      return $this->ProductID;
    }

    /**
     * @param string $ProductID
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setProductID($ProductID)
    {
      $this->ProductID = $ProductID;
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
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setRecordset($Recordset)
    {
      $this->Recordset = $Recordset;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getRoutingNames()
    {
      return $this->RoutingNames;
    }

    /**
     * @param ArrayOfstring $RoutingNames
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setRoutingNames($RoutingNames)
    {
      $this->RoutingNames = $RoutingNames;
      return $this;
    }

    /**
     * @return string
     */
    public function getRuleBookingClass()
    {
      return $this->RuleBookingClass;
    }

    /**
     * @param string $RuleBookingClass
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setRuleBookingClass($RuleBookingClass)
    {
      $this->RuleBookingClass = $RuleBookingClass;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getRuleNames()
    {
      return $this->RuleNames;
    }

    /**
     * @param ArrayOfstring $RuleNames
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setRuleNames($RuleNames)
    {
      $this->RuleNames = $RuleNames;
      return $this;
    }

    /**
     * @return ArrayOfSeasonDateData
     */
    public function getSeasonDates()
    {
      return $this->SeasonDates;
    }

    /**
     * @param ArrayOfSeasonDateData $SeasonDates
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setSeasonDates($SeasonDates)
    {
      $this->SeasonDates = $SeasonDates;
      return $this;
    }

    /**
     * @return ArrayOfQuoteResponseSegmentData
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfQuoteResponseSegmentData $Segments
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getTarifLinks()
    {
      return $this->TarifLinks;
    }

    /**
     * @param ArrayOfstring $TarifLinks
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setTarifLinks($TarifLinks)
    {
      $this->TarifLinks = $TarifLinks;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getTarifNames()
    {
      return $this->TarifNames;
    }

    /**
     * @param ArrayOfstring $TarifNames
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setTarifNames($TarifNames)
    {
      $this->TarifNames = $TarifNames;
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
     * @return \App\models\ATSFlight\QuoteResponseLeg
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
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setTariffType($TariffType)
    {
      $this->TariffType = $TariffType;
      return $this;
    }

    /**
     * @return ArrayOfQuoteResponseUserData
     */
    public function getUserDefinedFields()
    {
      return $this->UserDefinedFields;
    }

    /**
     * @param ArrayOfQuoteResponseUserData $UserDefinedFields
     * @return \App\models\ATSFlight\QuoteResponseLeg
     */
    public function setUserDefinedFields($UserDefinedFields)
    {
      $this->UserDefinedFields = $UserDefinedFields;
      return $this;
    }

}
