<?php

namespace App\models\ATSFlight;

class BookRequestPayment
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
     * @var string $FundingCurrency
     */
    protected $FundingCurrency = null;

    /**
     * @var string $IATANumber
     */
    protected $IATANumber = null;

    /**
     * @var SharedPrice $PaymentAmount
     */
    protected $PaymentAmount = null;

    /**
     * @var PaymentTypeEnum $PaymentType
     */
    protected $PaymentType = null;

    /**
     * @var string $VirtualPaymentProvider
     */
    protected $VirtualPaymentProvider = null;

    /**
     * @var boolean $WantApprovalCode
     */
    protected $WantApprovalCode = null;

    /**
     * @param PaymentTypeEnum $PaymentType
     */
    public function __construct($PaymentType)
    {
      $this->PaymentType = $PaymentType;
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
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
     * @return \App\models\ATSFlight\BookRequestPayment
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getFundingCurrency()
    {
      return $this->FundingCurrency;
    }

    /**
     * @param string $FundingCurrency
     * @return \App\models\ATSFlight\BookRequestPayment
     */
    public function setFundingCurrency($FundingCurrency)
    {
      $this->FundingCurrency = $FundingCurrency;
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
     * @return \App\models\ATSFlight\BookRequestPayment
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPaymentAmount()
    {
      return $this->PaymentAmount;
    }

    /**
     * @param SharedPrice $PaymentAmount
     * @return \App\models\ATSFlight\BookRequestPayment
     */
    public function setPaymentAmount($PaymentAmount)
    {
      $this->PaymentAmount = $PaymentAmount;
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
     * @return \App\models\ATSFlight\BookRequestPayment
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getVirtualPaymentProvider()
    {
      return $this->VirtualPaymentProvider;
    }

    /**
     * @param string $VirtualPaymentProvider
     * @return \App\models\ATSFlight\BookRequestPayment
     */
    public function setVirtualPaymentProvider($VirtualPaymentProvider)
    {
      $this->VirtualPaymentProvider = $VirtualPaymentProvider;
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
     * @return \App\models\ATSFlight\BookRequestPayment
     */
    public function setWantApprovalCode($WantApprovalCode)
    {
      $this->WantApprovalCode = $WantApprovalCode;
      return $this;
    }

}
