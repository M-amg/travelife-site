<?php

namespace App\models\ATSFlight;

class GetTaxesAndFees
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var TaxesAndFeesRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param TaxesAndFeesRequestData $request
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
     * @return \App\models\ATSFlight\GetTaxesAndFees
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return TaxesAndFeesRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param TaxesAndFeesRequestData $request
     * @return \App\models\ATSFlight\GetTaxesAndFees
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
