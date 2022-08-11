<?php

namespace App\models\ATSFlight;

class FareComplexPassengeGroup
{

    /**
     * @var int $GroupID
     */
    protected $GroupID = null;

    /**
     * @var string $GroupName
     */
    protected $GroupName = null;

    /**
     * @var ArrayOfFareRequestPassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @param int $GroupID
     */
    public function __construct($GroupID)
    {
      $this->GroupID = $GroupID;
    }

    /**
     * @return int
     */
    public function getGroupID()
    {
      return $this->GroupID;
    }

    /**
     * @param int $GroupID
     * @return \App\models\ATSFlight\FareComplexPassengeGroup
     */
    public function setGroupID($GroupID)
    {
      $this->GroupID = $GroupID;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
      return $this->GroupName;
    }

    /**
     * @param string $GroupName
     * @return \App\models\ATSFlight\FareComplexPassengeGroup
     */
    public function setGroupName($GroupName)
    {
      $this->GroupName = $GroupName;
      return $this;
    }

    /**
     * @return ArrayOfFareRequestPassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfFareRequestPassenger $Passengers
     * @return \App\models\ATSFlight\FareComplexPassengeGroup
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

}
