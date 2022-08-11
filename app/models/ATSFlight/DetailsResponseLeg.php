<?php

namespace App\models\ATSFlight;

class DetailsResponseLeg
{

    /**
     * @var boolean $ETicketting
     */
    protected $ETicketting = null;

    /**
     * @var duration $FlightTime
     */
    protected $FlightTime = null;

    /**
     * @var duration $GroundTime
     */
    protected $GroundTime = null;

    /**
     * @var duration $LegtravelTime
     */
    protected $LegtravelTime = null;

    /**
     * @var int $Miles
     */
    protected $Miles = null;

    /**
     * @var int $NumberOfStopsInLeg
     */
    protected $NumberOfStopsInLeg = null;

    /**
     * @var ArrayOfDetailsResponseSegment $Segments
     */
    protected $Segments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getETicketting()
    {
      return $this->ETicketting;
    }

    /**
     * @param boolean $ETicketting
     * @return \App\models\ATSFlight\DetailsResponseLeg
     */
    public function setETicketting($ETicketting)
    {
      $this->ETicketting = $ETicketting;
      return $this;
    }

    /**
     * @return duration
     */
    public function getFlightTime()
    {
      return $this->FlightTime;
    }

    /**
     * @param duration $FlightTime
     * @return \App\models\ATSFlight\DetailsResponseLeg
     */
    public function setFlightTime($FlightTime)
    {
      $this->FlightTime = $FlightTime;
      return $this;
    }

    /**
     * @return duration
     */
    public function getGroundTime()
    {
      return $this->GroundTime;
    }

    /**
     * @param duration $GroundTime
     * @return \App\models\ATSFlight\DetailsResponseLeg
     */
    public function setGroundTime($GroundTime)
    {
      $this->GroundTime = $GroundTime;
      return $this;
    }

    /**
     * @return duration
     */
    public function getLegtravelTime()
    {
      return $this->LegtravelTime;
    }

    /**
     * @param duration $LegtravelTime
     * @return \App\models\ATSFlight\DetailsResponseLeg
     */
    public function setLegtravelTime($LegtravelTime)
    {
      $this->LegtravelTime = $LegtravelTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getMiles()
    {
      return $this->Miles;
    }

    /**
     * @param int $Miles
     * @return \App\models\ATSFlight\DetailsResponseLeg
     */
    public function setMiles($Miles)
    {
      $this->Miles = $Miles;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfStopsInLeg()
    {
      return $this->NumberOfStopsInLeg;
    }

    /**
     * @param int $NumberOfStopsInLeg
     * @return \App\models\ATSFlight\DetailsResponseLeg
     */
    public function setNumberOfStopsInLeg($NumberOfStopsInLeg)
    {
      $this->NumberOfStopsInLeg = $NumberOfStopsInLeg;
      return $this;
    }

    /**
     * @return ArrayOfDetailsResponseSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfDetailsResponseSegment $Segments
     * @return \App\models\ATSFlight\DetailsResponseLeg
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

}
