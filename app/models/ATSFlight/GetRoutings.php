<?php

namespace App\models\ATSFlight;

class GetRoutings
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var RoutingsRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param RoutingsRequestData $request
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
     * @return \App\models\ATSFlight\GetRoutings
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return RoutingsRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param RoutingsRequestData $request
     * @return \App\models\ATSFlight\GetRoutings
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
