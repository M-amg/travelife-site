<?php

namespace App\models\ATSFlight;

class SeatMapRequestData
{

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var string $CustomerLastName
     */
    protected $CustomerLastName = null;

    /**
     * @var ArrayOfSeatMapSegmentData $FlightSegments
     */
    protected $FlightSegments = null;

    /**
     * @var ArrayOfSeatMapFrequentFlyerData $FrequentFlyerInfos
     */
    protected $FrequentFlyerInfos = null;

    /**
     * @var string $LanguageCode
     */
    protected $LanguageCode = null;

    /**
     * @var ArrayOfSeatMapPassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

    /**
     * @var string $RecordSet
     */
    protected $RecordSet = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var Agent $WebAgent
     */
    protected $WebAgent = null;

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
     * @return \App\models\ATSFlight\SeatMapRequestData
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \App\models\ATSFlight\SeatMapRequestData
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomerLastName()
    {
      return $this->CustomerLastName;
    }

    /**
     * @param string $CustomerLastName
     * @return \App\models\ATSFlight\SeatMapRequestData
     */
    public function setCustomerLastName($CustomerLastName)
    {
      $this->CustomerLastName = $CustomerLastName;
      return $this;
    }

    /**
     * @return ArrayOfSeatMapSegmentData
     */
    public function getFlightSegments()
    {
      return $this->FlightSegments;
    }

    /**
     * @param ArrayOfSeatMapSegmentData $FlightSegments
     * @return \App\models\ATSFlight\SeatMapRequestData
     */
    public function setFlightSegments($FlightSegments)
    {
      $this->FlightSegments = $FlightSegments;
      return $this;
    }

    /**
     * @return ArrayOfSeatMapFrequentFlyerData
     */
    public function getFrequentFlyerInfos()
    {
      return $this->FrequentFlyerInfos;
    }

    /**
     * @param ArrayOfSeatMapFrequentFlyerData $FrequentFlyerInfos
     * @return \App\models\ATSFlight\SeatMapRequestData
     */
    public function setFrequentFlyerInfos($FrequentFlyerInfos)
    {
      $this->FrequentFlyerInfos = $FrequentFlyerInfos;
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
     * @return \App\models\ATSFlight\SeatMapRequestData
     */
    public function setLanguageCode($LanguageCode)
    {
      $this->LanguageCode = $LanguageCode;
      return $this;
    }

    /**
     * @return ArrayOfSeatMapPassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfSeatMapPassenger $Passengers
     * @return \App\models\ATSFlight\SeatMapRequestData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
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
     * @return \App\models\ATSFlight\SeatMapRequestData
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
     * @return \App\models\ATSFlight\SeatMapRequestData
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
     * @return \App\models\ATSFlight\SeatMapRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return Agent
     */
    public function getWebAgent()
    {
      return $this->WebAgent;
    }

    /**
     * @param Agent $WebAgent
     * @return \App\models\ATSFlight\SeatMapRequestData
     */
    public function setWebAgent($WebAgent)
    {
      $this->WebAgent = $WebAgent;
      return $this;
    }

}
