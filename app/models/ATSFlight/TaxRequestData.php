<?php

namespace App\models\ATSFlight;

class TaxRequestData
{

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var string $CustomerReferenceNo
     */
    protected $CustomerReferenceNo = null;

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
     * @var string $RecordSet
     */
    protected $RecordSet = null;

    /**
     * @var boolean $ReturnQSurcharge
     */
    protected $ReturnQSurcharge = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var Vayant $VayantConfig
     */
    protected $VayantConfig = null;

    /**
     * @param SourceModuleEnum $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
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
     * @return \App\models\ATSFlight\TaxRequestData
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \App\models\ATSFlight\TaxRequestData
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
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
     * @return \App\models\ATSFlight\TaxRequestData
     */
    public function setCustomerReferenceNo($CustomerReferenceNo)
    {
      $this->CustomerReferenceNo = $CustomerReferenceNo;
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
     * @return \App\models\ATSFlight\TaxRequestData
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
     * @return \App\models\ATSFlight\TaxRequestData
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
     * @return \App\models\ATSFlight\TaxRequestData
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
     * @return \App\models\ATSFlight\TaxRequestData
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
     * @return \App\models\ATSFlight\TaxRequestData
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
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
     * @return \App\models\ATSFlight\TaxRequestData
     */
    public function setRecordSet($RecordSet)
    {
      $this->RecordSet = $RecordSet;
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
     * @return \App\models\ATSFlight\TaxRequestData
     */
    public function setReturnQSurcharge($ReturnQSurcharge)
    {
      $this->ReturnQSurcharge = $ReturnQSurcharge;
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
     * @return \App\models\ATSFlight\TaxRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
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
     * @return \App\models\ATSFlight\TaxRequestData
     */
    public function setVayantConfig($VayantConfig)
    {
      $this->VayantConfig = $VayantConfig;
      return $this;
    }

}
