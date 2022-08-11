<?php

namespace App\models\ATSFlight;

class TicketResponseInformation
{

    /**
     * @var string $RecordSet
     */
    protected $RecordSet = null;

    /**
     * @var ArrayOfTicketResponseTicket $Tickets
     */
    protected $Tickets = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\TicketResponseInformation
     */
    public function setRecordSet($RecordSet)
    {
      $this->RecordSet = $RecordSet;
      return $this;
    }

    /**
     * @return ArrayOfTicketResponseTicket
     */
    public function getTickets()
    {
      return $this->Tickets;
    }

    /**
     * @param ArrayOfTicketResponseTicket $Tickets
     * @return \App\models\ATSFlight\TicketResponseInformation
     */
    public function setTickets($Tickets)
    {
      $this->Tickets = $Tickets;
      return $this;
    }

}
