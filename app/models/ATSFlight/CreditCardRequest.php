<?php

namespace App\models\ATSFlight;

class CreditCardRequest
{

    /**
     * @var AccountData $Account
     */
    protected $Account = null;

    /**
     * @var string $BookingID
     */
    protected $BookingID = null;

    /**
     * @var CreditCardData $Card
     */
    protected $Card = null;

    /**
     * @var CustomerData $Customer
     */
    protected $Customer = null;

    /**
     * @var PriceData $Price
     */
    protected $Price = null;

    /**
     * @var string $Provider
     */
    protected $Provider = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

    /**
     * @var string $RefNr
     */
    protected $RefNr = null;

    /**
     * @var string $RefText
     */
    protected $RefText = null;

    /**
     * @var boolean $TestMode
     */
    protected $TestMode = null;

    /**
     * @param boolean $TestMode
     */
    public function __construct($TestMode)
    {
      $this->TestMode = $TestMode;
    }

    /**
     * @return AccountData
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param AccountData $Account
     * @return \App\models\ATSFlight\CreditCardRequest
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingID()
    {
      return $this->BookingID;
    }

    /**
     * @param string $BookingID
     * @return \App\models\ATSFlight\CreditCardRequest
     */
    public function setBookingID($BookingID)
    {
      $this->BookingID = $BookingID;
      return $this;
    }

    /**
     * @return CreditCardData
     */
    public function getCard()
    {
      return $this->Card;
    }

    /**
     * @param CreditCardData $Card
     * @return \App\models\ATSFlight\CreditCardRequest
     */
    public function setCard($Card)
    {
      $this->Card = $Card;
      return $this;
    }

    /**
     * @return CustomerData
     */
    public function getCustomer()
    {
      return $this->Customer;
    }

    /**
     * @param CustomerData $Customer
     * @return \App\models\ATSFlight\CreditCardRequest
     */
    public function setCustomer($Customer)
    {
      $this->Customer = $Customer;
      return $this;
    }

    /**
     * @return PriceData
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param PriceData $Price
     * @return \App\models\ATSFlight\CreditCardRequest
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return string
     */
    public function getProvider()
    {
      return $this->Provider;
    }

    /**
     * @param string $Provider
     * @return \App\models\ATSFlight\CreditCardRequest
     */
    public function setProvider($Provider)
    {
      $this->Provider = $Provider;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordLocator()
    {
      return $this->RecordLocator;
    }

    /**
     * @param string $RecordLocator
     * @return \App\models\ATSFlight\CreditCardRequest
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefNr()
    {
      return $this->RefNr;
    }

    /**
     * @param string $RefNr
     * @return \App\models\ATSFlight\CreditCardRequest
     */
    public function setRefNr($RefNr)
    {
      $this->RefNr = $RefNr;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefText()
    {
      return $this->RefText;
    }

    /**
     * @param string $RefText
     * @return \App\models\ATSFlight\CreditCardRequest
     */
    public function setRefText($RefText)
    {
      $this->RefText = $RefText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTestMode()
    {
      return $this->TestMode;
    }

    /**
     * @param boolean $TestMode
     * @return \App\models\ATSFlight\CreditCardRequest
     */
    public function setTestMode($TestMode)
    {
      $this->TestMode = $TestMode;
      return $this;
    }

}
