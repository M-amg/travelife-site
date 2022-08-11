<?php

namespace App\models\ATSFlight;

class RuleResponseRule
{

    /**
     * @var ArrayOfRuleResponseLocation $Arrival
     */
    protected $Arrival = null;

    /**
     * @var MinStayEnum $ArrivalMinStayDefFrom
     */
    protected $ArrivalMinStayDefFrom = null;

    /**
     * @var MinStayEnum $ArrivalMinStayDefUntil
     */
    protected $ArrivalMinStayDefUntil = null;

    /**
     * @var ArrayOfRuleResponseBlackoutDate $BlackoutDate
     */
    protected $BlackoutDate = null;

    /**
     * @var ArrayOfRuleResponseBlackoutNumber $BlackoutNumber
     */
    protected $BlackoutNumber = null;

    /**
     * @var ClassTypeEnum $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var string $CabinClassCode
     */
    protected $CabinClassCode = null;

    /**
     * @var string $CancellationFeeAfterTicketing
     */
    protected $CancellationFeeAfterTicketing = null;

    /**
     * @var string $CancellationFeeBeforeTicketing
     */
    protected $CancellationFeeBeforeTicketing = null;

    /**
     * @var ArrayOfRuleResponseCarrier $Carrier
     */
    protected $Carrier = null;

    /**
     * @var ArrayOfRuleResponseLocation $Departure
     */
    protected $Departure = null;

    /**
     * @var MinStayEnum $DepartureMinStayDefFrom
     */
    protected $DepartureMinStayDefFrom = null;

    /**
     * @var MinStayEnum $DepartureMinStayDefUntil
     */
    protected $DepartureMinStayDefUntil = null;

    /**
     * @var DirectionEnum $Direction
     */
    protected $Direction = null;

    /**
     * @var \DateTime $EffectiveDate
     */
    protected $EffectiveDate = null;

    /**
     * @var ArrayOfRuleResponseExtendedTicketInfo $ExtendedTicketInfo
     */
    protected $ExtendedTicketInfo = null;

    /**
     * @var FareSubTypeEnum $FareSubType
     */
    protected $FareSubType = null;

    /**
     * @var string $FareType
     */
    protected $FareType = null;

    /**
     * @var string $FareTypeCode
     */
    protected $FareTypeCode = null;

    /**
     * @var \DateTime $FirstBookingDate
     */
    protected $FirstBookingDate = null;

    /**
     * @var \DateTime $FirstTicketingDate
     */
    protected $FirstTicketingDate = null;

    /**
     * @var FlightDaysEnum $FlightDaysIn
     */
    protected $FlightDaysIn = null;

    /**
     * @var FlightDaysEnum $FlightDaysOut
     */
    protected $FlightDaysOut = null;

    /**
     * @var boolean $IsRefundable
     */
    protected $IsRefundable = null;

    /**
     * @var \DateTime $LastBookingDate
     */
    protected $LastBookingDate = null;

    /**
     * @var \DateTime $LastReturnDate
     */
    protected $LastReturnDate = null;

    /**
     * @var \DateTime $LastTicketingDate
     */
    protected $LastTicketingDate = null;

    /**
     * @var string $MatchCode
     */
    protected $MatchCode = null;

    /**
     * @var string $MaxStay
     */
    protected $MaxStay = null;

    /**
     * @var int $MinBookingBeforeDeparture
     */
    protected $MinBookingBeforeDeparture = null;

    /**
     * @var string $MinStay
     */
    protected $MinStay = null;

    /**
     * @var int $MinTicketingBeforeDeparture
     */
    protected $MinTicketingBeforeDeparture = null;

    /**
     * @var string $NoShow
     */
    protected $NoShow = null;

    /**
     * @var string $OpenJaw
     */
    protected $OpenJaw = null;

    /**
     * @var string $RebookingFee
     */
    protected $RebookingFee = null;

    /**
     * @var string $ReferenceCode
     */
    protected $ReferenceCode = null;

    /**
     * @var string $Season
     */
    protected $Season = null;

    /**
     * @var TariffSubTypeEnum $TariffSubType
     */
    protected $TariffSubType = null;

    /**
     * @var string $TariffType
     */
    protected $TariffType = null;

    /**
     * @var string $TariffTypeCode
     */
    protected $TariffTypeCode = null;

    /**
     * @var ArrayOfRuleResponseTicketType $TicketType
     */
    protected $TicketType = null;

    /**
     * @var int $TicketingDaysAfterBooking
     */
    protected $TicketingDaysAfterBooking = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var \DateTime $TravelCompletionDate
     */
    protected $TravelCompletionDate = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    /**
     * @var RuleResponseUserDefinedField $UserDefinedField
     */
    protected $UserDefinedField = null;

    /**
     * @var \DateTime $ValidFrom
     */
    protected $ValidFrom = null;

    /**
     * @var \DateTime $ValidUntil
     */
    protected $ValidUntil = null;

    /**
     * @var ArrayOfRuleResponseWeekdaySurcharge $WeekdaySurcharge
     */
    protected $WeekdaySurcharge = null;

    /**
     * @var TariffTypeEnum $eTariffType
     */
    protected $eTariffType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRuleResponseLocation
     */
    public function getArrival()
    {
      return $this->Arrival;
    }

    /**
     * @param ArrayOfRuleResponseLocation $Arrival
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setArrival($Arrival)
    {
      $this->Arrival = $Arrival;
      return $this;
    }

    /**
     * @return MinStayEnum
     */
    public function getArrivalMinStayDefFrom()
    {
      return $this->ArrivalMinStayDefFrom;
    }

    /**
     * @param MinStayEnum $ArrivalMinStayDefFrom
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setArrivalMinStayDefFrom($ArrivalMinStayDefFrom)
    {
      $this->ArrivalMinStayDefFrom = $ArrivalMinStayDefFrom;
      return $this;
    }

    /**
     * @return MinStayEnum
     */
    public function getArrivalMinStayDefUntil()
    {
      return $this->ArrivalMinStayDefUntil;
    }

    /**
     * @param MinStayEnum $ArrivalMinStayDefUntil
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setArrivalMinStayDefUntil($ArrivalMinStayDefUntil)
    {
      $this->ArrivalMinStayDefUntil = $ArrivalMinStayDefUntil;
      return $this;
    }

    /**
     * @return ArrayOfRuleResponseBlackoutDate
     */
    public function getBlackoutDate()
    {
      return $this->BlackoutDate;
    }

    /**
     * @param ArrayOfRuleResponseBlackoutDate $BlackoutDate
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setBlackoutDate($BlackoutDate)
    {
      $this->BlackoutDate = $BlackoutDate;
      return $this;
    }

    /**
     * @return ArrayOfRuleResponseBlackoutNumber
     */
    public function getBlackoutNumber()
    {
      return $this->BlackoutNumber;
    }

    /**
     * @param ArrayOfRuleResponseBlackoutNumber $BlackoutNumber
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setBlackoutNumber($BlackoutNumber)
    {
      $this->BlackoutNumber = $BlackoutNumber;
      return $this;
    }

    /**
     * @return ClassTypeEnum
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param ClassTypeEnum $CabinClass
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getCabinClassCode()
    {
      return $this->CabinClassCode;
    }

    /**
     * @param string $CabinClassCode
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setCabinClassCode($CabinClassCode)
    {
      $this->CabinClassCode = $CabinClassCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCancellationFeeAfterTicketing()
    {
      return $this->CancellationFeeAfterTicketing;
    }

    /**
     * @param string $CancellationFeeAfterTicketing
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setCancellationFeeAfterTicketing($CancellationFeeAfterTicketing)
    {
      $this->CancellationFeeAfterTicketing = $CancellationFeeAfterTicketing;
      return $this;
    }

    /**
     * @return string
     */
    public function getCancellationFeeBeforeTicketing()
    {
      return $this->CancellationFeeBeforeTicketing;
    }

    /**
     * @param string $CancellationFeeBeforeTicketing
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setCancellationFeeBeforeTicketing($CancellationFeeBeforeTicketing)
    {
      $this->CancellationFeeBeforeTicketing = $CancellationFeeBeforeTicketing;
      return $this;
    }

    /**
     * @return ArrayOfRuleResponseCarrier
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param ArrayOfRuleResponseCarrier $Carrier
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return ArrayOfRuleResponseLocation
     */
    public function getDeparture()
    {
      return $this->Departure;
    }

    /**
     * @param ArrayOfRuleResponseLocation $Departure
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setDeparture($Departure)
    {
      $this->Departure = $Departure;
      return $this;
    }

    /**
     * @return MinStayEnum
     */
    public function getDepartureMinStayDefFrom()
    {
      return $this->DepartureMinStayDefFrom;
    }

    /**
     * @param MinStayEnum $DepartureMinStayDefFrom
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setDepartureMinStayDefFrom($DepartureMinStayDefFrom)
    {
      $this->DepartureMinStayDefFrom = $DepartureMinStayDefFrom;
      return $this;
    }

    /**
     * @return MinStayEnum
     */
    public function getDepartureMinStayDefUntil()
    {
      return $this->DepartureMinStayDefUntil;
    }

    /**
     * @param MinStayEnum $DepartureMinStayDefUntil
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setDepartureMinStayDefUntil($DepartureMinStayDefUntil)
    {
      $this->DepartureMinStayDefUntil = $DepartureMinStayDefUntil;
      return $this;
    }

    /**
     * @return DirectionEnum
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param DirectionEnum $Direction
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
      if ($this->EffectiveDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EffectiveDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EffectiveDate
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setEffectiveDate(\DateTime $EffectiveDate = null)
    {
      if ($EffectiveDate == null) {
       $this->EffectiveDate = null;
      } else {
        $this->EffectiveDate = $EffectiveDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfRuleResponseExtendedTicketInfo
     */
    public function getExtendedTicketInfo()
    {
      return $this->ExtendedTicketInfo;
    }

    /**
     * @param ArrayOfRuleResponseExtendedTicketInfo $ExtendedTicketInfo
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setExtendedTicketInfo($ExtendedTicketInfo)
    {
      $this->ExtendedTicketInfo = $ExtendedTicketInfo;
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
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setFareSubType($FareSubType)
    {
      $this->FareSubType = $FareSubType;
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
     * @return \App\models\ATSFlight\RuleResponseRule
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
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setFareTypeCode($FareTypeCode)
    {
      $this->FareTypeCode = $FareTypeCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFirstBookingDate()
    {
      if ($this->FirstBookingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FirstBookingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FirstBookingDate
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setFirstBookingDate(\DateTime $FirstBookingDate = null)
    {
      if ($FirstBookingDate == null) {
       $this->FirstBookingDate = null;
      } else {
        $this->FirstBookingDate = $FirstBookingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFirstTicketingDate()
    {
      if ($this->FirstTicketingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FirstTicketingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FirstTicketingDate
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setFirstTicketingDate(\DateTime $FirstTicketingDate = null)
    {
      if ($FirstTicketingDate == null) {
       $this->FirstTicketingDate = null;
      } else {
        $this->FirstTicketingDate = $FirstTicketingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return FlightDaysEnum
     */
    public function getFlightDaysIn()
    {
      return $this->FlightDaysIn;
    }

    /**
     * @param FlightDaysEnum $FlightDaysIn
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setFlightDaysIn($FlightDaysIn)
    {
      $this->FlightDaysIn = $FlightDaysIn;
      return $this;
    }

    /**
     * @return FlightDaysEnum
     */
    public function getFlightDaysOut()
    {
      return $this->FlightDaysOut;
    }

    /**
     * @param FlightDaysEnum $FlightDaysOut
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setFlightDaysOut($FlightDaysOut)
    {
      $this->FlightDaysOut = $FlightDaysOut;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRefundable()
    {
      return $this->IsRefundable;
    }

    /**
     * @param boolean $IsRefundable
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setIsRefundable($IsRefundable)
    {
      $this->IsRefundable = $IsRefundable;
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
     * @return \App\models\ATSFlight\RuleResponseRule
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
    public function getLastReturnDate()
    {
      if ($this->LastReturnDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastReturnDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastReturnDate
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setLastReturnDate(\DateTime $LastReturnDate = null)
    {
      if ($LastReturnDate == null) {
       $this->LastReturnDate = null;
      } else {
        $this->LastReturnDate = $LastReturnDate->format(\DateTime::ATOM);
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
     * @return \App\models\ATSFlight\RuleResponseRule
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
     * @return string
     */
    public function getMatchCode()
    {
      return $this->MatchCode;
    }

    /**
     * @param string $MatchCode
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setMatchCode($MatchCode)
    {
      $this->MatchCode = $MatchCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxStay()
    {
      return $this->MaxStay;
    }

    /**
     * @param string $MaxStay
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setMaxStay($MaxStay)
    {
      $this->MaxStay = $MaxStay;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinBookingBeforeDeparture()
    {
      return $this->MinBookingBeforeDeparture;
    }

    /**
     * @param int $MinBookingBeforeDeparture
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setMinBookingBeforeDeparture($MinBookingBeforeDeparture)
    {
      $this->MinBookingBeforeDeparture = $MinBookingBeforeDeparture;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinStay()
    {
      return $this->MinStay;
    }

    /**
     * @param string $MinStay
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setMinStay($MinStay)
    {
      $this->MinStay = $MinStay;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinTicketingBeforeDeparture()
    {
      return $this->MinTicketingBeforeDeparture;
    }

    /**
     * @param int $MinTicketingBeforeDeparture
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setMinTicketingBeforeDeparture($MinTicketingBeforeDeparture)
    {
      $this->MinTicketingBeforeDeparture = $MinTicketingBeforeDeparture;
      return $this;
    }

    /**
     * @return string
     */
    public function getNoShow()
    {
      return $this->NoShow;
    }

    /**
     * @param string $NoShow
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setNoShow($NoShow)
    {
      $this->NoShow = $NoShow;
      return $this;
    }

    /**
     * @return string
     */
    public function getOpenJaw()
    {
      return $this->OpenJaw;
    }

    /**
     * @param string $OpenJaw
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setOpenJaw($OpenJaw)
    {
      $this->OpenJaw = $OpenJaw;
      return $this;
    }

    /**
     * @return string
     */
    public function getRebookingFee()
    {
      return $this->RebookingFee;
    }

    /**
     * @param string $RebookingFee
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setRebookingFee($RebookingFee)
    {
      $this->RebookingFee = $RebookingFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceCode()
    {
      return $this->ReferenceCode;
    }

    /**
     * @param string $ReferenceCode
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setReferenceCode($ReferenceCode)
    {
      $this->ReferenceCode = $ReferenceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeason()
    {
      return $this->Season;
    }

    /**
     * @param string $Season
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setSeason($Season)
    {
      $this->Season = $Season;
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
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setTariffSubType($TariffSubType)
    {
      $this->TariffSubType = $TariffSubType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTariffType()
    {
      return $this->TariffType;
    }

    /**
     * @param string $TariffType
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setTariffType($TariffType)
    {
      $this->TariffType = $TariffType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTariffTypeCode()
    {
      return $this->TariffTypeCode;
    }

    /**
     * @param string $TariffTypeCode
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setTariffTypeCode($TariffTypeCode)
    {
      $this->TariffTypeCode = $TariffTypeCode;
      return $this;
    }

    /**
     * @return ArrayOfRuleResponseTicketType
     */
    public function getTicketType()
    {
      return $this->TicketType;
    }

    /**
     * @param ArrayOfRuleResponseTicketType $TicketType
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setTicketType($TicketType)
    {
      $this->TicketType = $TicketType;
      return $this;
    }

    /**
     * @return int
     */
    public function getTicketingDaysAfterBooking()
    {
      return $this->TicketingDaysAfterBooking;
    }

    /**
     * @param int $TicketingDaysAfterBooking
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setTicketingDaysAfterBooking($TicketingDaysAfterBooking)
    {
      $this->TicketingDaysAfterBooking = $TicketingDaysAfterBooking;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTravelCompletionDate()
    {
      if ($this->TravelCompletionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TravelCompletionDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TravelCompletionDate
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setTravelCompletionDate(\DateTime $TravelCompletionDate = null)
    {
      if ($TravelCompletionDate == null) {
       $this->TravelCompletionDate = null;
      } else {
        $this->TravelCompletionDate = $TravelCompletionDate->format(\DateTime::ATOM);
      }
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
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return RuleResponseUserDefinedField
     */
    public function getUserDefinedField()
    {
      return $this->UserDefinedField;
    }

    /**
     * @param RuleResponseUserDefinedField $UserDefinedField
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setUserDefinedField($UserDefinedField)
    {
      $this->UserDefinedField = $UserDefinedField;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidFrom()
    {
      if ($this->ValidFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ValidFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ValidFrom
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setValidFrom(\DateTime $ValidFrom = null)
    {
      if ($ValidFrom == null) {
       $this->ValidFrom = null;
      } else {
        $this->ValidFrom = $ValidFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidUntil()
    {
      if ($this->ValidUntil == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ValidUntil);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ValidUntil
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setValidUntil(\DateTime $ValidUntil = null)
    {
      if ($ValidUntil == null) {
       $this->ValidUntil = null;
      } else {
        $this->ValidUntil = $ValidUntil->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfRuleResponseWeekdaySurcharge
     */
    public function getWeekdaySurcharge()
    {
      return $this->WeekdaySurcharge;
    }

    /**
     * @param ArrayOfRuleResponseWeekdaySurcharge $WeekdaySurcharge
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setWeekdaySurcharge($WeekdaySurcharge)
    {
      $this->WeekdaySurcharge = $WeekdaySurcharge;
      return $this;
    }

    /**
     * @return TariffTypeEnum
     */
    public function getETariffType()
    {
      return $this->eTariffType;
    }

    /**
     * @param TariffTypeEnum $eTariffType
     * @return \App\models\ATSFlight\RuleResponseRule
     */
    public function setETariffType($eTariffType)
    {
      $this->eTariffType = $eTariffType;
      return $this;
    }

}
