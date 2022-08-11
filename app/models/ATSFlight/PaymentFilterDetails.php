<?php

namespace App\models\ATSFlight;

class PaymentFilterDetails
{

    /**
     * @var ArrayOfstring $CreditCardCodes
     */
    protected $CreditCardCodes = null;

    /**
     * @var PaymentTypeEnum $PaymentType
     */
    protected $PaymentType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getCreditCardCodes()
    {
      return $this->CreditCardCodes;
    }

    /**
     * @param ArrayOfstring $CreditCardCodes
     * @return \App\models\ATSFlight\PaymentFilterDetails
     */
    public function setCreditCardCodes($CreditCardCodes)
    {
      $this->CreditCardCodes = $CreditCardCodes;
      return $this;
    }

    /**
     * @return PaymentTypeEnum
     */
    public function getPaymentType()
    {
      return $this->PaymentType;
    }

    /**
     * @param PaymentTypeEnum $PaymentType
     * @return \App\models\ATSFlight\PaymentFilterDetails
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
      return $this;
    }

}
