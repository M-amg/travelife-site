<?php

namespace App\models\ATSFlight;

class TaxesAndFeesRequestData
{

    /**
     * @var TaxesAndFeesConfig $Config
     */
    protected $Config = null;

    /**
     * @var ArrayOfTaxRequestLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var string $MatchCode
     */
    protected $MatchCode = null;

    /**
     * @var ArrayOfTaxRequestPassenger $PassengerTypes
     */
    protected $PassengerTypes = null;

    /**
     * @var string $PublishedTaxOverrideDBCode
     */
    protected $PublishedTaxOverrideDBCode = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

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
     * @return TaxesAndFeesConfig
     */
    public function getConfig()
    {
      return $this->Config;
    }

    /**
     * @param TaxesAndFeesConfig $Config
     * @return \App\models\ATSFlight\TaxesAndFeesRequestData
     */
    public function setConfig($Config)
    {
      $this->Config = $Config;
      return $this;
    }

    /**
     * @return ArrayOfTaxRequestLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfTaxRequestLeg $Legs
     * @return \App\models\ATSFlight\TaxesAndFeesRequestData
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatchCode()
    {
      return $this->MatchCode;
    }

    /**
     * @param string $MatchCode
     * @return \App\models\ATSFlight\TaxesAndFeesRequestData
     */
    public function setMatchCode($MatchCode)
    {
      $this->MatchCode = $MatchCode;
      return $this;
    }

    /**
     * @return ArrayOfTaxRequestPassenger
     */
    public function getPassengerTypes()
    {
      return $this->PassengerTypes;
    }

    /**
     * @param ArrayOfTaxRequestPassenger $PassengerTypes
     * @return \App\models\ATSFlight\TaxesAndFeesRequestData
     */
    public function setPassengerTypes($PassengerTypes)
    {
      $this->PassengerTypes = $PassengerTypes;
      return $this;
    }

    /**
     * @return string
     */
    public function getPublishedTaxOverrideDBCode()
    {
      return $this->PublishedTaxOverrideDBCode;
    }

    /**
     * @param string $PublishedTaxOverrideDBCode
     * @return \App\models\ATSFlight\TaxesAndFeesRequestData
     */
    public function setPublishedTaxOverrideDBCode($PublishedTaxOverrideDBCode)
    {
      $this->PublishedTaxOverrideDBCode = $PublishedTaxOverrideDBCode;
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
     * @return \App\models\ATSFlight\TaxesAndFeesRequestData
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
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
     * @return \App\models\ATSFlight\TaxesAndFeesRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
