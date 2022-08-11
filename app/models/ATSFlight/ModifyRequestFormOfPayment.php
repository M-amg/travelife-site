<?php

namespace App\models\ATSFlight;

class ModifyRequestFormOfPayment
{

    /**
     * @var \DateTime $CreditCardExpiryDate
     */
    protected $CreditCardExpiryDate = null;

    /**
     * @var string $CreditCardNumber
     */
    protected $CreditCardNumber = null;

    /**
     * @var boolean $CreditCardNumberIsCrypt
     */
    protected $CreditCardNumberIsCrypt = null;

    /**
     * @var string $CreditCardType
     */
    protected $CreditCardType = null;

    /**
     * @var string $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var string $IATANumber
     */
    protected $IATANumber = null;

    /**
     * @var boolean $WantApprovalCode
     */
    protected $WantApprovalCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getCreditCardExpiryDate()
    {
      if ($this->CreditCardExpiryDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreditCardExpiryDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreditCardExpiryDate
     * @return \App\models\ATSFlight\ModifyRequestFormOfPayment
     */
    public function setCreditCardExpiryDate(\DateTime $CreditCardExpiryDate = null)
    {
      if ($CreditCardExpiryDate == null) {
       $this->CreditCardExpiryDate = null;
      } else {
        $this->CreditCardExpiryDate = $CreditCardExpiryDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardNumber()
    {
      return $this->CreditCardNumber;
    }

    /**
     * @param string $CreditCardNumber
     * @return \App\models\ATSFlight\ModifyRequestFormOfPayment
     */
    public function setCreditCardNumber($CreditCardNumber)
    {
      $this->CreditCardNumber = $CreditCardNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCreditCardNumberIsCrypt()
    {
      return $this->CreditCardNumberIsCrypt;
    }

    /**
     * @param boolean $CreditCardNumberIsCrypt
     * @return \App\models\ATSFlight\ModifyRequestFormOfPayment
     */
    public function setCreditCardNumberIsCrypt($CreditCardNumberIsCrypt)
    {
      $this->CreditCardNumberIsCrypt = $CreditCardNumberIsCrypt;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardType()
    {
      return $this->CreditCardType;
    }

    /**
     * @param string $CreditCardType
     * @return \App\models\ATSFlight\ModifyRequestFormOfPayment
     */
    public function setCreditCardType($CreditCardType)
    {
      $this->CreditCardType = $CreditCardType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param string $FormOfPayment
     * @return \App\models\ATSFlight\ModifyRequestFormOfPayment
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getIATANumber()
    {
      return $this->IATANumber;
    }

    /**
     * @param string $IATANumber
     * @return \App\models\ATSFlight\ModifyRequestFormOfPayment
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWantApprovalCode()
    {
      return $this->WantApprovalCode;
    }

    /**
     * @param boolean $WantApprovalCode
     * @return \App\models\ATSFlight\ModifyRequestFormOfPayment
     */
    public function setWantApprovalCode($WantApprovalCode)
    {
      $this->WantApprovalCode = $WantApprovalCode;
      return $this;
    }

}
