<?php

namespace App\models\ATSFlight;

class CancelRequestPaymentData
{

    /**
     * @var string $BankAccountHolderFirstName
     */
    protected $BankAccountHolderFirstName = null;

    /**
     * @var string $BankAccountHolderLastName
     */
    protected $BankAccountHolderLastName = null;

    /**
     * @var string $BankAccountNumber
     */
    protected $BankAccountNumber = null;

    /**
     * @var boolean $BankAccountNumberIsCrypt
     */
    protected $BankAccountNumberIsCrypt = null;

    /**
     * @var string $BankCodeNumber
     */
    protected $BankCodeNumber = null;

    /**
     * @var string $BankName
     */
    protected $BankName = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var string $CreditCardCVCNumber
     */
    protected $CreditCardCVCNumber = null;

    /**
     * @var boolean $CreditCardCVCNumberIsCrypt
     */
    protected $CreditCardCVCNumberIsCrypt = null;

    /**
     * @var \DateTime $CreditCardExpiryDate
     */
    protected $CreditCardExpiryDate = null;

    /**
     * @var string $CreditCardHolderFirstName
     */
    protected $CreditCardHolderFirstName = null;

    /**
     * @var string $CreditCardHolderLastName
     */
    protected $CreditCardHolderLastName = null;

    /**
     * @var string $CreditCardNumber
     */
    protected $CreditCardNumber = null;

    /**
     * @var boolean $CreditCardNumberIsCrypt
     */
    protected $CreditCardNumberIsCrypt = null;

    /**
     * @var string $CreditCardPassword
     */
    protected $CreditCardPassword = null;

    /**
     * @var string $CreditCardType
     */
    protected $CreditCardType = null;

    /**
     * @var string $CreditCardUserName
     */
    protected $CreditCardUserName = null;

    /**
     * @var string $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var PaymentTypeEnum $PaymentType
     */
    protected $PaymentType = null;

    /**
     * @var boolean $WantApprovalCode
     */
    protected $WantApprovalCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBankAccountHolderFirstName()
    {
      return $this->BankAccountHolderFirstName;
    }

    /**
     * @param string $BankAccountHolderFirstName
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setBankAccountHolderFirstName($BankAccountHolderFirstName)
    {
      $this->BankAccountHolderFirstName = $BankAccountHolderFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankAccountHolderLastName()
    {
      return $this->BankAccountHolderLastName;
    }

    /**
     * @param string $BankAccountHolderLastName
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setBankAccountHolderLastName($BankAccountHolderLastName)
    {
      $this->BankAccountHolderLastName = $BankAccountHolderLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankAccountNumber()
    {
      return $this->BankAccountNumber;
    }

    /**
     * @param string $BankAccountNumber
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setBankAccountNumber($BankAccountNumber)
    {
      $this->BankAccountNumber = $BankAccountNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBankAccountNumberIsCrypt()
    {
      return $this->BankAccountNumberIsCrypt;
    }

    /**
     * @param boolean $BankAccountNumberIsCrypt
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setBankAccountNumberIsCrypt($BankAccountNumberIsCrypt)
    {
      $this->BankAccountNumberIsCrypt = $BankAccountNumberIsCrypt;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankCodeNumber()
    {
      return $this->BankCodeNumber;
    }

    /**
     * @param string $BankCodeNumber
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setBankCodeNumber($BankCodeNumber)
    {
      $this->BankCodeNumber = $BankCodeNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
      return $this->BankName;
    }

    /**
     * @param string $BankName
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setBankName($BankName)
    {
      $this->BankName = $BankName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardCVCNumber()
    {
      return $this->CreditCardCVCNumber;
    }

    /**
     * @param string $CreditCardCVCNumber
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setCreditCardCVCNumber($CreditCardCVCNumber)
    {
      $this->CreditCardCVCNumber = $CreditCardCVCNumber;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCreditCardCVCNumberIsCrypt()
    {
      return $this->CreditCardCVCNumberIsCrypt;
    }

    /**
     * @param boolean $CreditCardCVCNumberIsCrypt
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setCreditCardCVCNumberIsCrypt($CreditCardCVCNumberIsCrypt)
    {
      $this->CreditCardCVCNumberIsCrypt = $CreditCardCVCNumberIsCrypt;
      return $this;
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
     * @return \App\models\ATSFlight\CancelRequestPaymentData
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
    public function getCreditCardHolderFirstName()
    {
      return $this->CreditCardHolderFirstName;
    }

    /**
     * @param string $CreditCardHolderFirstName
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setCreditCardHolderFirstName($CreditCardHolderFirstName)
    {
      $this->CreditCardHolderFirstName = $CreditCardHolderFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardHolderLastName()
    {
      return $this->CreditCardHolderLastName;
    }

    /**
     * @param string $CreditCardHolderLastName
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setCreditCardHolderLastName($CreditCardHolderLastName)
    {
      $this->CreditCardHolderLastName = $CreditCardHolderLastName;
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
     * @return \App\models\ATSFlight\CancelRequestPaymentData
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
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setCreditCardNumberIsCrypt($CreditCardNumberIsCrypt)
    {
      $this->CreditCardNumberIsCrypt = $CreditCardNumberIsCrypt;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardPassword()
    {
      return $this->CreditCardPassword;
    }

    /**
     * @param string $CreditCardPassword
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setCreditCardPassword($CreditCardPassword)
    {
      $this->CreditCardPassword = $CreditCardPassword;
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
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setCreditCardType($CreditCardType)
    {
      $this->CreditCardType = $CreditCardType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardUserName()
    {
      return $this->CreditCardUserName;
    }

    /**
     * @param string $CreditCardUserName
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setCreditCardUserName($CreditCardUserName)
    {
      $this->CreditCardUserName = $CreditCardUserName;
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
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
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
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
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
     * @return \App\models\ATSFlight\CancelRequestPaymentData
     */
    public function setWantApprovalCode($WantApprovalCode)
    {
      $this->WantApprovalCode = $WantApprovalCode;
      return $this;
    }

}
