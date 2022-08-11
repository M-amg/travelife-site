<?php

namespace App\models\ATSFlight;

class ChangeFlightBooking
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var ChangeFlightRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param ChangeFlightRequestData $request
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
     * @return \App\models\ATSFlight\ChangeFlightBooking
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return ChangeFlightRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ChangeFlightRequestData $request
     * @return \App\models\ATSFlight\ChangeFlightBooking
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
