<?php

namespace App\models\ATSFlight;

class DoCreditCardPayment
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var CreditCardRequest $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param CreditCardRequest $request
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
     * @return \App\models\ATSFlight\DoCreditCardPayment
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return CreditCardRequest
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param CreditCardRequest $request
     * @return \App\models\ATSFlight\DoCreditCardPayment
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
