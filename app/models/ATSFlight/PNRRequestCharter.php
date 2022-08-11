<?php

namespace App\models\ATSFlight;

class PNRRequestCharter
{

    /**
     * @var CharterAccount $Account
     */
    protected $Account = null;

    /**
     * @var Contact $ContactPerson
     */
    protected $ContactPerson = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var boolean $IsLiveBooking
     */
    protected $IsLiveBooking = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @param boolean $IsLiveBooking
     */
    public function __construct($IsLiveBooking)
    {
      $this->IsLiveBooking = $IsLiveBooking;
    }

    /**
     * @return CharterAccount
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param CharterAccount $Account
     * @return \App\models\ATSFlight\PNRRequestCharter
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getContactPerson()
    {
      return $this->ContactPerson;
    }

    /**
     * @param Contact $ContactPerson
     * @return \App\models\ATSFlight\PNRRequestCharter
     */
    public function setContactPerson($ContactPerson)
    {
      $this->ContactPerson = $ContactPerson;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \App\models\ATSFlight\PNRRequestCharter
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLiveBooking()
    {
      return $this->IsLiveBooking;
    }

    /**
     * @param boolean $IsLiveBooking
     * @return \App\models\ATSFlight\PNRRequestCharter
     */
    public function setIsLiveBooking($IsLiveBooking)
    {
      $this->IsLiveBooking = $IsLiveBooking;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguageCode()
    {
      return $this->LanguageCode;
    }

    /**
     * @param string $LanguageCode
     * @return \App\models\ATSFlight\PNRRequestCharter
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

}
