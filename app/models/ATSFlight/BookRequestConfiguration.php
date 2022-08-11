<?php

namespace App\models\ATSFlight;

class BookRequestConfiguration
{

    /**
     * @var ArrayOfstring $AdminEMailAddresses
     */
    protected $AdminEMailAddresses = null;

    /**
     * @var string $AgencyPhone
     */
    protected $AgencyPhone = null;

    /**
     * @var duration $AlarmTimeout
     */
    protected $AlarmTimeout = null;

    /**
     * @var AllotmentAccount $Allotment
     */
    protected $Allotment = null;

    /**
     * @var boolean $AllowSMSNotification
     */
    protected $AllowSMSNotification = null;

    /**
     * @var BookRequestCRSConfiguration $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var CalculationData $Calculation
     */
    protected $Calculation = null;

    /**
     * @var BookRequestCharter $Charter
     */
    protected $Charter = null;

    /**
     * @var string $ClientBusinessPhone
     */
    protected $ClientBusinessPhone = null;

    /**
     * @var string $ClientHomePhone
     */
    protected $ClientHomePhone = null;

    /**
     * @var Contact $DeliveryDetails
     */
    protected $DeliveryDetails = null;

    /**
     * @var \DateTime $EarliestTicketingDate
     */
    protected $EarliestTicketingDate = null;

    /**
     * @var Contact $InvoiceDetails
     */
    protected $InvoiceDetails = null;

    /**
     * @var boolean $IsLiveBooking
     */
    protected $IsLiveBooking = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var SharedPrice $MaximumTolerance
     */
    protected $MaximumTolerance = null;

    /**
     * @var int $PercentageTolerance
     */
    protected $PercentageTolerance = null;

    /**
     * @var string $PublishedTaxOverrideDBCode
     */
    protected $PublishedTaxOverrideDBCode = null;

    /**
     * @var string $RecordSet
     */
    protected $RecordSet = null;

    /**
     * @var boolean $SetPastDateSegment
     */
    protected $SetPastDateSegment = null;

    /**
     * @var \DateTime $TicketingDate
     */
    protected $TicketingDate = null;

    /**
     * @var TicketingDateTypeEnum $TicketingDateType
     */
    protected $TicketingDateType = null;

    /**
     * @var BookRequestWebFare $WebFare
     */
    protected $WebFare = null;

    /**
     * @param TicketingDateTypeEnum $TicketingDateType
     */
    public function __construct($TicketingDateType)
    {
      $this->TicketingDateType = $TicketingDateType;
    }

    /**
     * @return ArrayOfstring
     */
    public function getAdminEMailAddresses()
    {
      return $this->AdminEMailAddresses;
    }

    /**
     * @param ArrayOfstring $AdminEMailAddresses
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setAdminEMailAddresses($AdminEMailAddresses)
    {
      $this->AdminEMailAddresses = $AdminEMailAddresses;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgencyPhone()
    {
      return $this->AgencyPhone;
    }

    /**
     * @param string $AgencyPhone
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setAgencyPhone($AgencyPhone)
    {
      $this->AgencyPhone = $AgencyPhone;
      return $this;
    }

    /**
     * @return duration
     */
    public function getAlarmTimeout()
    {
      return $this->AlarmTimeout;
    }

    /**
     * @param duration $AlarmTimeout
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setAlarmTimeout($AlarmTimeout)
    {
      $this->AlarmTimeout = $AlarmTimeout;
      return $this;
    }

    /**
     * @return AllotmentAccount
     */
    public function getAllotment()
    {
      return $this->Allotment;
    }

    /**
     * @param AllotmentAccount $Allotment
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setAllotment($Allotment)
    {
      $this->Allotment = $Allotment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowSMSNotification()
    {
      return $this->AllowSMSNotification;
    }

    /**
     * @param boolean $AllowSMSNotification
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setAllowSMSNotification($AllowSMSNotification)
    {
      $this->AllowSMSNotification = $AllowSMSNotification;
      return $this;
    }

    /**
     * @return BookRequestCRSConfiguration
     */
    public function getCRSConfig()
    {
      return $this->CRSConfig;
    }

    /**
     * @param BookRequestCRSConfiguration $CRSConfig
     * @return \App\models\ATSFlight\BookRequestConfiguration
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
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setCalculation($Calculation)
    {
      $this->Calculation = $Calculation;
      return $this;
    }

    /**
     * @return BookRequestCharter
     */
    public function getCharter()
    {
      return $this->Charter;
    }

    /**
     * @param BookRequestCharter $Charter
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setCharter($Charter)
    {
      $this->Charter = $Charter;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientBusinessPhone()
    {
      return $this->ClientBusinessPhone;
    }

    /**
     * @param string $ClientBusinessPhone
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setClientBusinessPhone($ClientBusinessPhone)
    {
      $this->ClientBusinessPhone = $ClientBusinessPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientHomePhone()
    {
      return $this->ClientHomePhone;
    }

    /**
     * @param string $ClientHomePhone
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setClientHomePhone($ClientHomePhone)
    {
      $this->ClientHomePhone = $ClientHomePhone;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getDeliveryDetails()
    {
      return $this->DeliveryDetails;
    }

    /**
     * @param Contact $DeliveryDetails
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setDeliveryDetails($DeliveryDetails)
    {
      $this->DeliveryDetails = $DeliveryDetails;
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
     * @return \App\models\ATSFlight\BookRequestConfiguration
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
     * @return Contact
     */
    public function getInvoiceDetails()
    {
      return $this->InvoiceDetails;
    }

    /**
     * @param Contact $InvoiceDetails
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setInvoiceDetails($InvoiceDetails)
    {
      $this->InvoiceDetails = $InvoiceDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLiveBooking()
    {
      return $this->IsLiveBooking;
    }

    /**
     * @param boolean $IsLiveBooking
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setIsLiveBooking($IsLiveBooking)
    {
      $this->IsLiveBooking = $IsLiveBooking;
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
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getMaximumTolerance()
    {
      return $this->MaximumTolerance;
    }

    /**
     * @param SharedPrice $MaximumTolerance
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setMaximumTolerance($MaximumTolerance)
    {
      $this->MaximumTolerance = $MaximumTolerance;
      return $this;
    }

    /**
     * @return int
     */
    public function getPercentageTolerance()
    {
      return $this->PercentageTolerance;
    }

    /**
     * @param int $PercentageTolerance
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setPercentageTolerance($PercentageTolerance)
    {
      $this->PercentageTolerance = $PercentageTolerance;
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
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setPublishedTaxOverrideDBCode($PublishedTaxOverrideDBCode)
    {
      $this->PublishedTaxOverrideDBCode = $PublishedTaxOverrideDBCode;
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
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setRecordSet($RecordSet)
    {
      $this->RecordSet = $RecordSet;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSetPastDateSegment()
    {
      return $this->SetPastDateSegment;
    }

    /**
     * @param boolean $SetPastDateSegment
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setSetPastDateSegment($SetPastDateSegment)
    {
      $this->SetPastDateSegment = $SetPastDateSegment;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTicketingDate()
    {
      if ($this->TicketingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TicketingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TicketingDate
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setTicketingDate(\DateTime $TicketingDate = null)
    {
      if ($TicketingDate == null) {
       $this->TicketingDate = null;
      } else {
        $this->TicketingDate = $TicketingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return TicketingDateTypeEnum
     */
    public function getTicketingDateType()
    {
      return $this->TicketingDateType;
    }

    /**
     * @param TicketingDateTypeEnum $TicketingDateType
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setTicketingDateType($TicketingDateType)
    {
      $this->TicketingDateType = $TicketingDateType;
      return $this;
    }

    /**
     * @return BookRequestWebFare
     */
    public function getWebFare()
    {
      return $this->WebFare;
    }

    /**
     * @param BookRequestWebFare $WebFare
     * @return \App\models\ATSFlight\BookRequestConfiguration
     */
    public function setWebFare($WebFare)
    {
      $this->WebFare = $WebFare;
      return $this;
    }

}
