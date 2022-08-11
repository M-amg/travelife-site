<?php

namespace App\models\ATSFlight;

class FareRequestNet
{

    /**
     * @var boolean $AllowClassMix
     */
    protected $AllowClassMix = null;

    /**
     * @var AvailabilitySearchModeEnum $AvailabilitySearchMode
     */
    protected $AvailabilitySearchMode = null;

    /**
     * @var string $CalcModel
     */
    protected $CalcModel = null;

    /**
     * @var CheckAvailabilityTypeEnum $CheckAvailability
     */
    protected $CheckAvailability = null;

    /**
     * @var CheckTaxEnum $CheckTax
     */
    protected $CheckTax = null;

    /**
     * @var int $ConcurrentAvailabilities
     */
    protected $ConcurrentAvailabilities = null;

    /**
     * @var ArrayOfstring $DatabaseRecordsets
     */
    protected $DatabaseRecordsets = null;

    /**
     * @var int $DeterminePointOfTurnaround
     */
    protected $DeterminePointOfTurnaround = null;

    /**
     * @var EnhancedFeederSearch $EnhancedFeederSearchConfig
     */
    protected $EnhancedFeederSearchConfig = null;

    /**
     * @var boolean $FillWithPublishedFares
     */
    protected $FillWithPublishedFares = null;

    /**
     * @var string $MatchCodes
     */
    protected $MatchCodes = null;

    /**
     * @var int $MaximumConnections
     */
    protected $MaximumConnections = null;

    /**
     * @var int $MaximumNumberOfNetFares
     */
    protected $MaximumNumberOfNetFares = null;

    /**
     * @var ArrayOfstring $NetFareCodes
     */
    protected $NetFareCodes = null;

    /**
     * @var int $NumberOfNetFares
     */
    protected $NumberOfNetFares = null;

    /**
     * @var boolean $ReturnDirectFlightsOnly
     */
    protected $ReturnDirectFlightsOnly = null;

    /**
     * @var boolean $ReturnFromPathfinder
     */
    protected $ReturnFromPathfinder = null;

    /**
     * @var ReturnNonAvailFaresEnum $ReturnNonAvailFares
     */
    protected $ReturnNonAvailFares = null;

    /**
     * @var boolean $ReturnPartialAvailableFlights
     */
    protected $ReturnPartialAvailableFlights = null;

    /**
     * @var SplitConnectionToFareEnum $SplitConnectionsToFares
     */
    protected $SplitConnectionsToFares = null;

    /**
     * @var int $StartFareNumber
     */
    protected $StartFareNumber = null;

    /**
     * @var TariffSubTypeEnum $TariffSubType
     */
    protected $TariffSubType = null;

    /**
     * @var TariffTypeEnum $TariffType
     */
    protected $TariffType = null;

    /**
     * @var UserDefinedFieldDetailLevelEnum $UserDefinedFieldDetailLevel
     */
    protected $UserDefinedFieldDetailLevel = null;

    /**
     * @var XtremePricer $XtremePricerConfig
     */
    protected $XtremePricerConfig = null;

    /**
     * @param int $MaximumNumberOfNetFares
     * @param int $NumberOfNetFares
     */
    public function __construct($MaximumNumberOfNetFares, $NumberOfNetFares)
    {
      $this->MaximumNumberOfNetFares = $MaximumNumberOfNetFares;
      $this->NumberOfNetFares = $NumberOfNetFares;
    }

    /**
     * @return boolean
     */
    public function getAllowClassMix()
    {
      return $this->AllowClassMix;
    }

    /**
     * @param boolean $AllowClassMix
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setAllowClassMix($AllowClassMix)
    {
      $this->AllowClassMix = $AllowClassMix;
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
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setAvailabilitySearchMode($AvailabilitySearchMode)
    {
      $this->AvailabilitySearchMode = $AvailabilitySearchMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCalcModel()
    {
      return $this->CalcModel;
    }

    /**
     * @param string $CalcModel
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setCalcModel($CalcModel)
    {
      $this->CalcModel = $CalcModel;
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
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setCheckAvailability($CheckAvailability)
    {
      $this->CheckAvailability = $CheckAvailability;
      return $this;
    }

    /**
     * @return CheckTaxEnum
     */
    public function getCheckTax()
    {
      return $this->CheckTax;
    }

    /**
     * @param CheckTaxEnum $CheckTax
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setCheckTax($CheckTax)
    {
      $this->CheckTax = $CheckTax;
      return $this;
    }

    /**
     * @return int
     */
    public function getConcurrentAvailabilities()
    {
      return $this->ConcurrentAvailabilities;
    }

    /**
     * @param int $ConcurrentAvailabilities
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setConcurrentAvailabilities($ConcurrentAvailabilities)
    {
      $this->ConcurrentAvailabilities = $ConcurrentAvailabilities;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getDatabaseRecordsets()
    {
      return $this->DatabaseRecordsets;
    }

    /**
     * @param ArrayOfstring $DatabaseRecordsets
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setDatabaseRecordsets($DatabaseRecordsets)
    {
      $this->DatabaseRecordsets = $DatabaseRecordsets;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeterminePointOfTurnaround()
    {
      return $this->DeterminePointOfTurnaround;
    }

    /**
     * @param int $DeterminePointOfTurnaround
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setDeterminePointOfTurnaround($DeterminePointOfTurnaround)
    {
      $this->DeterminePointOfTurnaround = $DeterminePointOfTurnaround;
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
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setEnhancedFeederSearchConfig($EnhancedFeederSearchConfig)
    {
      $this->EnhancedFeederSearchConfig = $EnhancedFeederSearchConfig;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFillWithPublishedFares()
    {
      return $this->FillWithPublishedFares;
    }

    /**
     * @param boolean $FillWithPublishedFares
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setFillWithPublishedFares($FillWithPublishedFares)
    {
      $this->FillWithPublishedFares = $FillWithPublishedFares;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatchCodes()
    {
      return $this->MatchCodes;
    }

    /**
     * @param string $MatchCodes
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setMatchCodes($MatchCodes)
    {
      $this->MatchCodes = $MatchCodes;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumConnections()
    {
      return $this->MaximumConnections;
    }

    /**
     * @param int $MaximumConnections
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setMaximumConnections($MaximumConnections)
    {
      $this->MaximumConnections = $MaximumConnections;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumNumberOfNetFares()
    {
      return $this->MaximumNumberOfNetFares;
    }

    /**
     * @param int $MaximumNumberOfNetFares
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setMaximumNumberOfNetFares($MaximumNumberOfNetFares)
    {
      $this->MaximumNumberOfNetFares = $MaximumNumberOfNetFares;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getNetFareCodes()
    {
      return $this->NetFareCodes;
    }

    /**
     * @param ArrayOfstring $NetFareCodes
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setNetFareCodes($NetFareCodes)
    {
      $this->NetFareCodes = $NetFareCodes;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfNetFares()
    {
      return $this->NumberOfNetFares;
    }

    /**
     * @param int $NumberOfNetFares
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setNumberOfNetFares($NumberOfNetFares)
    {
      $this->NumberOfNetFares = $NumberOfNetFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnDirectFlightsOnly()
    {
      return $this->ReturnDirectFlightsOnly;
    }

    /**
     * @param boolean $ReturnDirectFlightsOnly
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setReturnDirectFlightsOnly($ReturnDirectFlightsOnly)
    {
      $this->ReturnDirectFlightsOnly = $ReturnDirectFlightsOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnFromPathfinder()
    {
      return $this->ReturnFromPathfinder;
    }

    /**
     * @param boolean $ReturnFromPathfinder
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setReturnFromPathfinder($ReturnFromPathfinder)
    {
      $this->ReturnFromPathfinder = $ReturnFromPathfinder;
      return $this;
    }

    /**
     * @return ReturnNonAvailFaresEnum
     */
    public function getReturnNonAvailFares()
    {
      return $this->ReturnNonAvailFares;
    }

    /**
     * @param ReturnNonAvailFaresEnum $ReturnNonAvailFares
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setReturnNonAvailFares($ReturnNonAvailFares)
    {
      $this->ReturnNonAvailFares = $ReturnNonAvailFares;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnPartialAvailableFlights()
    {
      return $this->ReturnPartialAvailableFlights;
    }

    /**
     * @param boolean $ReturnPartialAvailableFlights
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setReturnPartialAvailableFlights($ReturnPartialAvailableFlights)
    {
      $this->ReturnPartialAvailableFlights = $ReturnPartialAvailableFlights;
      return $this;
    }

    /**
     * @return SplitConnectionToFareEnum
     */
    public function getSplitConnectionsToFares()
    {
      return $this->SplitConnectionsToFares;
    }

    /**
     * @param SplitConnectionToFareEnum $SplitConnectionsToFares
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setSplitConnectionsToFares($SplitConnectionsToFares)
    {
      $this->SplitConnectionsToFares = $SplitConnectionsToFares;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartFareNumber()
    {
      return $this->StartFareNumber;
    }

    /**
     * @param int $StartFareNumber
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setStartFareNumber($StartFareNumber)
    {
      $this->StartFareNumber = $StartFareNumber;
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
     * @return \App\models\ATSFlight\FareRequestNet
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
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setTariffType($TariffType)
    {
      $this->TariffType = $TariffType;
      return $this;
    }

    /**
     * @return UserDefinedFieldDetailLevelEnum
     */
    public function getUserDefinedFieldDetailLevel()
    {
      return $this->UserDefinedFieldDetailLevel;
    }

    /**
     * @param UserDefinedFieldDetailLevelEnum $UserDefinedFieldDetailLevel
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setUserDefinedFieldDetailLevel($UserDefinedFieldDetailLevel)
    {
      $this->UserDefinedFieldDetailLevel = $UserDefinedFieldDetailLevel;
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
     * @return \App\models\ATSFlight\FareRequestNet
     */
    public function setXtremePricerConfig($XtremePricerConfig)
    {
      $this->XtremePricerConfig = $XtremePricerConfig;
      return $this;
    }

}
