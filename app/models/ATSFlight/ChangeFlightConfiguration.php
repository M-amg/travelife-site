<?php

namespace App\models\ATSFlight;

class ChangeFlightConfiguration
{

    /**
     * @var ArrayOfstring $AdminEMailAddresses
     */
    protected $AdminEMailAddresses = null;

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var BookRequestCharter $Charter
     */
    protected $Charter = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var Contact $DeliveryDetails
     */
    protected $DeliveryDetails = null;

    /**
     * @var Contact $InvoiceDetails
     */
    protected $InvoiceDetails = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var BookRequestPayment $Payment
     */
    protected $Payment = null;

    /**
     * @var PaymentDefinitionData $PaymentData
     */
    protected $PaymentData = null;

    /**
     * @var ChangeFlightWebFare $Webfare
     */
    protected $Webfare = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getAdminEMailAddresses()
    {
      return $this->AdminEMailAddresses;
    }

    /**
     * @param ArrayOfstring $AdminEMailAddresses
     * @return \App\models\ATSFlight\ChangeFlightConfiguration
     */
    public function setAdminEMailAddresses($AdminEMailAddresses)
    {
      $this->AdminEMailAddresses = $AdminEMailAddresses;
      return $this;
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
     * @return \App\models\ATSFlight\ChangeFlightConfiguration
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return BookRequestCharter
     */
    public function getCharter()
    {
      return $this->Charter;
    }

    /**
     * @param BookRequestCharter $Charter
     * @return \App\models\ATSFlight\ChangeFlightConfiguration
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
     * @return \App\models\ATSFlight\ChangeFlightConfiguration
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getDeliveryDetails()
    {
      return $this->DeliveryDetails;
    }

    /**
     * @param Contact $DeliveryDetails
     * @return \App\models\ATSFlight\ChangeFlightConfiguration
     */
    public function setDeliveryDetails($DeliveryDetails)
    {
      $this->DeliveryDetails = $DeliveryDetails;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getInvoiceDetails()
    {
      return $this->InvoiceDetails;
    }

    /**
     * @param Contact $InvoiceDetails
     * @return \App\models\ATSFlight\ChangeFlightConfiguration
     */
    public function setInvoiceDetails($InvoiceDetails)
    {
      $this->InvoiceDetails = $InvoiceDetails;
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
     * @return \App\models\ATSFlight\ChangeFlightConfiguration
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return BookRequestPayment
     */
    public function getPayment()
    {
      return $this->Payment;
    }

    /**
     * @param BookRequestPayment $Payment
     * @return \App\models\ATSFlight\ChangeFlightConfiguration
     */
    public function setPayment($Payment)
    {
      $this->Payment = $Payment;
      return $this;
    }

    /**
     * @return PaymentDefinitionData
     */
    public function getPaymentData()
    {
      return $this->PaymentData;
    }

    /**
     * @param PaymentDefinitionData $PaymentData
     * @return \App\models\ATSFlight\ChangeFlightConfiguration
     */
    public function setPaymentData($PaymentData)
    {
      $this->PaymentData = $PaymentData;
      return $this;
    }

    /**
     * @return ChangeFlightWebFare
     */
    public function getWebfare()
    {
      return $this->Webfare;
    }

    /**
     * @param ChangeFlightWebFare $Webfare
     * @return \App\models\ATSFlight\ChangeFlightConfiguration
     */
    public function setWebfare($Webfare)
    {
      $this->Webfare = $Webfare;
      return $this;
    }

}
