<?php

namespace App\models\ATSFlight;

class ConvertCurrency
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var CurrencyData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param CurrencyData $request
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
     * @return \App\models\ATSFlight\ConvertCurrency
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return CurrencyData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CurrencyData $request
     * @return \App\models\ATSFlight\ConvertCurrency
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
