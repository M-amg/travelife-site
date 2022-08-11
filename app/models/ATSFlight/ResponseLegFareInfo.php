<?php

namespace App\models\ATSFlight;

class ResponseLegFareInfo
{

    /**
     * @var ResponseRule $Rule
     */
    protected $Rule = null;

    /**
     * @var ResponseTicket $Ticket
     */
    protected $Ticket = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ResponseRule
     */
    public function getRule()
    {
      return $this->Rule;
    }

    /**
     * @param ResponseRule $Rule
     * @return \App\models\ATSFlight\ResponseLegFareInfo
     */
    public function setRule($Rule)
    {
      $this->Rule = $Rule;
      return $this;
    }

    /**
     * @return ResponseTicket
     */
    public function getTicket()
    {
      return $this->Ticket;
    }

    /**
     * @param ResponseTicket $Ticket
     * @return \App\models\ATSFlight\ResponseLegFareInfo
     */
    public function setTicket($Ticket)
    {
      $this->Ticket = $Ticket;
      return $this;
    }

}
