<?php

namespace App\models\ATSFlight;

class FareResponseConnection
{

    /**
     * @var string $AvailString
     */
    protected $AvailString = null;

    /**
     * @var string $ClassOfFlight
     */
    protected $ClassOfFlight = null;

    /**
     * @var string $ETicketingInformation
     */
    protected $ETicketingInformation = null;

    /**
     * @var ArrayOfstring $FareGroups
     */
    protected $FareGroups = null;

    /**
     * @var duration $LegTravelTime
     */
    protected $LegTravelTime = null;

    /**
     * @var boolean $MCTExceeded
     */
    protected $MCTExceeded = null;

    /**
     * @var ArrayOfFareResponseSegment $Segments
     */
    protected $Segments = null;

    /**
     * @var AirportMCT $UsedMCT
     */
    protected $UsedMCT = null;

    
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
     * @return \App\models\ATSFlight\FareResponseConnection
     */
    public function setAvailString($AvailString)
    {
      $this->AvailString = $AvailString;
      return $this;
    }

    /**
     * @return string
     */
    public function getClassOfFlight()
    {
      return $this->ClassOfFlight;
    }

    /**
     * @param string $ClassOfFlight
     * @return \App\models\ATSFlight\FareResponseConnection
     */
    public function setClassOfFlight($ClassOfFlight)
    {
      $this->ClassOfFlight = $ClassOfFlight;
      return $this;
    }

    /**
     * @return string
     */
    public function getETicketingInformation()
    {
      return $this->ETicketingInformation;
    }

    /**
     * @param string $ETicketingInformation
     * @return \App\models\ATSFlight\FareResponseConnection
     */
    public function setETicketingInformation($ETicketingInformation)
    {
      $this->ETicketingInformation = $ETicketingInformation;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFareGroups()
    {
      return $this->FareGroups;
    }

    /**
     * @param ArrayOfstring $FareGroups
     * @return \App\models\ATSFlight\FareResponseConnection
     */
    public function setFareGroups($FareGroups)
    {
      $this->FareGroups = $FareGroups;
      return $this;
    }

    /**
     * @return duration
     */
    public function getLegTravelTime()
    {
      return $this->LegTravelTime;
    }

    /**
     * @param duration $LegTravelTime
     * @return \App\models\ATSFlight\FareResponseConnection
     */
    public function setLegTravelTime($LegTravelTime)
    {
      $this->LegTravelTime = $LegTravelTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMCTExceeded()
    {
      return $this->MCTExceeded;
    }

    /**
     * @param boolean $MCTExceeded
     * @return \App\models\ATSFlight\FareResponseConnection
     */
    public function setMCTExceeded($MCTExceeded)
    {
      $this->MCTExceeded = $MCTExceeded;
      return $this;
    }

    /**
     * @return ArrayOfFareResponseSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfFareResponseSegment $Segments
     * @return \App\models\ATSFlight\FareResponseConnection
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

    /**
     * @return AirportMCT
     */
    public function getUsedMCT()
    {
      return $this->UsedMCT;
    }

    /**
     * @param AirportMCT $UsedMCT
     * @return \App\models\ATSFlight\FareResponseConnection
     */
    public function setUsedMCT($UsedMCT)
    {
      $this->UsedMCT = $UsedMCT;
      return $this;
    }

}
