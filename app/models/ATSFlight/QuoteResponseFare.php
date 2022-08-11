<?php

namespace App\models\ATSFlight;

class QuoteResponseFare
{

    /**
     * @var ArrayOfCancelation $CancelationInfo
     */
    protected $CancelationInfo = null;

    /**
     * @var string $ConsoCode
     */
    protected $ConsoCode = null;

    /**
     * @var string $CorporateFareAccessCode
     */
    protected $CorporateFareAccessCode = null;

    /**
     * @var ArrayOfQuoteResponseExchangeRate $ExchangeRates
     */
    protected $ExchangeRates = null;

    /**
     * @var FareSubTypeEnum $FareSubType
     */
    protected $FareSubType = null;

    /**
     * @var string $FareType
     */
    protected $FareType = null;

    /**
     * @var FareTypeData $FareTypeDetails
     */
    protected $FareTypeDetails = null;

    /**
     * @var string $ID
     */
    protected $ID = null;

    /**
     * @var ArrayOfQuoteResponseLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var string $OwnerCode
     */
    protected $OwnerCode = null;

    /**
     * @var ArrayOfQuoteResponsePassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var ArrayOfDetailedPaymentMethod $PaymentMethods
     */
    protected $PaymentMethods = null;

    /**
     * @var string $PlatingCarrier
     */
    protected $PlatingCarrier = null;

    /**
     * @var string $PointOfTurnAround
     */
    protected $PointOfTurnAround = null;

    /**
     * @var PermittedFareTypeEnum $QuoteFareType
     */
    protected $QuoteFareType = null;

    /**
     * @var QuoteResponseRuleData $RuleInformation
     */
    protected $RuleInformation = null;

    /**
     * @var string $TourCode
     */
    protected $TourCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCancelation
     */
    public function getCancelationInfo()
    {
      return $this->CancelationInfo;
    }

    /**
     * @param ArrayOfCancelation $CancelationInfo
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setCancelationInfo($CancelationInfo)
    {
      $this->CancelationInfo = $CancelationInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getConsoCode()
    {
      return $this->ConsoCode;
    }

    /**
     * @param string $ConsoCode
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setConsoCode($ConsoCode)
    {
      $this->ConsoCode = $ConsoCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCorporateFareAccessCode()
    {
      return $this->CorporateFareAccessCode;
    }

    /**
     * @param string $CorporateFareAccessCode
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setCorporateFareAccessCode($CorporateFareAccessCode)
    {
      $this->CorporateFareAccessCode = $CorporateFareAccessCode;
      return $this;
    }

    /**
     * @return ArrayOfQuoteResponseExchangeRate
     */
    public function getExchangeRates()
    {
      return $this->ExchangeRates;
    }

    /**
     * @param ArrayOfQuoteResponseExchangeRate $ExchangeRates
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setExchangeRates($ExchangeRates)
    {
      $this->ExchangeRates = $ExchangeRates;
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
     * @return \App\models\ATSFlight\QuoteResponseFare
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
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return FareTypeData
     */
    public function getFareTypeDetails()
    {
      return $this->FareTypeDetails;
    }

    /**
     * @param FareTypeData $FareTypeDetails
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setFareTypeDetails($FareTypeDetails)
    {
      $this->FareTypeDetails = $FareTypeDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param string $ID
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return ArrayOfQuoteResponseLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfQuoteResponseLeg $Legs
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return ModuleResponseData
     */
    public function getModuleInfo()
    {
      return $this->ModuleInfo;
    }

    /**
     * @param ModuleResponseData $ModuleInfo
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getOwnerCode()
    {
      return $this->OwnerCode;
    }

    /**
     * @param string $OwnerCode
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setOwnerCode($OwnerCode)
    {
      $this->OwnerCode = $OwnerCode;
      return $this;
    }

    /**
     * @return ArrayOfQuoteResponsePassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfQuoteResponsePassenger $Passengers
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return ArrayOfDetailedPaymentMethod
     */
    public function getPaymentMethods()
    {
      return $this->PaymentMethods;
    }

    /**
     * @param ArrayOfDetailedPaymentMethod $PaymentMethods
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setPaymentMethods($PaymentMethods)
    {
      $this->PaymentMethods = $PaymentMethods;
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
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointOfTurnAround()
    {
      return $this->PointOfTurnAround;
    }

    /**
     * @param string $PointOfTurnAround
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setPointOfTurnAround($PointOfTurnAround)
    {
      $this->PointOfTurnAround = $PointOfTurnAround;
      return $this;
    }

    /**
     * @return PermittedFareTypeEnum
     */
    public function getQuoteFareType()
    {
      return $this->QuoteFareType;
    }

    /**
     * @param PermittedFareTypeEnum $QuoteFareType
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setQuoteFareType($QuoteFareType)
    {
      $this->QuoteFareType = $QuoteFareType;
      return $this;
    }

    /**
     * @return QuoteResponseRuleData
     */
    public function getRuleInformation()
    {
      return $this->RuleInformation;
    }

    /**
     * @param QuoteResponseRuleData $RuleInformation
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setRuleInformation($RuleInformation)
    {
      $this->RuleInformation = $RuleInformation;
      return $this;
    }

    /**
     * @return string
     */
    public function getTourCode()
    {
      return $this->TourCode;
    }

    /**
     * @param string $TourCode
     * @return \App\models\ATSFlight\QuoteResponseFare
     */
    public function setTourCode($TourCode)
    {
      $this->TourCode = $TourCode;
      return $this;
    }

}
