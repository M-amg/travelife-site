<?php

namespace App\models\ATSFlight;

class RemoveBookingFromQueue
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var RemoveRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param RemoveRequestData $request
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
     * @return \App\models\ATSFlight\RemoveBookingFromQueue
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return RemoveRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RemoveRequestData $request
     * @return \App\models\ATSFlight\RemoveBookingFromQueue
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
