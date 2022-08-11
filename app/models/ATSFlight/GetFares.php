<?php

namespace App\models\ATSFlight;

class GetFares
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var FareRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param FareRequestData $request
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
     * @return \App\models\ATSFlight\GetFares
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return FareRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param FareRequestData $request
     * @return \App\models\ATSFlight\GetFares
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
