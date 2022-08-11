<?php

namespace App\models\ATSFlight;

class GetPreferenceSearch
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var PreferenceRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param PreferenceRequestData $request
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
     * @return \App\models\ATSFlight\GetPreferenceSearch
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return PreferenceRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param PreferenceRequestData $request
     * @return \App\models\ATSFlight\GetPreferenceSearch
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
