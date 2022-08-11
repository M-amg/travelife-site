<?php

namespace App\models\ATSFlight;

class DetailedPaymentMethod
{

    /**
     * @var SurchargeData $BookingFee
     */
    protected $BookingFee = null;

    /**
     * @var string $CreditCardCompanyCode
     */
    protected $CreditCardCompanyCode = null;

    /**
     * @var string $CreditCardCompanyTitle
     */
    protected $CreditCardCompanyTitle = null;

    /**
     * @var ArrayOfint $LegSelection
     */
    protected $LegSelection = null;

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var boolean $PasswordSupported
     */
    protected $PasswordSupported = null;

    /**
     * @var SurchargeData $PaymentFee
     */
    protected $PaymentFee = null;

    /**
     * @var PaymentTypeEnum $PaymentType
     */
    protected $PaymentType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SurchargeData
     */
    public function getBookingFee()
    {
      return $this->BookingFee;
    }

    /**
     * @param SurchargeData $BookingFee
     * @return \App\models\ATSFlight\DetailedPaymentMethod
     */
    public function setBookingFee($BookingFee)
    {
      $this->BookingFee = $BookingFee;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardCompanyCode()
    {
      return $this->CreditCardCompanyCode;
    }

    /**
     * @param string $CreditCardCompanyCode
     * @return \App\models\ATSFlight\DetailedPaymentMethod
     */
    public function setCreditCardCompanyCode($CreditCardCompanyCode)
    {
      $this->CreditCardCompanyCode = $CreditCardCompanyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreditCardCompanyTitle()
    {
      return $this->CreditCardCompanyTitle;
    }

    /**
     * @param string $CreditCardCompanyTitle
     * @return \App\models\ATSFlight\DetailedPaymentMethod
     */
    public function setCreditCardCompanyTitle($CreditCardCompanyTitle)
    {
      $this->CreditCardCompanyTitle = $CreditCardCompanyTitle;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getLegSelection()
    {
      return $this->LegSelection;
    }

    /**
     * @param ArrayOfint $LegSelection
     * @return \App\models\ATSFlight\DetailedPaymentMethod
     */
    public function setLegSelection($LegSelection)
    {
      $this->LegSelection = $LegSelection;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param PassengerTypeEnum $PassengerType
     * @return \App\models\ATSFlight\DetailedPaymentMethod
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPasswordSupported()
    {
      return $this->PasswordSupported;
    }

    /**
     * @param boolean $PasswordSupported
     * @return \App\models\ATSFlight\DetailedPaymentMethod
     */
    public function setPasswordSupported($PasswordSupported)
    {
      $this->PasswordSupported = $PasswordSupported;
      return $this;
    }

    /**
     * @return SurchargeData
     */
    public function getPaymentFee()
    {
      return $this->PaymentFee;
    }

    /**
     * @param SurchargeData $PaymentFee
     * @return \App\models\ATSFlight\DetailedPaymentMethod
     */
    public function setPaymentFee($PaymentFee)
    {
      $this->PaymentFee = $PaymentFee;
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
     * @return \App\models\ATSFlight\DetailedPaymentMethod
     */
    public function setPaymentType($PaymentType)
    {
      $this->PaymentType = $PaymentType;
      return $this;
    }

}
