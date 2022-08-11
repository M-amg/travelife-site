<?php

namespace App\models\ATSFlight;

class GetAvailability
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var AvailabilityRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param AvailabilityRequestData $request
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
     * @return \App\models\ATSFlight\GetAvailability
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return AvailabilityRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param AvailabilityRequestData $request
     * @return \App\models\ATSFlight\GetAvailability
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
