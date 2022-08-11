<?php

namespace App\models\ATSFlight;

class TermsAndConditionsRequestData
{

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var TermsAndConditionsRequestCharter $Charter
     */
    protected $Charter = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var string $RecordSet
     */
    protected $RecordSet = null;

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
     * @return string
     */
    public function getCarrierCode()
    {
      return $this->CarrierCode;
    }

    /**
     * @param string $CarrierCode
     * @return \App\models\ATSFlight\TermsAndConditionsRequestData
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return TermsAndConditionsRequestCharter
     */
    public function getCharter()
    {
      return $this->Charter;
    }

    /**
     * @param TermsAndConditionsRequestCharter $Charter
     * @return \App\models\ATSFlight\TermsAndConditionsRequestData
     */
    public function setCharter($Charter)
    {
      $this->Charter = $Charter;
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
     * @return \App\models\ATSFlight\TermsAndConditionsRequestData
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordSet()
    {
      return $this->RecordSet;
    }

    /**
     * @param string $RecordSet
     * @return \App\models\ATSFlight\TermsAndConditionsRequestData
     */
    public function setRecordSet($RecordSet)
    {
      $this->RecordSet = $RecordSet;
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
     * @return \App\models\ATSFlight\TermsAndConditionsRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
