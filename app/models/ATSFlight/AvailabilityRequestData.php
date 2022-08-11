<?php

namespace App\models\ATSFlight;

class AvailabilityRequestData
{

    /**
     * @var AllotmentRequest $AllotmentConfig
     */
    protected $AllotmentConfig = null;

    /**
     * @var boolean $AllowSurcharge
     */
    protected $AllowSurcharge = null;

    /**
     * @var AvailabilitySearchModeEnum $AvailabilitySearchMode
     */
    protected $AvailabilitySearchMode = null;

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var AvailabilityRequestCharter $Charter
     */
    protected $Charter = null;

    /**
     * @var CheckAvailabilityTypeEnum $CheckAvailability
     */
    protected $CheckAvailability = null;

    /**
     * @var int $CheckDaysAhead
     */
    protected $CheckDaysAhead = null;

    /**
     * @var int $CheckDaysBack
     */
    protected $CheckDaysBack = null;

    /**
     * @var \DateTime $DateOfCommencement
     */
    protected $DateOfCommencement = null;

    /**
     * @var boolean $DoAllowWaitlist
     */
    protected $DoAllowWaitlist = null;

    /**
     * @var boolean $DoReturnAvailString
     */
    protected $DoReturnAvailString = null;

    /**
     * @var boolean $DoReturnSeats
     */
    protected $DoReturnSeats = null;

    /**
     * @var boolean $DoReturnSoldFlights
     */
    protected $DoReturnSoldFlights = null;

    /**
     * @var EnhancedFeederSearch $EnhancedFeederSearchConfig
     */
    protected $EnhancedFeederSearchConfig = null;

    /**
     * @var string $Farebase
     */
    protected $Farebase = null;

    /**
     * @var boolean $FullAvailibility
     */
    protected $FullAvailibility = null;

    /**
     * @var boolean $HasExtraInfo
     */
    protected $HasExtraInfo = null;

    /**
     * @var boolean $IsDirectOnly
     */
    protected $IsDirectOnly = null;

    /**
     * @var boolean $IsFixedStay
     */
    protected $IsFixedStay = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var ArrayOfAvailabilityRequestLegType $LegType
     */
    protected $LegType = null;

    /**
     * @var int $MaxAlternatives
     */
    protected $MaxAlternatives = null;

    /**
     * @var SharedPrice $PassengerFare
     */
    protected $PassengerFare = null;

    /**
     * @var ArrayOfAvailabilityRequestPassengerType $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var ArrayOfPaymentFilterDetails $PaymentFilters
     */
    protected $PaymentFilters = null;

    /**
     * @var string $PointOfCommencement
     */
    protected $PointOfCommencement = null;

    /**
     * @var string $RecordSet
     */
    protected $RecordSet = null;

    /**
     * @var boolean $ReturnWebfare
     */
    protected $ReturnWebfare = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var int $TimeoutInSeconds
     */
    protected $TimeoutInSeconds = null;

    /**
     * @var Agent $WebAgent
     */
    protected $WebAgent = null;

    /**
     * @var XtremePricer $XtremePricerConfig
     */
    protected $XtremePricerConfig = null;

    /**
     * @param SourceModuleEnum $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
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
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setAllotmentConfig($AllotmentConfig)
    {
      $this->AllotmentConfig = $AllotmentConfig;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowSurcharge()
    {
      return $this->AllowSurcharge;
    }

    /**
     * @param boolean $AllowSurcharge
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setAllowSurcharge($AllowSurcharge)
    {
      $this->AllowSurcharge = $AllowSurcharge;
      return $this;
    }

    /**
     * @return AvailabilitySearchModeEnum
     */
    public function getAvailabilitySearchMode()
    {
      return $this->AvailabilitySearchMode;
    }

    /**
     * @param AvailabilitySearchModeEnum $AvailabilitySearchMode
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setAvailabilitySearchMode($AvailabilitySearchMode)
    {
      $this->AvailabilitySearchMode = $AvailabilitySearchMode;
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
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return AvailabilityRequestCharter
     */
    public function getCharter()
    {
      return $this->Charter;
    }

    /**
     * @param AvailabilityRequestCharter $Charter
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setCharter($Charter)
    {
      $this->Charter = $Charter;
      return $this;
    }

    /**
     * @return CheckAvailabilityTypeEnum
     */
    public function getCheckAvailability()
    {
      return $this->CheckAvailability;
    }

    /**
     * @param CheckAvailabilityTypeEnum $CheckAvailability
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setCheckAvailability($CheckAvailability)
    {
      $this->CheckAvailability = $CheckAvailability;
      return $this;
    }

    /**
     * @return int
     */
    public function getCheckDaysAhead()
    {
      return $this->CheckDaysAhead;
    }

    /**
     * @param int $CheckDaysAhead
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setCheckDaysAhead($CheckDaysAhead)
    {
      $this->CheckDaysAhead = $CheckDaysAhead;
      return $this;
    }

    /**
     * @return int
     */
    public function getCheckDaysBack()
    {
      return $this->CheckDaysBack;
    }

    /**
     * @param int $CheckDaysBack
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setCheckDaysBack($CheckDaysBack)
    {
      $this->CheckDaysBack = $CheckDaysBack;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfCommencement()
    {
      if ($this->DateOfCommencement == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateOfCommencement);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateOfCommencement
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setDateOfCommencement(\DateTime $DateOfCommencement = null)
    {
      if ($DateOfCommencement == null) {
       $this->DateOfCommencement = null;
      } else {
        $this->DateOfCommencement = $DateOfCommencement->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoAllowWaitlist()
    {
      return $this->DoAllowWaitlist;
    }

    /**
     * @param boolean $DoAllowWaitlist
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setDoAllowWaitlist($DoAllowWaitlist)
    {
      $this->DoAllowWaitlist = $DoAllowWaitlist;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoReturnAvailString()
    {
      return $this->DoReturnAvailString;
    }

    /**
     * @param boolean $DoReturnAvailString
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setDoReturnAvailString($DoReturnAvailString)
    {
      $this->DoReturnAvailString = $DoReturnAvailString;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoReturnSeats()
    {
      return $this->DoReturnSeats;
    }

    /**
     * @param boolean $DoReturnSeats
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setDoReturnSeats($DoReturnSeats)
    {
      $this->DoReturnSeats = $DoReturnSeats;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDoReturnSoldFlights()
    {
      return $this->DoReturnSoldFlights;
    }

    /**
     * @param boolean $DoReturnSoldFlights
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setDoReturnSoldFlights($DoReturnSoldFlights)
    {
      $this->DoReturnSoldFlights = $DoReturnSoldFlights;
      return $this;
    }

    /**
     * @return EnhancedFeederSearch
     */
    public function getEnhancedFeederSearchConfig()
    {
      return $this->EnhancedFeederSearchConfig;
    }

    /**
     * @param EnhancedFeederSearch $EnhancedFeederSearchConfig
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setEnhancedFeederSearchConfig($EnhancedFeederSearchConfig)
    {
      $this->EnhancedFeederSearchConfig = $EnhancedFeederSearchConfig;
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
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setFarebase($Farebase)
    {
      $this->Farebase = $Farebase;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFullAvailibility()
    {
      return $this->FullAvailibility;
    }

    /**
     * @param boolean $FullAvailibility
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setFullAvailibility($FullAvailibility)
    {
      $this->FullAvailibility = $FullAvailibility;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasExtraInfo()
    {
      return $this->HasExtraInfo;
    }

    /**
     * @param boolean $HasExtraInfo
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setHasExtraInfo($HasExtraInfo)
    {
      $this->HasExtraInfo = $HasExtraInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDirectOnly()
    {
      return $this->IsDirectOnly;
    }

    /**
     * @param boolean $IsDirectOnly
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setIsDirectOnly($IsDirectOnly)
    {
      $this->IsDirectOnly = $IsDirectOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFixedStay()
    {
      return $this->IsFixedStay;
    }

    /**
     * @param boolean $IsFixedStay
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setIsFixedStay($IsFixedStay)
    {
      $this->IsFixedStay = $IsFixedStay;
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
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return ArrayOfAvailabilityRequestLegType
     */
    public function getLegType()
    {
      return $this->LegType;
    }

    /**
     * @param ArrayOfAvailabilityRequestLegType $LegType
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setLegType($LegType)
    {
      $this->LegType = $LegType;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxAlternatives()
    {
      return $this->MaxAlternatives;
    }

    /**
     * @param int $MaxAlternatives
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setMaxAlternatives($MaxAlternatives)
    {
      $this->MaxAlternatives = $MaxAlternatives;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPassengerFare()
    {
      return $this->PassengerFare;
    }

    /**
     * @param SharedPrice $PassengerFare
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setPassengerFare($PassengerFare)
    {
      $this->PassengerFare = $PassengerFare;
      return $this;
    }

    /**
     * @return ArrayOfAvailabilityRequestPassengerType
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param ArrayOfAvailabilityRequestPassengerType $PassengerType
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return ArrayOfPaymentFilterDetails
     */
    public function getPaymentFilters()
    {
      return $this->PaymentFilters;
    }

    /**
     * @param ArrayOfPaymentFilterDetails $PaymentFilters
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setPaymentFilters($PaymentFilters)
    {
      $this->PaymentFilters = $PaymentFilters;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointOfCommencement()
    {
      return $this->PointOfCommencement;
    }

    /**
     * @param string $PointOfCommencement
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setPointOfCommencement($PointOfCommencement)
    {
      $this->PointOfCommencement = $PointOfCommencement;
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
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setRecordSet($RecordSet)
    {
      $this->RecordSet = $RecordSet;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnWebfare()
    {
      return $this->ReturnWebfare;
    }

    /**
     * @param boolean $ReturnWebfare
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setReturnWebfare($ReturnWebfare)
    {
      $this->ReturnWebfare = $ReturnWebfare;
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
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return int
     */
    public function getTimeoutInSeconds()
    {
      return $this->TimeoutInSeconds;
    }

    /**
     * @param int $TimeoutInSeconds
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setTimeoutInSeconds($TimeoutInSeconds)
    {
      $this->TimeoutInSeconds = $TimeoutInSeconds;
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
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setWebAgent($WebAgent)
    {
      $this->WebAgent = $WebAgent;
      return $this;
    }

    /**
     * @return XtremePricer
     */
    public function getXtremePricerConfig()
    {
      return $this->XtremePricerConfig;
    }

    /**
     * @param XtremePricer $XtremePricerConfig
     * @return \App\models\ATSFlight\AvailabilityRequestData
     */
    public function setXtremePricerConfig($XtremePricerConfig)
    {
      $this->XtremePricerConfig = $XtremePricerConfig;
      return $this;
    }

}
