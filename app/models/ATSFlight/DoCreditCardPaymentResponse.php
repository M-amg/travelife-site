<?php

namespace App\models\ATSFlight;

class DoCreditCardPaymentResponse
{

    /**
     * @var Response $DoCreditCardPaymentResult
     */
    protected $DoCreditCardPaymentResult = null;

    /**
     * @param Response $DoCreditCardPaymentResult
     */
    public function __construct($DoCreditCardPaymentResult)
    {
      $this->DoCreditCardPaymentResult = $DoCreditCardPaymentResult;
    }

    /**
     * @return Response
     */
    public function getDoCreditCardPaymentResult()
    {
      return $this->DoCreditCardPaymentResult;
    }

    /**
     * @param Response $DoCreditCardPaymentResult
     * @return \App\models\ATSFlight\DoCreditCardPaymentResponse
     */
    public function setDoCreditCardPaymentResult($DoCreditCardPaymentResult)
    {
      $this->DoCreditCardPaymentResult = $DoCreditCardPaymentResult;
      return $this;
    }

}
