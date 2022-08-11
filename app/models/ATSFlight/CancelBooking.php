<?php

namespace App\models\ATSFlight;

class CancelBooking
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var CancelRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param CancelRequestData $request
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
     * @return \App\models\ATSFlight\CancelBooking
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return CancelRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CancelRequestData $request
     * @return \App\models\ATSFlight\CancelBooking
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
