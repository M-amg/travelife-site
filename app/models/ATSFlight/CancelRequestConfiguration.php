<?php

namespace App\models\ATSFlight;

class CancelRequestConfiguration
{

    /**
     * @var string $AgencyPhone
     */
    protected $AgencyPhone = null;

    /**
     * @var AllotmentAccount $AllotmentAccountData
     */
    protected $AllotmentAccountData = null;

    /**
     * @var string $ClientBusinessPhone
     */
    protected $ClientBusinessPhone = null;

    /**
     * @var string $ClientHomePhone
     */
    protected $ClientHomePhone = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var string $CustomerReferenceNumber
     */
    protected $CustomerReferenceNumber = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAgencyPhone()
    {
      return $this->AgencyPhone;
    }

    /**
     * @param string $AgencyPhone
     * @return \App\models\ATSFlight\CancelRequestConfiguration
     */
    public function setAgencyPhone($AgencyPhone)
    {
      $this->AgencyPhone = $AgencyPhone;
      return $this;
    }

    /**
     * @return AllotmentAccount
     */
    public function getAllotmentAccountData()
    {
      return $this->AllotmentAccountData;
    }

    /**
     * @param AllotmentAccount $AllotmentAccountData
     * @return \App\models\ATSFlight\CancelRequestConfiguration
     */
    public function setAllotmentAccountData($AllotmentAccountData)
    {
      $this->AllotmentAccountData = $AllotmentAccountData;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientBusinessPhone()
    {
      return $this->ClientBusinessPhone;
    }

    /**
     * @param string $ClientBusinessPhone
     * @return \App\models\ATSFlight\CancelRequestConfiguration
     */
    public function setClientBusinessPhone($ClientBusinessPhone)
    {
      $this->ClientBusinessPhone = $ClientBusinessPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientHomePhone()
    {
      return $this->ClientHomePhone;
    }

    /**
     * @param string $ClientHomePhone
     * @return \App\models\ATSFlight\CancelRequestConfiguration
     */
    public function setClientHomePhone($ClientHomePhone)
    {
      $this->ClientHomePhone = $ClientHomePhone;
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
     * @return \App\models\ATSFlight\CancelRequestConfiguration
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReferenceNumber()
    {
      return $this->CustomerReferenceNumber;
    }

    /**
     * @param string $CustomerReferenceNumber
     * @return \App\models\ATSFlight\CancelRequestConfiguration
     */
    public function setCustomerReferenceNumber($CustomerReferenceNumber)
    {
      $this->CustomerReferenceNumber = $CustomerReferenceNumber;
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
     * @return \App\models\ATSFlight\CancelRequestConfiguration
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

}
