<?php

namespace App\models\ATSFlight;

class ModifyResponseFormOfPayment
{

    /**
     * @var string $CreditCardApprovalCode
     */
    protected $CreditCardApprovalCode = null;

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCreditCardApprovalCode()
    {
      return $this->CreditCardApprovalCode;
    }

    /**
     * @param string $CreditCardApprovalCode
     * @return \App\models\ATSFlight\ModifyResponseFormOfPayment
     */
    public function setCreditCardApprovalCode($CreditCardApprovalCode)
    {
      $this->CreditCardApprovalCode = $CreditCardApprovalCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorText()
    {
      return $this->ErrorText;
    }

    /**
     * @param string $ErrorText
     * @return \App\models\ATSFlight\ModifyResponseFormOfPayment
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \App\models\ATSFlight\ModifyResponseFormOfPayment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
