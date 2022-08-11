<?php

namespace App\models\ATSFlight;

class GetMultiChannelQueryInformation
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var MultiChannelQueryRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param MultiChannelQueryRequestData $request
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
     * @return \App\models\ATSFlight\GetMultiChannelQueryInformation
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return MultiChannelQueryRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param MultiChannelQueryRequestData $request
     * @return \App\models\ATSFlight\GetMultiChannelQueryInformation
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
