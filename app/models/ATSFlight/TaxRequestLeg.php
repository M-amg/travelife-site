<?php

namespace App\models\ATSFlight;

class TaxRequestLeg
{

    /**
     * @var string $AvailString
     */
    protected $AvailString = null;

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var ArrayOfTaxRequestSegment $Segments
     */
    protected $Segments = null;

    /**
     * @var string $TariffMatchCode
     */
    protected $TariffMatchCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAvailString()
    {
      return $this->AvailString;
    }

    /**
     * @param string $AvailString
     * @return \App\models\ATSFlight\TaxRequestLeg
     */
    public function setAvailString($AvailString)
    {
      $this->AvailString = $AvailString;
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
     * @return \App\models\ATSFlight\TaxRequestLeg
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return ArrayOfTaxRequestSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfTaxRequestSegment $Segments
     * @return \App\models\ATSFlight\TaxRequestLeg
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

    /**
     * @return string
     */
    public function getTariffMatchCode()
    {
      return $this->TariffMatchCode;
    }

    /**
     * @param string $TariffMatchCode
     * @return \App\models\ATSFlight\TaxRequestLeg
     */
    public function setTariffMatchCode($TariffMatchCode)
    {
      $this->TariffMatchCode = $TariffMatchCode;
      return $this;
    }

}
