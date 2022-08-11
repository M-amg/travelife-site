<?php

namespace App\models\ATSFlight;

class TicketBookingResponseTicket
{

    /**
     * @var TicketBookingResponseFare $FareDetails
     */
    protected $FareDetails = null;

    /**
     * @var string $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var ArrayOfTicketBookingResponseSegment $SegmentDetails
     */
    protected $SegmentDetails = null;

    /**
     * @var ArrayOfstring $TicketNumbers
     */
    protected $TicketNumbers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketBookingResponseFare
     */
    public function getFareDetails()
    {
      return $this->FareDetails;
    }

    /**
     * @param TicketBookingResponseFare $FareDetails
     * @return \App\models\ATSFlight\TicketBookingResponseTicket
     */
    public function setFareDetails($FareDetails)
    {
      $this->FareDetails = $FareDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param string $FormOfPayment
     * @return \App\models\ATSFlight\TicketBookingResponseTicket
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return ArrayOfTicketBookingResponseSegment
     */
    public function getSegmentDetails()
    {
      return $this->SegmentDetails;
    }

    /**
     * @param ArrayOfTicketBookingResponseSegment $SegmentDetails
     * @return \App\models\ATSFlight\TicketBookingResponseTicket
     */
    public function setSegmentDetails($SegmentDetails)
    {
      $this->SegmentDetails = $SegmentDetails;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getTicketNumbers()
    {
      return $this->TicketNumbers;
    }

    /**
     * @param ArrayOfstring $TicketNumbers
     * @return \App\models\ATSFlight\TicketBookingResponseTicket
     */
    public function setTicketNumbers($TicketNumbers)
    {
      $this->TicketNumbers = $TicketNumbers;
      return $this;
    }

}
