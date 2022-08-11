<?php

namespace App\models\ATSFlight;

class BookResponseData
{

    /**
     * @var ArrayOfstring $AdditionalInformation
     */
    protected $AdditionalInformation = null;

    /**
     * @var BookResponseBookingOnHold $BookingOnHold
     */
    protected $BookingOnHold = null;

    /**
     * @var CreditCardData $CreatedPayment
     */
    protected $CreatedPayment = null;

    /**
     * @var string $CreditCardApprovalCode
     */
    protected $CreditCardApprovalCode = null;

    /**
     * @var string $CustomerLastName
     */
    protected $CustomerLastName = null;

    /**
     * @var string $CustomerReferenceNumber
     */
    protected $CustomerReferenceNumber = null;

    /**
     * @var SharedPrice $EquivalentTotalPrice
     */
    protected $EquivalentTotalPrice = null;

    /**
     * @var boolean $IsBookingOnHold
     */
    protected $IsBookingOnHold = null;

    /**
     * @var ArrayOfBookResponseLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var ArrayOfstring $NotesAndInformation
     */
    protected $NotesAndInformation = null;

    /**
     * @var string $OnlineCheckinLink
     */
    protected $OnlineCheckinLink = null;

    /**
     * @var ArrayOfBookResponsePassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var ArrayOfstring $PaymentTokens
     */
    protected $PaymentTokens = null;

    /**
     * @var string $Queue
     */
    protected $Queue = null;

    /**
     * @var string $RecordCounter
     */
    protected $RecordCounter = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var string $Session
     */
    protected $Session = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var ArrayOfDiscountResponseData $SpecialDiscounts
     */
    protected $SpecialDiscounts = null;

    /**
     * @var BookResponseSurcharges $Surcharge
     */
    protected $Surcharge = null;

    /**
     * @var SharedPrice $Tax
     */
    protected $Tax = null;

    /**
     * @var string $TicketOnDepartureInfo
     */
    protected $TicketOnDepartureInfo = null;

    /**
     * @var SharedPrice $TotalPrice
     */
    protected $TotalPrice = null;

    /**
     * @var CRS $UsedCRSProfile
     */
    protected $UsedCRSProfile = null;

    /**
     * @var string $UsedEmailAddress
     */
    protected $UsedEmailAddress = null;

    /**
     * @var string $Warnings
     */
    protected $Warnings = null;

    /**
     * @var string $WebFareConfirmationPage
     */
    protected $WebFareConfirmationPage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getAdditionalInformation()
    {
      return $this->AdditionalInformation;
    }

    /**
     * @param ArrayOfstring $AdditionalInformation
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setAdditionalInformation($AdditionalInformation)
    {
      $this->AdditionalInformation = $AdditionalInformation;
      return $this;
    }

    /**
     * @return BookResponseBookingOnHold
     */
    public function getBookingOnHold()
    {
      return $this->BookingOnHold;
    }

    /**
     * @param BookResponseBookingOnHold $BookingOnHold
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setBookingOnHold($BookingOnHold)
    {
      $this->BookingOnHold = $BookingOnHold;
      return $this;
    }

    /**
     * @return CreditCardData
     */
    public function getCreatedPayment()
    {
      return $this->CreatedPayment;
    }

    /**
     * @param CreditCardData $CreatedPayment
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setCreatedPayment($CreatedPayment)
    {
      $this->CreatedPayment = $CreatedPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardApprovalCode()
    {
      return $this->CreditCardApprovalCode;
    }

    /**
     * @param string $CreditCardApprovalCode
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setCreditCardApprovalCode($CreditCardApprovalCode)
    {
      $this->CreditCardApprovalCode = $CreditCardApprovalCode;
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
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setCustomerLastName($CustomerLastName)
    {
      $this->CustomerLastName = $CustomerLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReferenceNumber()
    {
      return $this->CustomerReferenceNumber;
    }

    /**
     * @param string $CustomerReferenceNumber
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setCustomerReferenceNumber($CustomerReferenceNumber)
    {
      $this->CustomerReferenceNumber = $CustomerReferenceNumber;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTotalPrice()
    {
      return $this->EquivalentTotalPrice;
    }

    /**
     * @param SharedPrice $EquivalentTotalPrice
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setEquivalentTotalPrice($EquivalentTotalPrice)
    {
      $this->EquivalentTotalPrice = $EquivalentTotalPrice;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBookingOnHold()
    {
      return $this->IsBookingOnHold;
    }

    /**
     * @param boolean $IsBookingOnHold
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setIsBookingOnHold($IsBookingOnHold)
    {
      $this->IsBookingOnHold = $IsBookingOnHold;
      return $this;
    }

    /**
     * @return ArrayOfBookResponseLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfBookResponseLeg $Legs
     * @return \App\models\ATSFlight\BookResponseData
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
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getNotesAndInformation()
    {
      return $this->NotesAndInformation;
    }

    /**
     * @param ArrayOfstring $NotesAndInformation
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setNotesAndInformation($NotesAndInformation)
    {
      $this->NotesAndInformation = $NotesAndInformation;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnlineCheckinLink()
    {
      return $this->OnlineCheckinLink;
    }

    /**
     * @param string $OnlineCheckinLink
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setOnlineCheckinLink($OnlineCheckinLink)
    {
      $this->OnlineCheckinLink = $OnlineCheckinLink;
      return $this;
    }

    /**
     * @return ArrayOfBookResponsePassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfBookResponsePassenger $Passengers
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getPaymentTokens()
    {
      return $this->PaymentTokens;
    }

    /**
     * @param ArrayOfstring $PaymentTokens
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setPaymentTokens($PaymentTokens)
    {
      $this->PaymentTokens = $PaymentTokens;
      return $this;
    }

    /**
     * @return string
     */
    public function getQueue()
    {
      return $this->Queue;
    }

    /**
     * @param string $Queue
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordCounter()
    {
      return $this->RecordCounter;
    }

    /**
     * @param string $RecordCounter
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setRecordCounter($RecordCounter)
    {
      $this->RecordCounter = $RecordCounter;
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
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
      return $this;
    }

    /**
     * @return ResponseInfoDetails
     */
    public function getResponseInfo()
    {
      return $this->ResponseInfo;
    }

    /**
     * @param ResponseInfoDetails $ResponseInfo
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSession()
    {
      return $this->Session;
    }

    /**
     * @param string $Session
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setSession($Session)
    {
      $this->Session = $Session;
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
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return ArrayOfDiscountResponseData
     */
    public function getSpecialDiscounts()
    {
      return $this->SpecialDiscounts;
    }

    /**
     * @param ArrayOfDiscountResponseData $SpecialDiscounts
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setSpecialDiscounts($SpecialDiscounts)
    {
      $this->SpecialDiscounts = $SpecialDiscounts;
      return $this;
    }

    /**
     * @return BookResponseSurcharges
     */
    public function getSurcharge()
    {
      return $this->Surcharge;
    }

    /**
     * @param BookResponseSurcharges $Surcharge
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setSurcharge($Surcharge)
    {
      $this->Surcharge = $Surcharge;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTax()
    {
      return $this->Tax;
    }

    /**
     * @param SharedPrice $Tax
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setTax($Tax)
    {
      $this->Tax = $Tax;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketOnDepartureInfo()
    {
      return $this->TicketOnDepartureInfo;
    }

    /**
     * @param string $TicketOnDepartureInfo
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setTicketOnDepartureInfo($TicketOnDepartureInfo)
    {
      $this->TicketOnDepartureInfo = $TicketOnDepartureInfo;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalPrice()
    {
      return $this->TotalPrice;
    }

    /**
     * @param SharedPrice $TotalPrice
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setTotalPrice($TotalPrice)
    {
      $this->TotalPrice = $TotalPrice;
      return $this;
    }

    /**
     * @return CRS
     */
    public function getUsedCRSProfile()
    {
      return $this->UsedCRSProfile;
    }

    /**
     * @param CRS $UsedCRSProfile
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setUsedCRSProfile($UsedCRSProfile)
    {
      $this->UsedCRSProfile = $UsedCRSProfile;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsedEmailAddress()
    {
      return $this->UsedEmailAddress;
    }

    /**
     * @param string $UsedEmailAddress
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setUsedEmailAddress($UsedEmailAddress)
    {
      $this->UsedEmailAddress = $UsedEmailAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarnings()
    {
      return $this->Warnings;
    }

    /**
     * @param string $Warnings
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setWarnings($Warnings)
    {
      $this->Warnings = $Warnings;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebFareConfirmationPage()
    {
      return $this->WebFareConfirmationPage;
    }

    /**
     * @param string $WebFareConfirmationPage
     * @return \App\models\ATSFlight\BookResponseData
     */
    public function setWebFareConfirmationPage($WebFareConfirmationPage)
    {
      $this->WebFareConfirmationPage = $WebFareConfirmationPage;
      return $this;
    }

}
