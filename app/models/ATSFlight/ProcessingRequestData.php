<?php

namespace App\models\ATSFlight;

class ProcessingRequestData
{

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var string $CustomerLastName
     */
    protected $CustomerLastName = null;

    /**
     * @var ProcessingRequestQueue $ErrorQueue
     */
    protected $ErrorQueue = null;

    /**
     * @var ArrayOfProcessingRequestProcess $Processes
     */
    protected $Processes = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

    /**
     * @var boolean $ReturnPNR
     */
    protected $ReturnPNR = null;

    /**
     * @var boolean $ReturnStoredFare
     */
    protected $ReturnStoredFare = null;

    /**
     * @var boolean $ReturnTicketDetails
     */
    protected $ReturnTicketDetails = null;

    /**
     * @var string $Session
     */
    protected $Session = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var ArrayOfstring $StatusBlacklist
     */
    protected $StatusBlacklist = null;

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
     * @return \App\models\ATSFlight\ProcessingRequestData
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
     * @return \App\models\ATSFlight\ProcessingRequestData
     */
    public function setCustomerLastName($CustomerLastName)
    {
      $this->CustomerLastName = $CustomerLastName;
      return $this;
    }

    /**
     * @return ProcessingRequestQueue
     */
    public function getErrorQueue()
    {
      return $this->ErrorQueue;
    }

    /**
     * @param ProcessingRequestQueue $ErrorQueue
     * @return \App\models\ATSFlight\ProcessingRequestData
     */
    public function setErrorQueue($ErrorQueue)
    {
      $this->ErrorQueue = $ErrorQueue;
      return $this;
    }

    /**
     * @return ArrayOfProcessingRequestProcess
     */
    public function getProcesses()
    {
      return $this->Processes;
    }

    /**
     * @param ArrayOfProcessingRequestProcess $Processes
     * @return \App\models\ATSFlight\ProcessingRequestData
     */
    public function setProcesses($Processes)
    {
      $this->Processes = $Processes;
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
     * @return \App\models\ATSFlight\ProcessingRequestData
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnPNR()
    {
      return $this->ReturnPNR;
    }

    /**
     * @param boolean $ReturnPNR
     * @return \App\models\ATSFlight\ProcessingRequestData
     */
    public function setReturnPNR($ReturnPNR)
    {
      $this->ReturnPNR = $ReturnPNR;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnStoredFare()
    {
      return $this->ReturnStoredFare;
    }

    /**
     * @param boolean $ReturnStoredFare
     * @return \App\models\ATSFlight\ProcessingRequestData
     */
    public function setReturnStoredFare($ReturnStoredFare)
    {
      $this->ReturnStoredFare = $ReturnStoredFare;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnTicketDetails()
    {
      return $this->ReturnTicketDetails;
    }

    /**
     * @param boolean $ReturnTicketDetails
     * @return \App\models\ATSFlight\ProcessingRequestData
     */
    public function setReturnTicketDetails($ReturnTicketDetails)
    {
      $this->ReturnTicketDetails = $ReturnTicketDetails;
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
     * @return \App\models\ATSFlight\ProcessingRequestData
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
     * @return \App\models\ATSFlight\ProcessingRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getStatusBlacklist()
    {
      return $this->StatusBlacklist;
    }

    /**
     * @param ArrayOfstring $StatusBlacklist
     * @return \App\models\ATSFlight\ProcessingRequestData
     */
    public function setStatusBlacklist($StatusBlacklist)
    {
      $this->StatusBlacklist = $StatusBlacklist;
      return $this;
    }

}
