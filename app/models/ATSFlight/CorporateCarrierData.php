<?php

namespace App\models\ATSFlight;

class CorporateCarrierData
{

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var ArrayOfCorporateQuoteData $CorporateQuotes
     */
    protected $CorporateQuotes = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\CorporateCarrierData
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return ArrayOfCorporateQuoteData
     */
    public function getCorporateQuotes()
    {
      return $this->CorporateQuotes;
    }

    /**
     * @param ArrayOfCorporateQuoteData $CorporateQuotes
     * @return \App\models\ATSFlight\CorporateCarrierData
     */
    public function setCorporateQuotes($CorporateQuotes)
    {
      $this->CorporateQuotes = $CorporateQuotes;
      return $this;
    }

}
