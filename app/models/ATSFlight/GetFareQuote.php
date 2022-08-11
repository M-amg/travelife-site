<?php

namespace App\models\ATSFlight;

class GetFareQuote
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var QuoteRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param QuoteRequestData $request
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
     * @return \App\models\ATSFlight\GetFareQuote
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return QuoteRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param QuoteRequestData $request
     * @return \App\models\ATSFlight\GetFareQuote
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
