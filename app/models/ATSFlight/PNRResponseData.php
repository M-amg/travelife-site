<?php

namespace App\models\ATSFlight;

class PNRResponseData
{

    /**
     * @var BackOfficeData $BOData
     */
    protected $BOData = null;

    /**
     * @var string $BackOffice
     */
    protected $BackOffice = null;

    /**
     * @var ArrayOfContact $Contacts
     */
    protected $Contacts = null;

    /**
     * @var string $CreatorAgent
     */
    protected $CreatorAgent = null;

    /**
     * @var string $CreatorPCC
     */
    protected $CreatorPCC = null;

    /**
     * @var ArrayOfEnhancedRemark $EnhancedRemarks
     */
    protected $EnhancedRemarks = null;

    /**
     * @var ArrayOfPNRResponseInfo $Infos
     */
    protected $Infos = null;

    /**
     * @var boolean $IsGroupbooking
     */
    protected $IsGroupbooking = null;

    /**
     * @var boolean $IsTicketIssued
     */
    protected $IsTicketIssued = null;

    /**
     * @var ArrayOfPNRResponseLocation $Locations
     */
    protected $Locations = null;

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var int $NumberOfInfos
     */
    protected $NumberOfInfos = null;

    /**
     * @var int $NumberOfPhones
     */
    protected $NumberOfPhones = null;

    /**
     * @var ArrayOfPNRResponseOSI $OSIElements
     */
    protected $OSIElements = null;

    /**
     * @var ArrayOfPNRResponsePassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var ArrayOfPNRResponsePayment $Payments
     */
    protected $Payments = null;

    /**
     * @var ArrayOfPNRResponsePhone $Phones
     */
    protected $Phones = null;

    /**
     * @var string $PointOfTurnAround
     */
    protected $PointOfTurnAround = null;

    /**
     * @var string $ReceivedFrom
     */
    protected $ReceivedFrom = null;

    /**
     * @var ArrayOfstring $Remark
     */
    protected $Remark = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var ArrayOfPNRResponseSKElement $SKElements
     */
    protected $SKElements = null;

    /**
     * @var ArrayOfPNRResponseSSR $SSRElements
     */
    protected $SSRElements = null;

    /**
     * @var boolean $SecuredFlight
     */
    protected $SecuredFlight = null;

    /**
     * @var ArrayOfPNRResponseSegment $Segments
     */
    protected $Segments = null;

    /**
     * @var ArrayOfPNRServiceData $Services
     */
    protected $Services = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var ArrayOfDiscountResponseData $SpecialDiscounts
     */
    protected $SpecialDiscounts = null;

    /**
     * @var ArrayOfPNRResponseStoredFare $StoredFares
     */
    protected $StoredFares = null;

    /**
     * @var ArrayOfPNRServiceFareData $StoredServices
     */
    protected $StoredServices = null;

    /**
     * @var boolean $StructuredPNR
     */
    protected $StructuredPNR = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var ArrayOfPNRResponseTicketInfo $TicketInfo
     */
    protected $TicketInfo = null;

    /**
     * @var ArrayOfTicketedServiceData $TicketedSevices
     */
    protected $TicketedSevices = null;

    /**
     * @var \DateTime $TicketingDate
     */
    protected $TicketingDate = null;

    /**
     * @var TicketingDateTypeEnum $TicketingDateType
     */
    protected $TicketingDateType = null;

    /**
     * @var ArrayOfTicketingDateTypeData $TicketingDates
     */
    protected $TicketingDates = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BackOfficeData
     */
    public function getBOData()
    {
      return $this->BOData;
    }

    /**
     * @param BackOfficeData $BOData
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setBOData($BOData)
    {
      $this->BOData = $BOData;
      return $this;
    }

    /**
     * @return string
     */
    public function getBackOffice()
    {
      return $this->BackOffice;
    }

    /**
     * @param string $BackOffice
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setBackOffice($BackOffice)
    {
      $this->BackOffice = $BackOffice;
      return $this;
    }

    /**
     * @return ArrayOfContact
     */
    public function getContacts()
    {
      return $this->Contacts;
    }

    /**
     * @param ArrayOfContact $Contacts
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setContacts($Contacts)
    {
      $this->Contacts = $Contacts;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatorAgent()
    {
      return $this->CreatorAgent;
    }

    /**
     * @param string $CreatorAgent
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setCreatorAgent($CreatorAgent)
    {
      $this->CreatorAgent = $CreatorAgent;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreatorPCC()
    {
      return $this->CreatorPCC;
    }

    /**
     * @param string $CreatorPCC
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setCreatorPCC($CreatorPCC)
    {
      $this->CreatorPCC = $CreatorPCC;
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
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setEnhancedRemarks($EnhancedRemarks)
    {
      $this->EnhancedRemarks = $EnhancedRemarks;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseInfo
     */
    public function getInfos()
    {
      return $this->Infos;
    }

    /**
     * @param ArrayOfPNRResponseInfo $Infos
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setInfos($Infos)
    {
      $this->Infos = $Infos;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsGroupbooking()
    {
      return $this->IsGroupbooking;
    }

    /**
     * @param boolean $IsGroupbooking
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setIsGroupbooking($IsGroupbooking)
    {
      $this->IsGroupbooking = $IsGroupbooking;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTicketIssued()
    {
      return $this->IsTicketIssued;
    }

    /**
     * @param boolean $IsTicketIssued
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setIsTicketIssued($IsTicketIssued)
    {
      $this->IsTicketIssued = $IsTicketIssued;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseLocation
     */
    public function getLocations()
    {
      return $this->Locations;
    }

    /**
     * @param ArrayOfPNRResponseLocation $Locations
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setLocations($Locations)
    {
      $this->Locations = $Locations;
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
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfInfos()
    {
      return $this->NumberOfInfos;
    }

    /**
     * @param int $NumberOfInfos
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setNumberOfInfos($NumberOfInfos)
    {
      $this->NumberOfInfos = $NumberOfInfos;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPhones()
    {
      return $this->NumberOfPhones;
    }

    /**
     * @param int $NumberOfPhones
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setNumberOfPhones($NumberOfPhones)
    {
      $this->NumberOfPhones = $NumberOfPhones;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseOSI
     */
    public function getOSIElements()
    {
      return $this->OSIElements;
    }

    /**
     * @param ArrayOfPNRResponseOSI $OSIElements
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setOSIElements($OSIElements)
    {
      $this->OSIElements = $OSIElements;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponsePassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfPNRResponsePassenger $Passengers
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponsePayment
     */
    public function getPayments()
    {
      return $this->Payments;
    }

    /**
     * @param ArrayOfPNRResponsePayment $Payments
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setPayments($Payments)
    {
      $this->Payments = $Payments;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponsePhone
     */
    public function getPhones()
    {
      return $this->Phones;
    }

    /**
     * @param ArrayOfPNRResponsePhone $Phones
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setPhones($Phones)
    {
      $this->Phones = $Phones;
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
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setPointOfTurnAround($PointOfTurnAround)
    {
      $this->PointOfTurnAround = $PointOfTurnAround;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceivedFrom()
    {
      return $this->ReceivedFrom;
    }

    /**
     * @param string $ReceivedFrom
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setReceivedFrom($ReceivedFrom)
    {
      $this->ReceivedFrom = $ReceivedFrom;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param ArrayOfstring $Remark
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
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
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseSKElement
     */
    public function getSKElements()
    {
      return $this->SKElements;
    }

    /**
     * @param ArrayOfPNRResponseSKElement $SKElements
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setSKElements($SKElements)
    {
      $this->SKElements = $SKElements;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseSSR
     */
    public function getSSRElements()
    {
      return $this->SSRElements;
    }

    /**
     * @param ArrayOfPNRResponseSSR $SSRElements
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setSSRElements($SSRElements)
    {
      $this->SSRElements = $SSRElements;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSecuredFlight()
    {
      return $this->SecuredFlight;
    }

    /**
     * @param boolean $SecuredFlight
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setSecuredFlight($SecuredFlight)
    {
      $this->SecuredFlight = $SecuredFlight;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfPNRResponseSegment $Segments
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

    /**
     * @return ArrayOfPNRServiceData
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param ArrayOfPNRServiceData $Services
     * @return \App\models\ATSFlight\PNRResponseData
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
     * @return \App\models\ATSFlight\PNRResponseData
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
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setSpecialDiscounts($SpecialDiscounts)
    {
      $this->SpecialDiscounts = $SpecialDiscounts;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseStoredFare
     */
    public function getStoredFares()
    {
      return $this->StoredFares;
    }

    /**
     * @param ArrayOfPNRResponseStoredFare $StoredFares
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setStoredFares($StoredFares)
    {
      $this->StoredFares = $StoredFares;
      return $this;
    }

    /**
     * @return ArrayOfPNRServiceFareData
     */
    public function getStoredServices()
    {
      return $this->StoredServices;
    }

    /**
     * @param ArrayOfPNRServiceFareData $StoredServices
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setStoredServices($StoredServices)
    {
      $this->StoredServices = $StoredServices;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStructuredPNR()
    {
      return $this->StructuredPNR;
    }

    /**
     * @param boolean $StructuredPNR
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setStructuredPNR($StructuredPNR)
    {
      $this->StructuredPNR = $StructuredPNR;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseTicketInfo
     */
    public function getTicketInfo()
    {
      return $this->TicketInfo;
    }

    /**
     * @param ArrayOfPNRResponseTicketInfo $TicketInfo
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setTicketInfo($TicketInfo)
    {
      $this->TicketInfo = $TicketInfo;
      return $this;
    }

    /**
     * @return ArrayOfTicketedServiceData
     */
    public function getTicketedSevices()
    {
      return $this->TicketedSevices;
    }

    /**
     * @param ArrayOfTicketedServiceData $TicketedSevices
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setTicketedSevices($TicketedSevices)
    {
      $this->TicketedSevices = $TicketedSevices;
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
     * @return \App\models\ATSFlight\PNRResponseData
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
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setTicketingDateType($TicketingDateType)
    {
      $this->TicketingDateType = $TicketingDateType;
      return $this;
    }

    /**
     * @return ArrayOfTicketingDateTypeData
     */
    public function getTicketingDates()
    {
      return $this->TicketingDates;
    }

    /**
     * @param ArrayOfTicketingDateTypeData $TicketingDates
     * @return \App\models\ATSFlight\PNRResponseData
     */
    public function setTicketingDates($TicketingDates)
    {
      $this->TicketingDates = $TicketingDates;
      return $this;
    }

}
