<?php

namespace App\models\ATSFlight;

class GetFlightDetails
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var DetailsRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param DetailsRequestData $request
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
     * @return \App\models\ATSFlight\GetFlightDetails
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return DetailsRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param DetailsRequestData $request
     * @return \App\models\ATSFlight\GetFlightDetails
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
