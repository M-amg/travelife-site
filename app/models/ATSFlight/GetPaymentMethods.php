<?php

namespace App\models\ATSFlight;

class GetPaymentMethods
{

    /**
     * @var LoginData $Login
     */
    protected $Login = null;

    /**
     * @var PaymentRequestData $request
     */
    protected $request = null;

    /**
     * @param LoginData $Login
     * @param PaymentRequestData $request
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
     * @return \App\models\ATSFlight\GetPaymentMethods
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return PaymentRequestData
     */
    public function getRequest()
    {
      return $this->request;
    }

    /**
     * @param PaymentRequestData $request
     * @return \App\models\ATSFlight\GetPaymentMethods
     */
    public function setRequest($request)
    {
      $this->request = $request;
      return $this;
    }

}
