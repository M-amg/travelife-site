<?php

namespace App\models\ATSFlight;

class GetFareDisplay
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var DisplayRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param DisplayRequestData $request
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
     * @return \App\models\ATSFlight\GetFareDisplay
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return DisplayRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param DisplayRequestData $request
     * @return \App\models\ATSFlight\GetFareDisplay
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
