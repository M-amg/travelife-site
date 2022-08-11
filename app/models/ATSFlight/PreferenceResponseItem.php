<?php

namespace App\models\ATSFlight;

class PreferenceResponseItem
{

    /**
     * @var \DateTime $ArrivalDate
     */
    protected $ArrivalDate = null;

    /**
     * @var ArrayOfstring $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var string $Destination
     */
    protected $Destination = null;

    /**
     * @var string $FareSource
     */
    protected $FareSource = null;

    /**
     * @var ArrayOfstring $Matchcode
     */
    protected $Matchcode = null;

    /**
     * @var string $MaxTemperature
     */
    protected $MaxTemperature = null;

    /**
     * @var string $MinTemperature
     */
    protected $MinTemperature = null;

    /**
     * @var SourceModuleEnum $ModuleSource
     */
    protected $ModuleSource = null;

    /**
     * @var string $NetFareDB
     */
    protected $NetFareDB = null;

    /**
     * @var ArrayOfstring $OptionalKeywordMatch
     */
    protected $OptionalKeywordMatch = null;

    /**
     * @var string $Origin
     */
    protected $Origin = null;

    /**
     * @var string $PCC
     */
    protected $PCC = null;

    /**
     * @var string $PasFare
     */
    protected $PasFare = null;

    /**
     * @var string $PercentageMatch
     */
    protected $PercentageMatch = null;

    /**
     * @var string $TotalTravelTime
     */
    protected $TotalTravelTime = null;

    /**
     * @var int $TripDuration
     */
    protected $TripDuration = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getArrivalDate()
    {
      if ($this->ArrivalDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArrivalDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArrivalDate
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setArrivalDate(\DateTime $ArrivalDate = null)
    {
      if ($ArrivalDate == null) {
       $this->ArrivalDate = null;
      } else {
        $this->ArrivalDate = $ArrivalDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param ArrayOfstring $Carrier
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
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
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
      if ($this->DepartureDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DepartureDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DepartureDate
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setDepartureDate(\DateTime $DepartureDate = null)
    {
      if ($DepartureDate == null) {
       $this->DepartureDate = null;
      } else {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param string $Destination
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareSource()
    {
      return $this->FareSource;
    }

    /**
     * @param string $FareSource
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setFareSource($FareSource)
    {
      $this->FareSource = $FareSource;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getMatchcode()
    {
      return $this->Matchcode;
    }

    /**
     * @param ArrayOfstring $Matchcode
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setMatchcode($Matchcode)
    {
      $this->Matchcode = $Matchcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMaxTemperature()
    {
      return $this->MaxTemperature;
    }

    /**
     * @param string $MaxTemperature
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setMaxTemperature($MaxTemperature)
    {
      $this->MaxTemperature = $MaxTemperature;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinTemperature()
    {
      return $this->MinTemperature;
    }

    /**
     * @param string $MinTemperature
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setMinTemperature($MinTemperature)
    {
      $this->MinTemperature = $MinTemperature;
      return $this;
    }

    /**
     * @return SourceModuleEnum
     */
    public function getModuleSource()
    {
      return $this->ModuleSource;
    }

    /**
     * @param SourceModuleEnum $ModuleSource
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setModuleSource($ModuleSource)
    {
      $this->ModuleSource = $ModuleSource;
      return $this;
    }

    /**
     * @return string
     */
    public function getNetFareDB()
    {
      return $this->NetFareDB;
    }

    /**
     * @param string $NetFareDB
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setNetFareDB($NetFareDB)
    {
      $this->NetFareDB = $NetFareDB;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getOptionalKeywordMatch()
    {
      return $this->OptionalKeywordMatch;
    }

    /**
     * @param ArrayOfstring $OptionalKeywordMatch
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setOptionalKeywordMatch($OptionalKeywordMatch)
    {
      $this->OptionalKeywordMatch = $OptionalKeywordMatch;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
      return $this->Origin;
    }

    /**
     * @param string $Origin
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setOrigin($Origin)
    {
      $this->Origin = $Origin;
      return $this;
    }

    /**
     * @return string
     */
    public function getPCC()
    {
      return $this->PCC;
    }

    /**
     * @param string $PCC
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setPCC($PCC)
    {
      $this->PCC = $PCC;
      return $this;
    }

    /**
     * @return string
     */
    public function getPasFare()
    {
      return $this->PasFare;
    }

    /**
     * @param string $PasFare
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setPasFare($PasFare)
    {
      $this->PasFare = $PasFare;
      return $this;
    }

    /**
     * @return string
     */
    public function getPercentageMatch()
    {
      return $this->PercentageMatch;
    }

    /**
     * @param string $PercentageMatch
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setPercentageMatch($PercentageMatch)
    {
      $this->PercentageMatch = $PercentageMatch;
      return $this;
    }

    /**
     * @return string
     */
    public function getTotalTravelTime()
    {
      return $this->TotalTravelTime;
    }

    /**
     * @param string $TotalTravelTime
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setTotalTravelTime($TotalTravelTime)
    {
      $this->TotalTravelTime = $TotalTravelTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getTripDuration()
    {
      return $this->TripDuration;
    }

    /**
     * @param int $TripDuration
     * @return \App\models\ATSFlight\PreferenceResponseItem
     */
    public function setTripDuration($TripDuration)
    {
      $this->TripDuration = $TripDuration;
      return $this;
    }

}
