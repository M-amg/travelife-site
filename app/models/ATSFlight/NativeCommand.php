<?php

namespace App\models\ATSFlight;

class NativeCommand
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var NativeRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param NativeRequestData $request
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
     * @return \App\models\ATSFlight\NativeCommand
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return NativeRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param NativeRequestData $request
     * @return \App\models\ATSFlight\NativeCommand
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
