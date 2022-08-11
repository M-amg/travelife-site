<?php

namespace App\models\ATSFlight;

class CancelTicketRequestData
{

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var ArrayOfCancelTicketEMD $EMDs
     */
    protected $EMDs = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

    /**
     * @var string $Session
     */
    protected $Session = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var ArrayOfCancelTicketRequestTicket $Tickets
     */
    protected $Tickets = null;

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
     * @return \App\models\ATSFlight\CancelTicketRequestData
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return ArrayOfCancelTicketEMD
     */
    public function getEMDs()
    {
      return $this->EMDs;
    }

    /**
     * @param ArrayOfCancelTicketEMD $EMDs
     * @return \App\models\ATSFlight\CancelTicketRequestData
     */
    public function setEMDs($EMDs)
    {
      $this->EMDs = $EMDs;
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
     * @return \App\models\ATSFlight\CancelTicketRequestData
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
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
     * @return \App\models\ATSFlight\CancelTicketRequestData
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
     * @return \App\models\ATSFlight\CancelTicketRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return ArrayOfCancelTicketRequestTicket
     */
    public function getTickets()
    {
      return $this->Tickets;
    }

    /**
     * @param ArrayOfCancelTicketRequestTicket $Tickets
     * @return \App\models\ATSFlight\CancelTicketRequestData
     */
    public function setTickets($Tickets)
    {
      $this->Tickets = $Tickets;
      return $this;
    }

}
