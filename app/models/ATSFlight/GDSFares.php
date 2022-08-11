<?php

namespace App\models\ATSFlight;

class GDSFares
{

    /**
     * @var ArrayOfstring $CorporateCodes
     */
    protected $CorporateCodes = null;

    /**
     * @var string $FareSelectionCurrency
     */
    protected $FareSelectionCurrency = null;

    /**
     * @var GDSTypeEnum $GDSTypes
     */
    protected $GDSTypes = null;

    /**
     * @var int $NumberOfFares
     */
    protected $NumberOfFares = null;

    /**
     * @var PercentageFareOptionEnum $PercentageFareOption
     */
    protected $PercentageFareOption = null;

    /**
     * @var PercentageOverrideEnum $PercentageOverrideOption
     */
    protected $PercentageOverrideOption = null;

    /**
     * @var boolean $PercentageOverridesGDSFare
     */
    protected $PercentageOverridesGDSFare = null;

    /**
     * @var ArrayOfPercentageConfig $PercentagesData
     */
    protected $PercentagesData = null;

    /**
     * @var string $PublishedTaxOverrideDBCode
     */
    protected $PublishedTaxOverrideDBCode = null;

    /**
     * @var boolean $SplitCorporateRequests
     */
    protected $SplitCorporateRequests = null;

    /**
     * @param GDSTypeEnum $GDSTypes
     * @param int $NumberOfFares
     */
    public function __construct($GDSTypes, $NumberOfFares)
    {
      $this->GDSTypes = $GDSTypes;
      $this->NumberOfFares = $NumberOfFares;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCorporateCodes()
    {
      return $this->CorporateCodes;
    }

    /**
     * @param ArrayOfstring $CorporateCodes
     * @return \App\models\ATSFlight\GDSFares
     */
    public function setCorporateCodes($CorporateCodes)
    {
      $this->CorporateCodes = $CorporateCodes;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareSelectionCurrency()
    {
      return $this->FareSelectionCurrency;
    }

    /**
     * @param string $FareSelectionCurrency
     * @return \App\models\ATSFlight\GDSFares
     */
    public function setFareSelectionCurrency($FareSelectionCurrency)
    {
      $this->FareSelectionCurrency = $FareSelectionCurrency;
      return $this;
    }

    /**
     * @return GDSTypeEnum
     */
    public function getGDSTypes()
    {
      return $this->GDSTypes;
    }

    /**
     * @param GDSTypeEnum $GDSTypes
     * @return \App\models\ATSFlight\GDSFares
     */
    public function setGDSTypes($GDSTypes)
    {
      $this->GDSTypes = $GDSTypes;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfFares()
    {
      return $this->NumberOfFares;
    }

    /**
     * @param int $NumberOfFares
     * @return \App\models\ATSFlight\GDSFares
     */
    public function setNumberOfFares($NumberOfFares)
    {
      $this->NumberOfFares = $NumberOfFares;
      return $this;
    }

    /**
     * @return PercentageFareOptionEnum
     */
    public function getPercentageFareOption()
    {
      return $this->PercentageFareOption;
    }

    /**
     * @param PercentageFareOptionEnum $PercentageFareOption
     * @return \App\models\ATSFlight\GDSFares
     */
    public function setPercentageFareOption($PercentageFareOption)
    {
      $this->PercentageFareOption = $PercentageFareOption;
      return $this;
    }

    /**
     * @return PercentageOverrideEnum
     */
    public function getPercentageOverrideOption()
    {
      return $this->PercentageOverrideOption;
    }

    /**
     * @param PercentageOverrideEnum $PercentageOverrideOption
     * @return \App\models\ATSFlight\GDSFares
     */
    public function setPercentageOverrideOption($PercentageOverrideOption)
    {
      $this->PercentageOverrideOption = $PercentageOverrideOption;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPercentageOverridesGDSFare()
    {
      return $this->PercentageOverridesGDSFare;
    }

    /**
     * @param boolean $PercentageOverridesGDSFare
     * @return \App\models\ATSFlight\GDSFares
     */
    public function setPercentageOverridesGDSFare($PercentageOverridesGDSFare)
    {
      $this->PercentageOverridesGDSFare = $PercentageOverridesGDSFare;
      return $this;
    }

    /**
     * @return ArrayOfPercentageConfig
     */
    public function getPercentagesData()
    {
      return $this->PercentagesData;
    }

    /**
     * @param ArrayOfPercentageConfig $PercentagesData
     * @return \App\models\ATSFlight\GDSFares
     */
    public function setPercentagesData($PercentagesData)
    {
      $this->PercentagesData = $PercentagesData;
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
     * @return \App\models\ATSFlight\GDSFares
     */
    public function setPublishedTaxOverrideDBCode($PublishedTaxOverrideDBCode)
    {
      $this->PublishedTaxOverrideDBCode = $PublishedTaxOverrideDBCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSplitCorporateRequests()
    {
      return $this->SplitCorporateRequests;
    }

    /**
     * @param boolean $SplitCorporateRequests
     * @return \App\models\ATSFlight\GDSFares
     */
    public function setSplitCorporateRequests($SplitCorporateRequests)
    {
      $this->SplitCorporateRequests = $SplitCorporateRequests;
      return $this;
    }

}
