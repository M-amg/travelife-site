<?php

namespace App\models\ATSFlight;

class PaymentRequestData
{

    /**
     * @var ArrayOfstring $Availstrings
     */
    protected $Availstrings = null;

    /**
     * @var CacheConfigurationData $CacheConfig
     */
    protected $CacheConfig = null;

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var PaymentRequestCharter $Charter
     */
    protected $Charter = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var string $Departure
     */
    protected $Departure = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var string $Recordset
     */
    protected $Recordset = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var PaymentRequestWeb $WebFare
     */
    protected $WebFare = null;

    /**
     * @param SourceModuleEnum $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
    }

    /**
     * @return ArrayOfstring
     */
    public function getAvailstrings()
    {
      return $this->Availstrings;
    }

    /**
     * @param ArrayOfstring $Availstrings
     * @return \App\models\ATSFlight\PaymentRequestData
     */
    public function setAvailstrings($Availstrings)
    {
      $this->Availstrings = $Availstrings;
      return $this;
    }

    /**
     * @return CacheConfigurationData
     */
    public function getCacheConfig()
    {
      return $this->CacheConfig;
    }

    /**
     * @param CacheConfigurationData $CacheConfig
     * @return \App\models\ATSFlight\PaymentRequestData
     */
    public function setCacheConfig($CacheConfig)
    {
      $this->CacheConfig = $CacheConfig;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrierCode()
    {
      return $this->CarrierCode;
    }

    /**
     * @param string $CarrierCode
     * @return \App\models\ATSFlight\PaymentRequestData
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return PaymentRequestCharter
     */
    public function getCharter()
    {
      return $this->Charter;
    }

    /**
     * @param PaymentRequestCharter $Charter
     * @return \App\models\ATSFlight\PaymentRequestData
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
     * @return \App\models\ATSFlight\PaymentRequestData
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeparture()
    {
      return $this->Departure;
    }

    /**
     * @param string $Departure
     * @return \App\models\ATSFlight\PaymentRequestData
     */
    public function setDeparture($Departure)
    {
      $this->Departure = $Departure;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
      if ($this->DepartureDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DepartureDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DepartureDate
     * @return \App\models\ATSFlight\PaymentRequestData
     */
    public function setDepartureDate(\DateTime $DepartureDate = null)
    {
      if ($DepartureDate == null) {
       $this->DepartureDate = null;
      } else {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
      }
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
     * @return \App\models\ATSFlight\PaymentRequestData
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
     * @return \App\models\ATSFlight\PaymentRequestData
     */
    public function setRecordset($Recordset)
    {
      $this->Recordset = $Recordset;
      return $this;
    }

    /**
     * @return SourceModuleEnum
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param SourceModuleEnum $Source
     * @return \App\models\ATSFlight\PaymentRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return PaymentRequestWeb
     */
    public function getWebFare()
    {
      return $this->WebFare;
    }

    /**
     * @param PaymentRequestWeb $WebFare
     * @return \App\models\ATSFlight\PaymentRequestData
     */
    public function setWebFare($WebFare)
    {
      $this->WebFare = $WebFare;
      return $this;
    }

}
