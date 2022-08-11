<?php

namespace App\models\ATSFlight;

class TicketBookingResponse
{

    /**
     * @var TicketBookingResponseData $TicketBookingResult
     */
    protected $TicketBookingResult = null;

    /**
     * @param TicketBookingResponseData $TicketBookingResult
     */
    public function __construct($TicketBookingResult)
    {
      $this->TicketBookingResult = $TicketBookingResult;
    }

    /**
     * @return TicketBookingResponseData
     */
    public function getTicketBookingResult()
    {
      return $this->TicketBookingResult;
    }

    /**
     * @param TicketBookingResponseData $TicketBookingResult
     * @return \App\models\ATSFlight\TicketBookingResponse
     */
    public function setTicketBookingResult($TicketBookingResult)
    {
      $this->TicketBookingResult = $TicketBookingResult;
      return $this;
    }

}
