<?php

namespace App\models\ATSFlight;

class TaxesAndFeesConfig
{

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var TaxesAndFeesCharter $Charter
     */
    protected $Charter = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var string $CustomerReferenceNo
     */
    protected $CustomerReferenceNo = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var string $Recordset
     */
    protected $Recordset = null;

    /**
     * @var boolean $ReturnQSurcharge
     */
    protected $ReturnQSurcharge = null;

    /**
     * @var Vayant $VayantConfig
     */
    protected $VayantConfig = null;

    /**
     * @var TaxesAndFeesWeb $WebFare
     */
    protected $WebFare = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CRS
     */
    public function getCRSConfig()
    {
      return $this->CRSConfig;
    }

    /**
     * @param CRS $CRSConfig
     * @return \App\models\ATSFlight\TaxesAndFeesConfig
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return TaxesAndFeesCharter
     */
    public function getCharter()
    {
      return $this->Charter;
    }

    /**
     * @param TaxesAndFeesCharter $Charter
     * @return \App\models\ATSFlight\TaxesAndFeesConfig
     */
    public function setCharter($Charter)
    {
      $this->Charter = $Charter;
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
     * @return \App\models\ATSFlight\TaxesAndFeesConfig
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReferenceNo()
    {
      return $this->CustomerReferenceNo;
    }

    /**
     * @param string $CustomerReferenceNo
     * @return \App\models\ATSFlight\TaxesAndFeesConfig
     */
    public function setCustomerReferenceNo($CustomerReferenceNo)
    {
      $this->CustomerReferenceNo = $CustomerReferenceNo;
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
     * @return \App\models\ATSFlight\TaxesAndFeesConfig
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordset()
    {
      return $this->Recordset;
    }

    /**
     * @param string $Recordset
     * @return \App\models\ATSFlight\TaxesAndFeesConfig
     */
    public function setRecordset($Recordset)
    {
      $this->Recordset = $Recordset;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnQSurcharge()
    {
      return $this->ReturnQSurcharge;
    }

    /**
     * @param boolean $ReturnQSurcharge
     * @return \App\models\ATSFlight\TaxesAndFeesConfig
     */
    public function setReturnQSurcharge($ReturnQSurcharge)
    {
      $this->ReturnQSurcharge = $ReturnQSurcharge;
      return $this;
    }

    /**
     * @return Vayant
     */
    public function getVayantConfig()
    {
      return $this->VayantConfig;
    }

    /**
     * @param Vayant $VayantConfig
     * @return \App\models\ATSFlight\TaxesAndFeesConfig
     */
    public function setVayantConfig($VayantConfig)
    {
      $this->VayantConfig = $VayantConfig;
      return $this;
    }

    /**
     * @return TaxesAndFeesWeb
     */
    public function getWebFare()
    {
      return $this->WebFare;
    }

    /**
     * @param TaxesAndFeesWeb $WebFare
     * @return \App\models\ATSFlight\TaxesAndFeesConfig
     */
    public function setWebFare($WebFare)
    {
      $this->WebFare = $WebFare;
      return $this;
    }

}
