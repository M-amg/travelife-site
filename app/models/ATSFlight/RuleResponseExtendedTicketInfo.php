<?php

namespace App\models\ATSFlight;

class RuleResponseExtendedTicketInfo
{

    /**
     * @var int $BookDaysBeforeDeparture
     */
    protected $BookDaysBeforeDeparture = null;

    /**
     * @var int $TicketingDaysAfterBooking
     */
    protected $TicketingDaysAfterBooking = null;

    /**
     * @var int $TicketingDaysBeforeDeparture
     */
    protected $TicketingDaysBeforeDeparture = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getBookDaysBeforeDeparture()
    {
      return $this->BookDaysBeforeDeparture;
    }

    /**
     * @param int $BookDaysBeforeDeparture
     * @return \App\models\ATSFlight\RuleResponseExtendedTicketInfo
     */
    public function setBookDaysBeforeDeparture($BookDaysBeforeDeparture)
    {
      $this->BookDaysBeforeDeparture = $BookDaysBeforeDeparture;
      return $this;
    }

    /**
     * @return int
     */
    public function getTicketingDaysAfterBooking()
    {
      return $this->TicketingDaysAfterBooking;
    }

    /**
     * @param int $TicketingDaysAfterBooking
     * @return \App\models\ATSFlight\RuleResponseExtendedTicketInfo
     */
    public function setTicketingDaysAfterBooking($TicketingDaysAfterBooking)
    {
      $this->TicketingDaysAfterBooking = $TicketingDaysAfterBooking;
      return $this;
    }

    /**
     * @return int
     */
    public function getTicketingDaysBeforeDeparture()
    {
      return $this->TicketingDaysBeforeDeparture;
    }

    /**
     * @param int $TicketingDaysBeforeDeparture
     * @return \App\models\ATSFlight\RuleResponseExtendedTicketInfo
     */
    public function setTicketingDaysBeforeDeparture($TicketingDaysBeforeDeparture)
    {
      $this->TicketingDaysBeforeDeparture = $TicketingDaysBeforeDeparture;
      return $this;
    }

}
