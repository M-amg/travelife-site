<?php

namespace App\models\ATSFlight;

class GetPaymentMethodsResponse
{

    /**
     * @var PaymentMethods $GetPaymentMethodsResult
     */
    protected $GetPaymentMethodsResult = null;

    /**
     * @param PaymentMethods $GetPaymentMethodsResult
     */
    public function __construct($GetPaymentMethodsResult)
    {
      $this->GetPaymentMethodsResult = $GetPaymentMethodsResult;
    }

    /**
     * @return PaymentMethods
     */
    public function getGetPaymentMethodsResult()
    {
      return $this->GetPaymentMethodsResult;
    }

    /**
     * @param PaymentMethods $GetPaymentMethodsResult
     * @return \App\models\ATSFlight\GetPaymentMethodsResponse
     */
    public function setGetPaymentMethodsResult($GetPaymentMethodsResult)
    {
      $this->GetPaymentMethodsResult = $GetPaymentMethodsResult;
      return $this;
    }

}
