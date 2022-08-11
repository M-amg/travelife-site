<?php

namespace App\models\ATSFlight;

class GetTax
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var TaxRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param TaxRequestData $request
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
     * @return \App\models\ATSFlight\GetTax
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return TaxRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param TaxRequestData $request
     * @return \App\models\ATSFlight\GetTax
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
