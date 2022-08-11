<?php

namespace App\models\ATSFlight;

class PNRProcessing
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var ProcessingRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param ProcessingRequestData $request
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
     * @return \App\models\ATSFlight\PNRProcessing
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return ProcessingRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param ProcessingRequestData $request
     * @return \App\models\ATSFlight\PNRProcessing
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
