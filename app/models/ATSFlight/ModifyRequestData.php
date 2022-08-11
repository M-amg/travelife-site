<?php

namespace App\models\ATSFlight;

class ModifyRequestData
{

    /**
     * @var ArrayOfModifyRequestContact $AddContact
     */
    protected $AddContact = null;

    /**
     * @var ArrayOfModifyContact $AddNewContact
     */
    protected $AddNewContact = null;

    /**
     * @var boolean $AddPassengersToExistingPNR
     */
    protected $AddPassengersToExistingPNR = null;

    /**
     * @var boolean $AddPassengersToGroupBooking
     */
    protected $AddPassengersToGroupBooking = null;

    /**
     * @var AllotmentAccount $AllotmentAccountData
     */
    protected $AllotmentAccountData = null;

    /**
     * @var BackOfficeData $BackOffice
     */
    protected $BackOffice = null;

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var string $CustomerLastName
     */
    protected $CustomerLastName = null;

    /**
     * @var ArrayOfEnhancedRemark $EnhancedRemarks
     */
    protected $EnhancedRemarks = null;

    /**
     * @var ArrayOfPaymentDefinitionData $FOPs
     */
    protected $FOPs = null;

    /**
     * @var ArrayOfModifyRequestFormOfPayment $FormOfPayments
     */
    protected $FormOfPayments = null;

    /**
     * @var ArrayOfModifyRequestLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var ArrayOfOSIRequestData $OSIs
     */
    protected $OSIs = null;

    /**
     * @var ArrayOfModifyRequestPassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

    /**
     * @var ArrayOfstring $Remarks
     */
    protected $Remarks = null;

    /**
     * @var ArrayOfSKRequestData $SKs
     */
    protected $SKs = null;

    /**
     * @var ArrayOfSSRRequestData $SSRs
     */
    protected $SSRs = null;

    /**
     * @var ArrayOfModifyBookingClass $SegmentBookingClasses
     */
    protected $SegmentBookingClasses = null;

    /**
     * @var ArrayOfModifyStatus $SegmentStati
     */
    protected $SegmentStati = null;

    /**
     * @var ArrayOfServiceRequest $Services
     */
    protected $Services = null;

    /**
     * @var string $Session
     */
    protected $Session = null;

    /**
     * @var boolean $SetPastDateSegment
     */
    protected $SetPastDateSegment = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var ArrayOfDiscountData $SpecialDiscounts
     */
    protected $SpecialDiscounts = null;

    /**
     * @var ModifyRequestWebConfig $WebConfig
     */
    protected $WebConfig = null;

    /**
     * @var ArrayOfModifyRequestvFMacro $vFMacro
     */
    protected $vFMacro = null;

    /**
     * @param SourceModuleEnum $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
    }

    /**
     * @return ArrayOfModifyRequestContact
     */
    public function getAddContact()
    {
      return $this->AddContact;
    }

    /**
     * @param ArrayOfModifyRequestContact $AddContact
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setAddContact($AddContact)
    {
      $this->AddContact = $AddContact;
      return $this;
    }

    /**
     * @return ArrayOfModifyContact
     */
    public function getAddNewContact()
    {
      return $this->AddNewContact;
    }

    /**
     * @param ArrayOfModifyContact $AddNewContact
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setAddNewContact($AddNewContact)
    {
      $this->AddNewContact = $AddNewContact;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAddPassengersToExistingPNR()
    {
      return $this->AddPassengersToExistingPNR;
    }

    /**
     * @param boolean $AddPassengersToExistingPNR
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setAddPassengersToExistingPNR($AddPassengersToExistingPNR)
    {
      $this->AddPassengersToExistingPNR = $AddPassengersToExistingPNR;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAddPassengersToGroupBooking()
    {
      return $this->AddPassengersToGroupBooking;
    }

    /**
     * @param boolean $AddPassengersToGroupBooking
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setAddPassengersToGroupBooking($AddPassengersToGroupBooking)
    {
      $this->AddPassengersToGroupBooking = $AddPassengersToGroupBooking;
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
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setAllotmentAccountData($AllotmentAccountData)
    {
      $this->AllotmentAccountData = $AllotmentAccountData;
      return $this;
    }

    /**
     * @return BackOfficeData
     */
    public function getBackOffice()
    {
      return $this->BackOffice;
    }

    /**
     * @param BackOfficeData $BackOffice
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setBackOffice($BackOffice)
    {
      $this->BackOffice = $BackOffice;
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
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
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
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setCustomerLastName($CustomerLastName)
    {
      $this->CustomerLastName = $CustomerLastName;
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
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setEnhancedRemarks($EnhancedRemarks)
    {
      $this->EnhancedRemarks = $EnhancedRemarks;
      return $this;
    }

    /**
     * @return ArrayOfPaymentDefinitionData
     */
    public function getFOPs()
    {
      return $this->FOPs;
    }

    /**
     * @param ArrayOfPaymentDefinitionData $FOPs
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setFOPs($FOPs)
    {
      $this->FOPs = $FOPs;
      return $this;
    }

    /**
     * @return ArrayOfModifyRequestFormOfPayment
     */
    public function getFormOfPayments()
    {
      return $this->FormOfPayments;
    }

    /**
     * @param ArrayOfModifyRequestFormOfPayment $FormOfPayments
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setFormOfPayments($FormOfPayments)
    {
      $this->FormOfPayments = $FormOfPayments;
      return $this;
    }

    /**
     * @return ArrayOfModifyRequestLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfModifyRequestLeg $Legs
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return ArrayOfOSIRequestData
     */
    public function getOSIs()
    {
      return $this->OSIs;
    }

    /**
     * @param ArrayOfOSIRequestData $OSIs
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setOSIs($OSIs)
    {
      $this->OSIs = $OSIs;
      return $this;
    }

    /**
     * @return ArrayOfModifyRequestPassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfModifyRequestPassenger $Passengers
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
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
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param ArrayOfstring $Remarks
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
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
     * @return \App\models\ATSFlight\ModifyRequestData
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
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setSSRs($SSRs)
    {
      $this->SSRs = $SSRs;
      return $this;
    }

    /**
     * @return ArrayOfModifyBookingClass
     */
    public function getSegmentBookingClasses()
    {
      return $this->SegmentBookingClasses;
    }

    /**
     * @param ArrayOfModifyBookingClass $SegmentBookingClasses
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setSegmentBookingClasses($SegmentBookingClasses)
    {
      $this->SegmentBookingClasses = $SegmentBookingClasses;
      return $this;
    }

    /**
     * @return ArrayOfModifyStatus
     */
    public function getSegmentStati()
    {
      return $this->SegmentStati;
    }

    /**
     * @param ArrayOfModifyStatus $SegmentStati
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setSegmentStati($SegmentStati)
    {
      $this->SegmentStati = $SegmentStati;
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
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setServices($Services)
    {
      $this->Services = $Services;
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
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setSession($Session)
    {
      $this->Session = $Session;
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
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setSetPastDateSegment($SetPastDateSegment)
    {
      $this->SetPastDateSegment = $SetPastDateSegment;
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
     * @return \App\models\ATSFlight\ModifyRequestData
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
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setSpecialDiscounts($SpecialDiscounts)
    {
      $this->SpecialDiscounts = $SpecialDiscounts;
      return $this;
    }

    /**
     * @return ModifyRequestWebConfig
     */
    public function getWebConfig()
    {
      return $this->WebConfig;
    }

    /**
     * @param ModifyRequestWebConfig $WebConfig
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setWebConfig($WebConfig)
    {
      $this->WebConfig = $WebConfig;
      return $this;
    }

    /**
     * @return ArrayOfModifyRequestvFMacro
     */
    public function getVFMacro()
    {
      return $this->vFMacro;
    }

    /**
     * @param ArrayOfModifyRequestvFMacro $vFMacro
     * @return \App\models\ATSFlight\ModifyRequestData
     */
    public function setVFMacro($vFMacro)
    {
      $this->vFMacro = $vFMacro;
      return $this;
    }

}
