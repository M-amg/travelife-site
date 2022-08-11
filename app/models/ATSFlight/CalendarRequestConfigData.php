<?php

namespace App\models\ATSFlight;

class CalendarRequestConfigData extends RequestConfigurationData
{

    /**
     * @var ArrayOfCacheConfigurationData $Cache
     */
    protected $Cache = null;

    /**
     * @var FareDivsersityEnum $FareDiversity
     */
    protected $FareDiversity = null;

    /**
     * @var boolean $FixedStay
     */
    protected $FixedStay = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var int $NumberOfFaresPerCell
     */
    protected $NumberOfFaresPerCell = null;

    /**
     * @var int $RestrictOvernight
     */
    protected $RestrictOvernight = null;

    /**
     * @var NonStopEnum $ReturnNonStopFlightsOnly
     */
    protected $ReturnNonStopFlightsOnly = null;

    /**
     * @param int $NumberOfFaresPerCell
     */
    public function __construct($NumberOfFaresPerCell)
    {
      parent::__construct();
      $this->NumberOfFaresPerCell = $NumberOfFaresPerCell;
    }

    /**
     * @return ArrayOfCacheConfigurationData
     */
    public function getCache()
    {
      return $this->Cache;
    }

    /**
     * @param ArrayOfCacheConfigurationData $Cache
     * @return \App\models\ATSFlight\CalendarRequestConfigData
     */
    public function setCache($Cache)
    {
      $this->Cache = $Cache;
      return $this;
    }

    /**
     * @return FareDivsersityEnum
     */
    public function getFareDiversity()
    {
      return $this->FareDiversity;
    }

    /**
     * @param FareDivsersityEnum $FareDiversity
     * @return \App\models\ATSFlight\CalendarRequestConfigData
     */
    public function setFareDiversity($FareDiversity)
    {
      $this->FareDiversity = $FareDiversity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFixedStay()
    {
      return $this->FixedStay;
    }

    /**
     * @param boolean $FixedStay
     * @return \App\models\ATSFlight\CalendarRequestConfigData
     */
    public function setFixedStay($FixedStay)
    {
      $this->FixedStay = $FixedStay;
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
     * @return \App\models\ATSFlight\CalendarRequestConfigData
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfFaresPerCell()
    {
      return $this->NumberOfFaresPerCell;
    }

    /**
     * @param int $NumberOfFaresPerCell
     * @return \App\models\ATSFlight\CalendarRequestConfigData
     */
    public function setNumberOfFaresPerCell($NumberOfFaresPerCell)
    {
      $this->NumberOfFaresPerCell = $NumberOfFaresPerCell;
      return $this;
    }

    /**
     * @return int
     */
    public function getRestrictOvernight()
    {
      return $this->RestrictOvernight;
    }

    /**
     * @param int $RestrictOvernight
     * @return \App\models\ATSFlight\CalendarRequestConfigData
     */
    public function setRestrictOvernight($RestrictOvernight)
    {
      $this->RestrictOvernight = $RestrictOvernight;
      return $this;
    }

    /**
     * @return NonStopEnum
     */
    public function getReturnNonStopFlightsOnly()
    {
      return $this->ReturnNonStopFlightsOnly;
    }

    /**
     * @param NonStopEnum $ReturnNonStopFlightsOnly
     * @return \App\models\ATSFlight\CalendarRequestConfigData
     */
    public function setReturnNonStopFlightsOnly($ReturnNonStopFlightsOnly)
    {
      $this->ReturnNonStopFlightsOnly = $ReturnNonStopFlightsOnly;
      return $this;
    }

}
