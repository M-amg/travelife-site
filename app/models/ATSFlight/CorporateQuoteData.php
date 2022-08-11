<?php

namespace App\models\ATSFlight;

class CorporateQuoteData
{

    /**
     * @var string $CorporateCode
     */
    protected $CorporateCode = null;

    /**
     * @var string $FareBase
     */
    protected $FareBase = null;

    /**
     * @var string $FareBrand
     */
    protected $FareBrand = null;

    /**
     * @var string $FareSelectionCurrenyCode
     */
    protected $FareSelectionCurrenyCode = null;

    /**
     * @var string $FareTypeCode
     */
    protected $FareTypeCode = null;

    /**
     * @var GDSEnum $GDS
     */
    protected $GDS = null;

    /**
     * @var string $Identifier
     */
    protected $Identifier = null;

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var boolean $Special
     */
    protected $Special = null;

    /**
     * @var TariffTypeEnum $TariffType
     */
    protected $TariffType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCorporateCode()
    {
      return $this->CorporateCode;
    }

    /**
     * @param string $CorporateCode
     * @return \App\models\ATSFlight\CorporateQuoteData
     */
    public function setCorporateCode($CorporateCode)
    {
      $this->CorporateCode = $CorporateCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBase()
    {
      return $this->FareBase;
    }

    /**
     * @param string $FareBase
     * @return \App\models\ATSFlight\CorporateQuoteData
     */
    public function setFareBase($FareBase)
    {
      $this->FareBase = $FareBase;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBrand()
    {
      return $this->FareBrand;
    }

    /**
     * @param string $FareBrand
     * @return \App\models\ATSFlight\CorporateQuoteData
     */
    public function setFareBrand($FareBrand)
    {
      $this->FareBrand = $FareBrand;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareSelectionCurrenyCode()
    {
      return $this->FareSelectionCurrenyCode;
    }

    /**
     * @param string $FareSelectionCurrenyCode
     * @return \App\models\ATSFlight\CorporateQuoteData
     */
    public function setFareSelectionCurrenyCode($FareSelectionCurrenyCode)
    {
      $this->FareSelectionCurrenyCode = $FareSelectionCurrenyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareTypeCode()
    {
      return $this->FareTypeCode;
    }

    /**
     * @param string $FareTypeCode
     * @return \App\models\ATSFlight\CorporateQuoteData
     */
    public function setFareTypeCode($FareTypeCode)
    {
      $this->FareTypeCode = $FareTypeCode;
      return $this;
    }

    /**
     * @return GDSEnum
     */
    public function getGDS()
    {
      return $this->GDS;
    }

    /**
     * @param GDSEnum $GDS
     * @return \App\models\ATSFlight\CorporateQuoteData
     */
    public function setGDS($GDS)
    {
      $this->GDS = $GDS;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
      return $this->Identifier;
    }

    /**
     * @param string $Identifier
     * @return \App\models\ATSFlight\CorporateQuoteData
     */
    public function setIdentifier($Identifier)
    {
      $this->Identifier = $Identifier;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param PassengerTypeEnum $PassengerType
     * @return \App\models\ATSFlight\CorporateQuoteData
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSpecial()
    {
      return $this->Special;
    }

    /**
     * @param boolean $Special
     * @return \App\models\ATSFlight\CorporateQuoteData
     */
    public function setSpecial($Special)
    {
      $this->Special = $Special;
      return $this;
    }

    /**
     * @return TariffTypeEnum
     */
    public function getTariffType()
    {
      return $this->TariffType;
    }

    /**
     * @param TariffTypeEnum $TariffType
     * @return \App\models\ATSFlight\CorporateQuoteData
     */
    public function setTariffType($TariffType)
    {
      $this->TariffType = $TariffType;
      return $this;
    }

}
