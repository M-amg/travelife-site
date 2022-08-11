<?php

namespace App\models\ATSFlight;

class QuoteRequestData
{

    /**
     * @var boolean $AddSurchargeToFare
     */
    protected $AddSurchargeToFare = null;

    /**
     * @var AllotmentAccount $AllotmentAccountData
     */
    protected $AllotmentAccountData = null;

    /**
     * @var boolean $AllowBaggageTranslation
     */
    protected $AllowBaggageTranslation = null;

    /**
     * @var boolean $AllowRebook
     */
    protected $AllowRebook = null;

    /**
     * @var boolean $AutoRebook
     */
    protected $AutoRebook = null;

    /**
     * @var BestBuyEnum $BestBuyMode
     */
    protected $BestBuyMode = null;

    /**
     * @var \DateTime $BookingDate
     */
    protected $BookingDate = null;

    /**
     * @var string $BrandName
     */
    protected $BrandName = null;

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var CalculationData $Calculation
     */
    protected $Calculation = null;

    /**
     * @var ArrayOfstring $CorporateFareAccessCodes
     */
    protected $CorporateFareAccessCodes = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $CustomerLastName
     */
    protected $CustomerLastName = null;

    /**
     * @var int $DeterminePointOfTurnaround
     */
    protected $DeterminePointOfTurnaround = null;

    /**
     * @var \DateTime $EarliestTicketingDate
     */
    protected $EarliestTicketingDate = null;

    /**
     * @var float $FarePriceMaximumTolerance
     */
    protected $FarePriceMaximumTolerance = null;

    /**
     * @var int $FarePricePercentageTolerance
     */
    protected $FarePricePercentageTolerance = null;

    /**
     * @var string $FareSelectionCurrency
     */
    protected $FareSelectionCurrency = null;

    /**
     * @var FareSubTypeEnum $FareSubType
     */
    protected $FareSubType = null;

    /**
     * @var string $FareType
     */
    protected $FareType = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var ArrayOfQuoteRequestLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var eNFQEOptions $NFQEOptions
     */
    protected $NFQEOptions = null;

    /**
     * @var ArrayOfQuoteRequestNetData $NetFareData
     */
    protected $NetFareData = null;

    /**
     * @var ArrayOfQuoteRequestPasType $Passengers
     */
    protected $Passengers = null;

    /**
     * @var PermittedFareTypeEnum $PermittedFareType
     */
    protected $PermittedFareType = null;

    /**
     * @var string $PlatingCarrier
     */
    protected $PlatingCarrier = null;

    /**
     * @var string $PublishedTaxOverrideDBCode
     */
    protected $PublishedTaxOverrideDBCode = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

    /**
     * @var string $Recordset
     */
    protected $Recordset = null;

    /**
     * @var boolean $ReturnTaxes
     */
    protected $ReturnTaxes = null;

    /**
     * @var boolean $ReturnTicketData
     */
    protected $ReturnTicketData = null;

    /**
     * @var ArrayOfstring $SegmentNumbers
     */
    protected $SegmentNumbers = null;

    /**
     * @var ResultFareFlagEnum $SortByFlag
     */
    protected $SortByFlag = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var DiscountEnum $SpecialDiscounts
     */
    protected $SpecialDiscounts = null;

    /**
     * @var boolean $SplitCorporateRequests
     */
    protected $SplitCorporateRequests = null;

    /**
     * @var StoreFareQuoteTypeEnum $StoreFareQuoteType
     */
    protected $StoreFareQuoteType = null;

    /**
     * @var TariffSubTypeEnum $TariffSubType
     */
    protected $TariffSubType = null;

    /**
     * @var TariffTypeEnum $TariffType
     */
    protected $TariffType = null;

    /**
     * @var TicketingTypeEnum $TicketingType
     */
    protected $TicketingType = null;

    /**
     * @var int $TimeOut
     */
    protected $TimeOut = null;

    /**
     * @var QuoteRequestWebFareData $WebFareData
     */
    protected $WebFareData = null;

    /**
     * @param SourceModuleEnum $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
    }

    /**
     * @return boolean
     */
    public function getAddSurchargeToFare()
    {
      return $this->AddSurchargeToFare;
    }

    /**
     * @param boolean $AddSurchargeToFare
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setAddSurchargeToFare($AddSurchargeToFare)
    {
      $this->AddSurchargeToFare = $AddSurchargeToFare;
      return $this;
    }

    /**
     * @return AllotmentAccount
     */
    public function getAllotmentAccountData()
    {
      return $this->AllotmentAccountData;
    }

    /**
     * @param AllotmentAccount $AllotmentAccountData
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setAllotmentAccountData($AllotmentAccountData)
    {
      $this->AllotmentAccountData = $AllotmentAccountData;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowBaggageTranslation()
    {
      return $this->AllowBaggageTranslation;
    }

    /**
     * @param boolean $AllowBaggageTranslation
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setAllowBaggageTranslation($AllowBaggageTranslation)
    {
      $this->AllowBaggageTranslation = $AllowBaggageTranslation;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowRebook()
    {
      return $this->AllowRebook;
    }

    /**
     * @param boolean $AllowRebook
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setAllowRebook($AllowRebook)
    {
      $this->AllowRebook = $AllowRebook;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoRebook()
    {
      return $this->AutoRebook;
    }

    /**
     * @param boolean $AutoRebook
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setAutoRebook($AutoRebook)
    {
      $this->AutoRebook = $AutoRebook;
      return $this;
    }

    /**
     * @return BestBuyEnum
     */
    public function getBestBuyMode()
    {
      return $this->BestBuyMode;
    }

    /**
     * @param BestBuyEnum $BestBuyMode
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setBestBuyMode($BestBuyMode)
    {
      $this->BestBuyMode = $BestBuyMode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getBookingDate()
    {
      if ($this->BookingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->BookingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $BookingDate
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setBookingDate(\DateTime $BookingDate = null)
    {
      if ($BookingDate == null) {
       $this->BookingDate = null;
      } else {
        $this->BookingDate = $BookingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandName()
    {
      return $this->BrandName;
    }

    /**
     * @param string $BrandName
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setBrandName($BrandName)
    {
      $this->BrandName = $BrandName;
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
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
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
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setCalculation($Calculation)
    {
      $this->Calculation = $Calculation;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCorporateFareAccessCodes()
    {
      return $this->CorporateFareAccessCodes;
    }

    /**
     * @param ArrayOfstring $CorporateFareAccessCodes
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setCorporateFareAccessCodes($CorporateFareAccessCodes)
    {
      $this->CorporateFareAccessCodes = $CorporateFareAccessCodes;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerLastName()
    {
      return $this->CustomerLastName;
    }

    /**
     * @param string $CustomerLastName
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setCustomerLastName($CustomerLastName)
    {
      $this->CustomerLastName = $CustomerLastName;
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
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setDeterminePointOfTurnaround($DeterminePointOfTurnaround)
    {
      $this->DeterminePointOfTurnaround = $DeterminePointOfTurnaround;
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
     * @return \App\models\ATSFlight\QuoteRequestData
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
     * @return float
     */
    public function getFarePriceMaximumTolerance()
    {
      return $this->FarePriceMaximumTolerance;
    }

    /**
     * @param float $FarePriceMaximumTolerance
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setFarePriceMaximumTolerance($FarePriceMaximumTolerance)
    {
      $this->FarePriceMaximumTolerance = $FarePriceMaximumTolerance;
      return $this;
    }

    /**
     * @return int
     */
    public function getFarePricePercentageTolerance()
    {
      return $this->FarePricePercentageTolerance;
    }

    /**
     * @param int $FarePricePercentageTolerance
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setFarePricePercentageTolerance($FarePricePercentageTolerance)
    {
      $this->FarePricePercentageTolerance = $FarePricePercentageTolerance;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareSelectionCurrency()
    {
      return $this->FareSelectionCurrency;
    }

    /**
     * @param string $FareSelectionCurrency
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setFareSelectionCurrency($FareSelectionCurrency)
    {
      $this->FareSelectionCurrency = $FareSelectionCurrency;
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
     * @return \App\models\ATSFlight\QuoteRequestData
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
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
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
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return ArrayOfQuoteRequestLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfQuoteRequestLeg $Legs
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return eNFQEOptions
     */
    public function getNFQEOptions()
    {
      return $this->NFQEOptions;
    }

    /**
     * @param eNFQEOptions $NFQEOptions
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setNFQEOptions($NFQEOptions)
    {
      $this->NFQEOptions = $NFQEOptions;
      return $this;
    }

    /**
     * @return ArrayOfQuoteRequestNetData
     */
    public function getNetFareData()
    {
      return $this->NetFareData;
    }

    /**
     * @param ArrayOfQuoteRequestNetData $NetFareData
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setNetFareData($NetFareData)
    {
      $this->NetFareData = $NetFareData;
      return $this;
    }

    /**
     * @return ArrayOfQuoteRequestPasType
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfQuoteRequestPasType $Passengers
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return PermittedFareTypeEnum
     */
    public function getPermittedFareType()
    {
      return $this->PermittedFareType;
    }

    /**
     * @param PermittedFareTypeEnum $PermittedFareType
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setPermittedFareType($PermittedFareType)
    {
      $this->PermittedFareType = $PermittedFareType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlatingCarrier()
    {
      return $this->PlatingCarrier;
    }

    /**
     * @param string $PlatingCarrier
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublishedTaxOverrideDBCode()
    {
      return $this->PublishedTaxOverrideDBCode;
    }

    /**
     * @param string $PublishedTaxOverrideDBCode
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setPublishedTaxOverrideDBCode($PublishedTaxOverrideDBCode)
    {
      $this->PublishedTaxOverrideDBCode = $PublishedTaxOverrideDBCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordLocator()
    {
      return $this->RecordLocator;
    }

    /**
     * @param string $RecordLocator
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
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
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setRecordset($Recordset)
    {
      $this->Recordset = $Recordset;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnTaxes()
    {
      return $this->ReturnTaxes;
    }

    /**
     * @param boolean $ReturnTaxes
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setReturnTaxes($ReturnTaxes)
    {
      $this->ReturnTaxes = $ReturnTaxes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnTicketData()
    {
      return $this->ReturnTicketData;
    }

    /**
     * @param boolean $ReturnTicketData
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setReturnTicketData($ReturnTicketData)
    {
      $this->ReturnTicketData = $ReturnTicketData;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getSegmentNumbers()
    {
      return $this->SegmentNumbers;
    }

    /**
     * @param ArrayOfstring $SegmentNumbers
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setSegmentNumbers($SegmentNumbers)
    {
      $this->SegmentNumbers = $SegmentNumbers;
      return $this;
    }

    /**
     * @return ResultFareFlagEnum
     */
    public function getSortByFlag()
    {
      return $this->SortByFlag;
    }

    /**
     * @param ResultFareFlagEnum $SortByFlag
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setSortByFlag($SortByFlag)
    {
      $this->SortByFlag = $SortByFlag;
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
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
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
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setSpecialDiscounts($SpecialDiscounts)
    {
      $this->SpecialDiscounts = $SpecialDiscounts;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSplitCorporateRequests()
    {
      return $this->SplitCorporateRequests;
    }

    /**
     * @param boolean $SplitCorporateRequests
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setSplitCorporateRequests($SplitCorporateRequests)
    {
      $this->SplitCorporateRequests = $SplitCorporateRequests;
      return $this;
    }

    /**
     * @return StoreFareQuoteTypeEnum
     */
    public function getStoreFareQuoteType()
    {
      return $this->StoreFareQuoteType;
    }

    /**
     * @param StoreFareQuoteTypeEnum $StoreFareQuoteType
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setStoreFareQuoteType($StoreFareQuoteType)
    {
      $this->StoreFareQuoteType = $StoreFareQuoteType;
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
     * @return \App\models\ATSFlight\QuoteRequestData
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
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setTariffType($TariffType)
    {
      $this->TariffType = $TariffType;
      return $this;
    }

    /**
     * @return TicketingTypeEnum
     */
    public function getTicketingType()
    {
      return $this->TicketingType;
    }

    /**
     * @param TicketingTypeEnum $TicketingType
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setTicketingType($TicketingType)
    {
      $this->TicketingType = $TicketingType;
      return $this;
    }

    /**
     * @return int
     */
    public function getTimeOut()
    {
      return $this->TimeOut;
    }

    /**
     * @param int $TimeOut
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setTimeOut($TimeOut)
    {
      $this->TimeOut = $TimeOut;
      return $this;
    }

    /**
     * @return QuoteRequestWebFareData
     */
    public function getWebFareData()
    {
      return $this->WebFareData;
    }

    /**
     * @param QuoteRequestWebFareData $WebFareData
     * @return \App\models\ATSFlight\QuoteRequestData
     */
    public function setWebFareData($WebFareData)
    {
      $this->WebFareData = $WebFareData;
      return $this;
    }

}
