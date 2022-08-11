<?php

namespace App\models\ATSFlight;

class GetRoutingInformation
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var RoutingRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param RoutingRequestData $request
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
     * @return \App\models\ATSFlight\GetRoutingInformation
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return RoutingRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RoutingRequestData $request
     * @return \App\models\ATSFlight\GetRoutingInformation
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
