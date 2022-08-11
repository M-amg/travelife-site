<?php

namespace App\models\ATSFlight;

class SeatReservation
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var SeatResRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param SeatResRequestData $request
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
     * @return \App\models\ATSFlight\SeatReservation
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return SeatResRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param SeatResRequestData $request
     * @return \App\models\ATSFlight\SeatReservation
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
