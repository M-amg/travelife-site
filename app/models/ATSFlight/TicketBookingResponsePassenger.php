<?php

namespace App\models\ATSFlight;

class TicketBookingResponsePassenger
{

    /**
     * @var TicketBookingResponsePassengerDetails $PassengerDetails
     */
    protected $PassengerDetails = null;

    /**
     * @var TicketBookingResponseTicket $TicketDetails
     */
    protected $TicketDetails = null;

    /**
     * @var ArrayOfTicketedServiceData $TicketedServices
     */
    protected $TicketedServices = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketBookingResponsePassengerDetails
     */
    public function getPassengerDetails()
    {
      return $this->PassengerDetails;
    }

    /**
     * @param TicketBookingResponsePassengerDetails $PassengerDetails
     * @return \App\models\ATSFlight\TicketBookingResponsePassenger
     */
    public function setPassengerDetails($PassengerDetails)
    {
      $this->PassengerDetails = $PassengerDetails;
      return $this;
    }

    /**
     * @return TicketBookingResponseTicket
     */
    public function getTicketDetails()
    {
      return $this->TicketDetails;
    }

    /**
     * @param TicketBookingResponseTicket $TicketDetails
     * @return \App\models\ATSFlight\TicketBookingResponsePassenger
     */
    public function setTicketDetails($TicketDetails)
    {
      $this->TicketDetails = $TicketDetails;
      return $this;
    }

    /**
     * @return ArrayOfTicketedServiceData
     */
    public function getTicketedServices()
    {
      return $this->TicketedServices;
    }

    /**
     * @param ArrayOfTicketedServiceData $TicketedServices
     * @return \App\models\ATSFlight\TicketBookingResponsePassenger
     */
    public function setTicketedServices($TicketedServices)
    {
      $this->TicketedServices = $TicketedServices;
      return $this;
    }

}
