<?php

namespace App\models\ATSFlight;

class GetFaresComplex
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var FareComplexRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param FareComplexRequestData $request
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
     * @return \App\models\ATSFlight\GetFaresComplex
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return FareComplexRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param FareComplexRequestData $request
     * @return \App\models\ATSFlight\GetFaresComplex
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
