<?php

namespace App\models\ATSFlight;

class TicketBooking
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var TicketBookingRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param TicketBookingRequestData $request
     */
    public function __construct($Login, $request)
    {
      $this->Login = $Login;
      $this->request = $request;
    }

    /**
     * @return LoginData
     */
    public function getLogin()
    {
      return $this->Login;
    }

    /**
     * @param LoginData $Login
     * @return \App\models\ATSFlight\TicketBooking
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return TicketBookingRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param TicketBookingRequestData $request
     * @return \App\models\ATSFlight\TicketBooking
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
