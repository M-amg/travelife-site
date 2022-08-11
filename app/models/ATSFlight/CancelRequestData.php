<?php

namespace App\models\ATSFlight;

class CancelRequestData
{

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var boolean $CancelOnlyIfNotTicketed
     */
    protected $CancelOnlyIfNotTicketed = null;

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var CancelRequestCharter $Charter
     */
    protected $Charter = null;

    /**
     * @var CancelRequestConfiguration $Configuration
     */
    protected $Configuration = null;

    /**
     * @var ArrayOfCancelRequestContactData $Contacts
     */
    protected $Contacts = null;

    /**
     * @var string $CustomerLastName
     */
    protected $CustomerLastName = null;

    /**
     * @var boolean $IsAllotment
     */
    protected $IsAllotment = null;

    /**
     * @var ArrayOfOSIRequestData $OSIs
     */
    protected $OSIs = null;

    /**
     * @var ArrayOfCancelRequestPassengerData $PassengerSelection
     */
    protected $PassengerSelection = null;

    /**
     * @var ArrayOfint $Passengers
     */
    protected $Passengers = null;

    /**
     * @var CancelRequestPaymentData $Payment
     */
    protected $Payment = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

    /**
     * @var ArrayOfEnhancedRemark $Remarks
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
     * @var ArrayOfSeatRequestData $Seats
     */
    protected $Seats = null;

    /**
     * @var ArrayOfint $Segments
     */
    protected $Segments = null;

    /**
     * @var ArrayOfServiceRequest $Services
     */
    protected $Services = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var CancelRequestWeb $Web
     */
    protected $Web = null;

    /**
     * @param SourceModuleEnum $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
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
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCancelOnlyIfNotTicketed()
    {
      return $this->CancelOnlyIfNotTicketed;
    }

    /**
     * @param boolean $CancelOnlyIfNotTicketed
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setCancelOnlyIfNotTicketed($CancelOnlyIfNotTicketed)
    {
      $this->CancelOnlyIfNotTicketed = $CancelOnlyIfNotTicketed;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierCode()
    {
      return $this->CarrierCode;
    }

    /**
     * @param string $CarrierCode
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return CancelRequestCharter
     */
    public function getCharter()
    {
      return $this->Charter;
    }

    /**
     * @param CancelRequestCharter $Charter
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setCharter($Charter)
    {
      $this->Charter = $Charter;
      return $this;
    }

    /**
     * @return CancelRequestConfiguration
     */
    public function getConfiguration()
    {
      return $this->Configuration;
    }

    /**
     * @param CancelRequestConfiguration $Configuration
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setConfiguration($Configuration)
    {
      $this->Configuration = $Configuration;
      return $this;
    }

    /**
     * @return ArrayOfCancelRequestContactData
     */
    public function getContacts()
    {
      return $this->Contacts;
    }

    /**
     * @param ArrayOfCancelRequestContactData $Contacts
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setContacts($Contacts)
    {
      $this->Contacts = $Contacts;
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
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setCustomerLastName($CustomerLastName)
    {
      $this->CustomerLastName = $CustomerLastName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAllotment()
    {
      return $this->IsAllotment;
    }

    /**
     * @param boolean $IsAllotment
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setIsAllotment($IsAllotment)
    {
      $this->IsAllotment = $IsAllotment;
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
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setOSIs($OSIs)
    {
      $this->OSIs = $OSIs;
      return $this;
    }

    /**
     * @return ArrayOfCancelRequestPassengerData
     */
    public function getPassengerSelection()
    {
      return $this->PassengerSelection;
    }

    /**
     * @param ArrayOfCancelRequestPassengerData $PassengerSelection
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setPassengerSelection($PassengerSelection)
    {
      $this->PassengerSelection = $PassengerSelection;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfint $Passengers
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return CancelRequestPaymentData
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param CancelRequestPaymentData $Payment
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
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
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
      return $this;
    }

    /**
     * @return ArrayOfEnhancedRemark
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param ArrayOfEnhancedRemark $Remarks
     * @return \App\models\ATSFlight\CancelRequestData
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
     * @return \App\models\ATSFlight\CancelRequestData
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
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setSSRs($SSRs)
    {
      $this->SSRs = $SSRs;
      return $this;
    }

    /**
     * @return ArrayOfSeatRequestData
     */
    public function getSeats()
    {
      return $this->Seats;
    }

    /**
     * @param ArrayOfSeatRequestData $Seats
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setSeats($Seats)
    {
      $this->Seats = $Seats;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfint $Segments
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
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
     * @return \App\models\ATSFlight\CancelRequestData
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
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return CancelRequestWeb
     */
    public function getWeb()
    {
      return $this->Web;
    }

    /**
     * @param CancelRequestWeb $Web
     * @return \App\models\ATSFlight\CancelRequestData
     */
    public function setWeb($Web)
    {
      $this->Web = $Web;
      return $this;
    }

}
