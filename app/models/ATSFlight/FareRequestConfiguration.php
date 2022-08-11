<?php

namespace App\models\ATSFlight;

class FareRequestConfiguration
{

    /**
     * @var AdditionalDetailEnum $AdditionalDetails
     */
    protected $AdditionalDetails = null;

    /**
     * @var AllotmentRequest $AllotmentConfig
     */
    protected $AllotmentConfig = null;

    /**
     * @var boolean $AllowMultiTicketBookings
     */
    protected $AllowMultiTicketBookings = null;

    /**
     * @var boolean $AllowWaitList
     */
    protected $AllowWaitList = null;

    /**
     * @var \DateTime $AnticipatedBookingDate
     */
    protected $AnticipatedBookingDate = null;

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var ArrayOfCRSData $CRSSettings
     */
    protected $CRSSettings = null;

    /**
     * @var ArrayOfCacheConfigurationData $Cache
     */
    protected $Cache = null;

    /**
     * @var CalculationData $Calculation
     */
    protected $Calculation = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var ArrayOfDatabaseCode $DBCodes
     */
    protected $DBCodes = null;

    /**
     * @var \DateTime $EarliestTicketingDate
     */
    protected $EarliestTicketingDate = null;

    /**
     * @var DetailLevelEnum $ExtraInfo
     */
    protected $ExtraInfo = null;

    /**
     * @var FareDivsersityEnum $FareDiversity
     */
    protected $FareDiversity = null;

    /**
     * @var boolean $FixedStay
     */
    protected $FixedStay = null;

    /**
     * @var FlightTypeEnum $FlightType
     */
    protected $FlightType = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var int $MaxElapsedFlightTime
     */
    protected $MaxElapsedFlightTime = null;

    /**
     * @var ArrayOfAirportMCT $MergeMCT
     */
    protected $MergeMCT = null;

    /**
     * @var string $MultiChannelBranch
     */
    protected $MultiChannelBranch = null;

    /**
     * @var string $MultiChannelBranchGroup
     */
    protected $MultiChannelBranchGroup = null;

    /**
     * @var int $NumberOfPaymentRequests
     */
    protected $NumberOfPaymentRequests = null;

    /**
     * @var ArrayOfPaymentFilter $PaymentFilters
     */
    protected $PaymentFilters = null;

    /**
     * @var FareTypeEnum $PaymentInfo
     */
    protected $PaymentInfo = null;

    /**
     * @var int $RestrictOvernight
     */
    protected $RestrictOvernight = null;

    /**
     * @var boolean $ReturnFlightsWithBaggageOnly
     */
    protected $ReturnFlightsWithBaggageOnly = null;

    /**
     * @var NonStopEnum $ReturnNonStopFlightsOnly
     */
    protected $ReturnNonStopFlightsOnly = null;

    /**
     * @var boolean $ReturnSeats
     */
    protected $ReturnSeats = null;

    /**
     * @var boolean $ReturnTicketlessCarrier
     */
    protected $ReturnTicketlessCarrier = null;

    /**
     * @var SortEnum $SortBy
     */
    protected $SortBy = null;

    /**
     * @var DiscountEnum $SpecialDiscounts
     */
    protected $SpecialDiscounts = null;

    /**
     * @var int $TimeOutInSeconds
     */
    protected $TimeOutInSeconds = null;

    /**
     * @var ToleranceModeEnum $ToleranceSearchMode
     */
    protected $ToleranceSearchMode = null;

    /**
     * @var Vayant $VayantConfig
     */
    protected $VayantConfig = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdditionalDetailEnum
     */
    public function getAdditionalDetails()
    {
      return $this->AdditionalDetails;
    }

    /**
     * @param AdditionalDetailEnum $AdditionalDetails
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setAdditionalDetails($AdditionalDetails)
    {
      $this->AdditionalDetails = $AdditionalDetails;
      return $this;
    }

    /**
     * @return AllotmentRequest
     */
    public function getAllotmentConfig()
    {
      return $this->AllotmentConfig;
    }

    /**
     * @param AllotmentRequest $AllotmentConfig
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setAllotmentConfig($AllotmentConfig)
    {
      $this->AllotmentConfig = $AllotmentConfig;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowMultiTicketBookings()
    {
      return $this->AllowMultiTicketBookings;
    }

    /**
     * @param boolean $AllowMultiTicketBookings
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setAllowMultiTicketBookings($AllowMultiTicketBookings)
    {
      $this->AllowMultiTicketBookings = $AllowMultiTicketBookings;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowWaitList()
    {
      return $this->AllowWaitList;
    }

    /**
     * @param boolean $AllowWaitList
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setAllowWaitList($AllowWaitList)
    {
      $this->AllowWaitList = $AllowWaitList;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAnticipatedBookingDate()
    {
      if ($this->AnticipatedBookingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AnticipatedBookingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AnticipatedBookingDate
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setAnticipatedBookingDate(\DateTime $AnticipatedBookingDate = null)
    {
      if ($AnticipatedBookingDate == null) {
       $this->AnticipatedBookingDate = null;
      } else {
        $this->AnticipatedBookingDate = $AnticipatedBookingDate->format(\DateTime::ATOM);
      }
      return $this;
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
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return ArrayOfCRSData
     */
    public function getCRSSettings()
    {
      return $this->CRSSettings;
    }

    /**
     * @param ArrayOfCRSData $CRSSettings
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setCRSSettings($CRSSettings)
    {
      $this->CRSSettings = $CRSSettings;
      return $this;
    }

    /**
     * @return ArrayOfCacheConfigurationData
     */
    public function getCache()
    {
      return $this->Cache;
    }

    /**
     * @param ArrayOfCacheConfigurationData $Cache
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setCache($Cache)
    {
      $this->Cache = $Cache;
      return $this;
    }

    /**
     * @return CalculationData
     */
    public function getCalculation()
    {
      return $this->Calculation;
    }

    /**
     * @param CalculationData $Calculation
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setCalculation($Calculation)
    {
      $this->Calculation = $Calculation;
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
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return ArrayOfDatabaseCode
     */
    public function getDBCodes()
    {
      return $this->DBCodes;
    }

    /**
     * @param ArrayOfDatabaseCode $DBCodes
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setDBCodes($DBCodes)
    {
      $this->DBCodes = $DBCodes;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEarliestTicketingDate()
    {
      if ($this->EarliestTicketingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EarliestTicketingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EarliestTicketingDate
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setEarliestTicketingDate(\DateTime $EarliestTicketingDate = null)
    {
      if ($EarliestTicketingDate == null) {
       $this->EarliestTicketingDate = null;
      } else {
        $this->EarliestTicketingDate = $EarliestTicketingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return DetailLevelEnum
     */
    public function getExtraInfo()
    {
      return $this->ExtraInfo;
    }

    /**
     * @param DetailLevelEnum $ExtraInfo
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setExtraInfo($ExtraInfo)
    {
      $this->ExtraInfo = $ExtraInfo;
      return $this;
    }

    /**
     * @return FareDivsersityEnum
     */
    public function getFareDiversity()
    {
      return $this->FareDiversity;
    }

    /**
     * @param FareDivsersityEnum $FareDiversity
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setFareDiversity($FareDiversity)
    {
      $this->FareDiversity = $FareDiversity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFixedStay()
    {
      return $this->FixedStay;
    }

    /**
     * @param boolean $FixedStay
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setFixedStay($FixedStay)
    {
      $this->FixedStay = $FixedStay;
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
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setFlightType($FlightType)
    {
      $this->FlightType = $FlightType;
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
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxElapsedFlightTime()
    {
      return $this->MaxElapsedFlightTime;
    }

    /**
     * @param int $MaxElapsedFlightTime
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setMaxElapsedFlightTime($MaxElapsedFlightTime)
    {
      $this->MaxElapsedFlightTime = $MaxElapsedFlightTime;
      return $this;
    }

    /**
     * @return ArrayOfAirportMCT
     */
    public function getMergeMCT()
    {
      return $this->MergeMCT;
    }

    /**
     * @param ArrayOfAirportMCT $MergeMCT
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setMergeMCT($MergeMCT)
    {
      $this->MergeMCT = $MergeMCT;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultiChannelBranch()
    {
      return $this->MultiChannelBranch;
    }

    /**
     * @param string $MultiChannelBranch
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setMultiChannelBranch($MultiChannelBranch)
    {
      $this->MultiChannelBranch = $MultiChannelBranch;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultiChannelBranchGroup()
    {
      return $this->MultiChannelBranchGroup;
    }

    /**
     * @param string $MultiChannelBranchGroup
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setMultiChannelBranchGroup($MultiChannelBranchGroup)
    {
      $this->MultiChannelBranchGroup = $MultiChannelBranchGroup;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPaymentRequests()
    {
      return $this->NumberOfPaymentRequests;
    }

    /**
     * @param int $NumberOfPaymentRequests
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setNumberOfPaymentRequests($NumberOfPaymentRequests)
    {
      $this->NumberOfPaymentRequests = $NumberOfPaymentRequests;
      return $this;
    }

    /**
     * @return ArrayOfPaymentFilter
     */
    public function getPaymentFilters()
    {
      return $this->PaymentFilters;
    }

    /**
     * @param ArrayOfPaymentFilter $PaymentFilters
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setPaymentFilters($PaymentFilters)
    {
      $this->PaymentFilters = $PaymentFilters;
      return $this;
    }

    /**
     * @return FareTypeEnum
     */
    public function getPaymentInfo()
    {
      return $this->PaymentInfo;
    }

    /**
     * @param FareTypeEnum $PaymentInfo
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setPaymentInfo($PaymentInfo)
    {
      $this->PaymentInfo = $PaymentInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getRestrictOvernight()
    {
      return $this->RestrictOvernight;
    }

    /**
     * @param int $RestrictOvernight
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setRestrictOvernight($RestrictOvernight)
    {
      $this->RestrictOvernight = $RestrictOvernight;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnFlightsWithBaggageOnly()
    {
      return $this->ReturnFlightsWithBaggageOnly;
    }

    /**
     * @param boolean $ReturnFlightsWithBaggageOnly
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setReturnFlightsWithBaggageOnly($ReturnFlightsWithBaggageOnly)
    {
      $this->ReturnFlightsWithBaggageOnly = $ReturnFlightsWithBaggageOnly;
      return $this;
    }

    /**
     * @return NonStopEnum
     */
    public function getReturnNonStopFlightsOnly()
    {
      return $this->ReturnNonStopFlightsOnly;
    }

    /**
     * @param NonStopEnum $ReturnNonStopFlightsOnly
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setReturnNonStopFlightsOnly($ReturnNonStopFlightsOnly)
    {
      $this->ReturnNonStopFlightsOnly = $ReturnNonStopFlightsOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnSeats()
    {
      return $this->ReturnSeats;
    }

    /**
     * @param boolean $ReturnSeats
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setReturnSeats($ReturnSeats)
    {
      $this->ReturnSeats = $ReturnSeats;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnTicketlessCarrier()
    {
      return $this->ReturnTicketlessCarrier;
    }

    /**
     * @param boolean $ReturnTicketlessCarrier
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setReturnTicketlessCarrier($ReturnTicketlessCarrier)
    {
      $this->ReturnTicketlessCarrier = $ReturnTicketlessCarrier;
      return $this;
    }

    /**
     * @return SortEnum
     */
    public function getSortBy()
    {
      return $this->SortBy;
    }

    /**
     * @param SortEnum $SortBy
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setSortBy($SortBy)
    {
      $this->SortBy = $SortBy;
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
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setSpecialDiscounts($SpecialDiscounts)
    {
      $this->SpecialDiscounts = $SpecialDiscounts;
      return $this;
    }

    /**
     * @return int
     */
    public function getTimeOutInSeconds()
    {
      return $this->TimeOutInSeconds;
    }

    /**
     * @param int $TimeOutInSeconds
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setTimeOutInSeconds($TimeOutInSeconds)
    {
      $this->TimeOutInSeconds = $TimeOutInSeconds;
      return $this;
    }

    /**
     * @return ToleranceModeEnum
     */
    public function getToleranceSearchMode()
    {
      return $this->ToleranceSearchMode;
    }

    /**
     * @param ToleranceModeEnum $ToleranceSearchMode
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setToleranceSearchMode($ToleranceSearchMode)
    {
      $this->ToleranceSearchMode = $ToleranceSearchMode;
      return $this;
    }

    /**
     * @return Vayant
     */
    public function getVayantConfig()
    {
      return $this->VayantConfig;
    }

    /**
     * @param Vayant $VayantConfig
     * @return \App\models\ATSFlight\FareRequestConfiguration
     */
    public function setVayantConfig($VayantConfig)
    {
      $this->VayantConfig = $VayantConfig;
      return $this;
    }

}
