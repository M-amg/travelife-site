<?php

namespace App\models\ATSFlight;

class SeatMapFrequentFlyerData
{

    /**
     * @var string $Airline
     */
    protected $Airline = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $ID
     */
    protected $ID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAirline()
    {
      return $this->Airline;
    }

    /**
     * @param string $Airline
     * @return \App\models\ATSFlight\SeatMapFrequentFlyerData
     */
    public function setAirline($Airline)
    {
      $this->Airline = $Airline;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \App\models\ATSFlight\SeatMapFrequentFlyerData
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param string $ID
     * @return \App\models\ATSFlight\SeatMapFrequentFlyerData
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \App\models\ATSFlight\SeatMapFrequentFlyerData
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
