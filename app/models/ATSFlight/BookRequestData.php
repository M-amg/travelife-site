<?php

namespace App\models\ATSFlight;

class BookRequestData
{

    /**
     * @var BookRequestBackOffice $BackOffice
     */
    protected $BackOffice = null;

    /**
     * @var BookingOnHoldTypeEnum $BookingOnHold
     */
    protected $BookingOnHold = null;

    /**
     * @var string $CalcModel
     */
    protected $CalcModel = null;

    /**
     * @var BookRequestConfiguration $Configuration
     */
    protected $Configuration = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $EnduserIP
     */
    protected $EnduserIP = null;

    /**
     * @var ArrayOfEnhancedRemark $EnhancedRemarks
     */
    protected $EnhancedRemarks = null;

    /**
     * @var BookRequestFare $Fare
     */
    protected $Fare = null;

    /**
     * @var string $IATANumber
     */
    protected $IATANumber = null;

    /**
     * @var boolean $IgnoreCCError
     */
    protected $IgnoreCCError = null;

    /**
     * @var boolean $IgnoreFlightTimes
     */
    protected $IgnoreFlightTimes = null;

    /**
     * @var ArrayOfBookRequestLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var ArrayOfBookRequestOSI $OSI
     */
    protected $OSI = null;

    /**
     * @var ArrayOfBookRequestPassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var BookRequestPayment $Payment
     */
    protected $Payment = null;

    /**
     * @var PaymentDefinitionData $PaymentData
     */
    protected $PaymentData = null;

    /**
     * @var string $PlatingCarrier
     */
    protected $PlatingCarrier = null;

    /**
     * @var string $RecordSet
     */
    protected $RecordSet = null;

    /**
     * @var ArrayOfBookRequestRemark $RemarkLines
     */
    protected $RemarkLines = null;

    /**
     * @var ArrayOfSKRequestData $SKs
     */
    protected $SKs = null;

    /**
     * @var ArrayOfSSRRequestData $SSRs
     */
    protected $SSRs = null;

    /**
     * @var ArrayOfServiceRequest $Services
     */
    protected $Services = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var ArrayOfDiscountData $SpecialDiscounts
     */
    protected $SpecialDiscounts = null;

    /**
     * @var StoreFareQuoteTypeEnum $StoreFareQuoteType
     */
    protected $StoreFareQuoteType = null;

    /**
     * @var TicketingTypeEnum $TicketingType
     */
    protected $TicketingType = null;

    /**
     * @param SourceModuleEnum $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
    }

    /**
     * @return BookRequestBackOffice
     */
    public function getBackOffice()
    {
      return $this->BackOffice;
    }

    /**
     * @param BookRequestBackOffice $BackOffice
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setBackOffice($BackOffice)
    {
      $this->BackOffice = $BackOffice;
      return $this;
    }

    /**
     * @return BookingOnHoldTypeEnum
     */
    public function getBookingOnHold()
    {
      return $this->BookingOnHold;
    }

    /**
     * @param BookingOnHoldTypeEnum $BookingOnHold
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setBookingOnHold($BookingOnHold)
    {
      $this->BookingOnHold = $BookingOnHold;
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
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setCalcModel($CalcModel)
    {
      $this->CalcModel = $CalcModel;
      return $this;
    }

    /**
     * @return BookRequestConfiguration
     */
    public function getConfiguration()
    {
      return $this->Configuration;
    }

    /**
     * @param BookRequestConfiguration $Configuration
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setConfiguration($Configuration)
    {
      $this->Configuration = $Configuration;
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
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnduserIP()
    {
      return $this->EnduserIP;
    }

    /**
     * @param string $EnduserIP
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setEnduserIP($EnduserIP)
    {
      $this->EnduserIP = $EnduserIP;
      return $this;
    }

    /**
     * @return ArrayOfEnhancedRemark
     */
    public function getEnhancedRemarks()
    {
      return $this->EnhancedRemarks;
    }

    /**
     * @param ArrayOfEnhancedRemark $EnhancedRemarks
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setEnhancedRemarks($EnhancedRemarks)
    {
      $this->EnhancedRemarks = $EnhancedRemarks;
      return $this;
    }

    /**
     * @return BookRequestFare
     */
    public function getFare()
    {
      return $this->Fare;
    }

    /**
     * @param BookRequestFare $Fare
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setFare($Fare)
    {
      $this->Fare = $Fare;
      return $this;
    }

    /**
     * @return string
     */
    public function getIATANumber()
    {
      return $this->IATANumber;
    }

    /**
     * @param string $IATANumber
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIgnoreCCError()
    {
      return $this->IgnoreCCError;
    }

    /**
     * @param boolean $IgnoreCCError
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setIgnoreCCError($IgnoreCCError)
    {
      $this->IgnoreCCError = $IgnoreCCError;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIgnoreFlightTimes()
    {
      return $this->IgnoreFlightTimes;
    }

    /**
     * @param boolean $IgnoreFlightTimes
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setIgnoreFlightTimes($IgnoreFlightTimes)
    {
      $this->IgnoreFlightTimes = $IgnoreFlightTimes;
      return $this;
    }

    /**
     * @return ArrayOfBookRequestLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfBookRequestLeg $Legs
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return ArrayOfBookRequestOSI
     */
    public function getOSI()
    {
      return $this->OSI;
    }

    /**
     * @param ArrayOfBookRequestOSI $OSI
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setOSI($OSI)
    {
      $this->OSI = $OSI;
      return $this;
    }

    /**
     * @return ArrayOfBookRequestPassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfBookRequestPassenger $Passengers
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return BookRequestPayment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param BookRequestPayment $Payment
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return PaymentDefinitionData
     */
    public function getPaymentData()
    {
      return $this->PaymentData;
    }

    /**
     * @param PaymentDefinitionData $PaymentData
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setPaymentData($PaymentData)
    {
      $this->PaymentData = $PaymentData;
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
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
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
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setRecordSet($RecordSet)
    {
      $this->RecordSet = $RecordSet;
      return $this;
    }

    /**
     * @return ArrayOfBookRequestRemark
     */
    public function getRemarkLines()
    {
      return $this->RemarkLines;
    }

    /**
     * @param ArrayOfBookRequestRemark $RemarkLines
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setRemarkLines($RemarkLines)
    {
      $this->RemarkLines = $RemarkLines;
      return $this;
    }

    /**
     * @return ArrayOfSKRequestData
     */
    public function getSKs()
    {
      return $this->SKs;
    }

    /**
     * @param ArrayOfSKRequestData $SKs
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setSKs($SKs)
    {
      $this->SKs = $SKs;
      return $this;
    }

    /**
     * @return ArrayOfSSRRequestData
     */
    public function getSSRs()
    {
      return $this->SSRs;
    }

    /**
     * @param ArrayOfSSRRequestData $SSRs
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setSSRs($SSRs)
    {
      $this->SSRs = $SSRs;
      return $this;
    }

    /**
     * @return ArrayOfServiceRequest
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param ArrayOfServiceRequest $Services
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
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
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return ArrayOfDiscountData
     */
    public function getSpecialDiscounts()
    {
      return $this->SpecialDiscounts;
    }

    /**
     * @param ArrayOfDiscountData $SpecialDiscounts
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setSpecialDiscounts($SpecialDiscounts)
    {
      $this->SpecialDiscounts = $SpecialDiscounts;
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
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setStoreFareQuoteType($StoreFareQuoteType)
    {
      $this->StoreFareQuoteType = $StoreFareQuoteType;
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
     * @return \App\models\ATSFlight\BookRequestData
     */
    public function setTicketingType($TicketingType)
    {
      $this->TicketingType = $TicketingType;
      return $this;
    }

}
