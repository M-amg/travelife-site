<?php

namespace App\models\ATSFlight;

class CancelResponseData
{

    /**
     * @var ArrayOfResponseContact $Contacts
     */
    protected $Contacts = null;

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var ArrayOfstring $NotesAndInformation
     */
    protected $NotesAndInformation = null;

    /**
     * @var ArrayOfResponseOSI $OSIs
     */
    protected $OSIs = null;

    /**
     * @var ArrayOfCancelResponsePNR $PNRs
     */
    protected $PNRs = null;

    /**
     * @var ArrayOfCancelResponsePassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var ArrayOfResponseRemark $Remarks
     */
    protected $Remarks = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var ArrayOfResponseSK $SKs
     */
    protected $SKs = null;

    /**
     * @var ArrayOfResponseSSR $SSRs
     */
    protected $SSRs = null;

    /**
     * @var ArrayOfResponseSeat $Seats
     */
    protected $Seats = null;

    /**
     * @var ArrayOfResponseService $Services
     */
    protected $Services = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var SurchargeData $Surcharge
     */
    protected $Surcharge = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfResponseContact
     */
    public function getContacts()
    {
      return $this->Contacts;
    }

    /**
     * @param ArrayOfResponseContact $Contacts
     * @return \App\models\ATSFlight\CancelResponseData
     */
    public function setContacts($Contacts)
    {
      $this->Contacts = $Contacts;
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
     * @return \App\models\ATSFlight\CancelResponseData
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
     * @return \App\models\ATSFlight\CancelResponseData
     */
    public function setNotesAndInformation($NotesAndInformation)
    {
      $this->NotesAndInformation = $NotesAndInformation;
      return $this;
    }

    /**
     * @return ArrayOfResponseOSI
     */
    public function getOSIs()
    {
      return $this->OSIs;
    }

    /**
     * @param ArrayOfResponseOSI $OSIs
     * @return \App\models\ATSFlight\CancelResponseData
     */
    public function setOSIs($OSIs)
    {
      $this->OSIs = $OSIs;
      return $this;
    }

    /**
     * @return ArrayOfCancelResponsePNR
     */
    public function getPNRs()
    {
      return $this->PNRs;
    }

    /**
     * @param ArrayOfCancelResponsePNR $PNRs
     * @return \App\models\ATSFlight\CancelResponseData
     */
    public function setPNRs($PNRs)
    {
      $this->PNRs = $PNRs;
      return $this;
    }

    /**
     * @return ArrayOfCancelResponsePassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfCancelResponsePassenger $Passengers
     * @return \App\models\ATSFlight\CancelResponseData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return ArrayOfResponseRemark
     */
    public function getRemarks()
    {
      return $this->Remarks;
    }

    /**
     * @param ArrayOfResponseRemark $Remarks
     * @return \App\models\ATSFlight\CancelResponseData
     */
    public function setRemarks($Remarks)
    {
      $this->Remarks = $Remarks;
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
     * @return \App\models\ATSFlight\CancelResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

    /**
     * @return ArrayOfResponseSK
     */
    public function getSKs()
    {
      return $this->SKs;
    }

    /**
     * @param ArrayOfResponseSK $SKs
     * @return \App\models\ATSFlight\CancelResponseData
     */
    public function setSKs($SKs)
    {
      $this->SKs = $SKs;
      return $this;
    }

    /**
     * @return ArrayOfResponseSSR
     */
    public function getSSRs()
    {
      return $this->SSRs;
    }

    /**
     * @param ArrayOfResponseSSR $SSRs
     * @return \App\models\ATSFlight\CancelResponseData
     */
    public function setSSRs($SSRs)
    {
      $this->SSRs = $SSRs;
      return $this;
    }

    /**
     * @return ArrayOfResponseSeat
     */
    public function getSeats()
    {
      return $this->Seats;
    }

    /**
     * @param ArrayOfResponseSeat $Seats
     * @return \App\models\ATSFlight\CancelResponseData
     */
    public function setSeats($Seats)
    {
      $this->Seats = $Seats;
      return $this;
    }

    /**
     * @return ArrayOfResponseService
     */
    public function getServices()
    {
      return $this->Services;
    }

    /**
     * @param ArrayOfResponseService $Services
     * @return \App\models\ATSFlight\CancelResponseData
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
     * @return \App\models\ATSFlight\CancelResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return SurchargeData
     */
    public function getSurcharge()
    {
      return $this->Surcharge;
    }

    /**
     * @param SurchargeData $Surcharge
     * @return \App\models\ATSFlight\CancelResponseData
     */
    public function setSurcharge($Surcharge)
    {
      $this->Surcharge = $Surcharge;
      return $this;
    }

}
