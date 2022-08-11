<?php

namespace App\models\ATSFlight;

class BoardingRequestData
{

    /**
     * @var ArrayOfstring $Availstrings
     */
    protected $Availstrings = null;

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var BoardingRequestConfiguration $Configuration
     */
    protected $Configuration = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

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
     * @return \App\models\ATSFlight\BoardingRequestData
     */
    public function setAvailstrings($Availstrings)
    {
      $this->Availstrings = $Availstrings;
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
     * @return \App\models\ATSFlight\BoardingRequestData
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return BoardingRequestConfiguration
     */
    public function getConfiguration()
    {
      return $this->Configuration;
    }

    /**
     * @param BoardingRequestConfiguration $Configuration
     * @return \App\models\ATSFlight\BoardingRequestData
     */
    public function setConfiguration($Configuration)
    {
      $this->Configuration = $Configuration;
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
     * @return \App\models\ATSFlight\BoardingRequestData
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
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
     * @return \App\models\ATSFlight\BoardingRequestData
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
     * @return \App\models\ATSFlight\BoardingRequestData
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
     * @return \App\models\ATSFlight\BoardingRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
