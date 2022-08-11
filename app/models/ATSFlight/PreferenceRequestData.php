<?php

namespace App\models\ATSFlight;

class PreferenceRequestData
{

    /**
     * @var ArrayOfstring $Currencies
     */
    protected $Currencies = null;

    /**
     * @var ArrayOfstring $Destinations
     */
    protected $Destinations = null;

    /**
     * @var ArrayOfstring $DurationRange
     */
    protected $DurationRange = null;

    /**
     * @var PrefFareTypeEnum $FareTypes
     */
    protected $FareTypes = null;

    /**
     * @var ArrayOfstring $KeywordTables
     */
    protected $KeywordTables = null;

    /**
     * @var ArrayOfstring $MandatoryKeywords
     */
    protected $MandatoryKeywords = null;

    /**
     * @var ArrayOfstring $Matchcodes
     */
    protected $Matchcodes = null;

    /**
     * @var float $MaximumPASFare
     */
    protected $MaximumPASFare = null;

    /**
     * @var int $MaximumTemperature
     */
    protected $MaximumTemperature = null;

    /**
     * @var float $MinimumPASFare
     */
    protected $MinimumPASFare = null;

    /**
     * @var int $MinimumTemperature
     */
    protected $MinimumTemperature = null;

    /**
     * @var ArrayOfstring $NetFareDBCodes
     */
    protected $NetFareDBCodes = null;

    /**
     * @var boolean $OnewayFlight
     */
    protected $OnewayFlight = null;

    /**
     * @var ArrayOfstring $OptionalKeywords
     */
    protected $OptionalKeywords = null;

    /**
     * @var ArrayOfstring $Origins
     */
    protected $Origins = null;

    /**
     * @var ArrayOfstring $PCCs
     */
    protected $PCCs = null;

    /**
     * @var PrefSortEnum $Sorted
     */
    protected $Sorted = null;

    /**
     * @var ArrayOfPreferenceTravelDates $TravelDates
     */
    protected $TravelDates = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getCurrencies()
    {
      return $this->Currencies;
    }

    /**
     * @param ArrayOfstring $Currencies
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setCurrencies($Currencies)
    {
      $this->Currencies = $Currencies;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getDestinations()
    {
      return $this->Destinations;
    }

    /**
     * @param ArrayOfstring $Destinations
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setDestinations($Destinations)
    {
      $this->Destinations = $Destinations;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getDurationRange()
    {
      return $this->DurationRange;
    }

    /**
     * @param ArrayOfstring $DurationRange
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setDurationRange($DurationRange)
    {
      $this->DurationRange = $DurationRange;
      return $this;
    }

    /**
     * @return PrefFareTypeEnum
     */
    public function getFareTypes()
    {
      return $this->FareTypes;
    }

    /**
     * @param PrefFareTypeEnum $FareTypes
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setFareTypes($FareTypes)
    {
      $this->FareTypes = $FareTypes;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getKeywordTables()
    {
      return $this->KeywordTables;
    }

    /**
     * @param ArrayOfstring $KeywordTables
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setKeywordTables($KeywordTables)
    {
      $this->KeywordTables = $KeywordTables;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getMandatoryKeywords()
    {
      return $this->MandatoryKeywords;
    }

    /**
     * @param ArrayOfstring $MandatoryKeywords
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setMandatoryKeywords($MandatoryKeywords)
    {
      $this->MandatoryKeywords = $MandatoryKeywords;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getMatchcodes()
    {
      return $this->Matchcodes;
    }

    /**
     * @param ArrayOfstring $Matchcodes
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setMatchcodes($Matchcodes)
    {
      $this->Matchcodes = $Matchcodes;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaximumPASFare()
    {
      return $this->MaximumPASFare;
    }

    /**
     * @param float $MaximumPASFare
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setMaximumPASFare($MaximumPASFare)
    {
      $this->MaximumPASFare = $MaximumPASFare;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaximumTemperature()
    {
      return $this->MaximumTemperature;
    }

    /**
     * @param int $MaximumTemperature
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setMaximumTemperature($MaximumTemperature)
    {
      $this->MaximumTemperature = $MaximumTemperature;
      return $this;
    }

    /**
     * @return float
     */
    public function getMinimumPASFare()
    {
      return $this->MinimumPASFare;
    }

    /**
     * @param float $MinimumPASFare
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setMinimumPASFare($MinimumPASFare)
    {
      $this->MinimumPASFare = $MinimumPASFare;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumTemperature()
    {
      return $this->MinimumTemperature;
    }

    /**
     * @param int $MinimumTemperature
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setMinimumTemperature($MinimumTemperature)
    {
      $this->MinimumTemperature = $MinimumTemperature;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getNetFareDBCodes()
    {
      return $this->NetFareDBCodes;
    }

    /**
     * @param ArrayOfstring $NetFareDBCodes
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setNetFareDBCodes($NetFareDBCodes)
    {
      $this->NetFareDBCodes = $NetFareDBCodes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnewayFlight()
    {
      return $this->OnewayFlight;
    }

    /**
     * @param boolean $OnewayFlight
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setOnewayFlight($OnewayFlight)
    {
      $this->OnewayFlight = $OnewayFlight;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getOptionalKeywords()
    {
      return $this->OptionalKeywords;
    }

    /**
     * @param ArrayOfstring $OptionalKeywords
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setOptionalKeywords($OptionalKeywords)
    {
      $this->OptionalKeywords = $OptionalKeywords;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getOrigins()
    {
      return $this->Origins;
    }

    /**
     * @param ArrayOfstring $Origins
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setOrigins($Origins)
    {
      $this->Origins = $Origins;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getPCCs()
    {
      return $this->PCCs;
    }

    /**
     * @param ArrayOfstring $PCCs
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setPCCs($PCCs)
    {
      $this->PCCs = $PCCs;
      return $this;
    }

    /**
     * @return PrefSortEnum
     */
    public function getSorted()
    {
      return $this->Sorted;
    }

    /**
     * @param PrefSortEnum $Sorted
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setSorted($Sorted)
    {
      $this->Sorted = $Sorted;
      return $this;
    }

    /**
     * @return ArrayOfPreferenceTravelDates
     */
    public function getTravelDates()
    {
      return $this->TravelDates;
    }

    /**
     * @param ArrayOfPreferenceTravelDates $TravelDates
     * @return \App\models\ATSFlight\PreferenceRequestData
     */
    public function setTravelDates($TravelDates)
    {
      $this->TravelDates = $TravelDates;
      return $this;
    }

}
