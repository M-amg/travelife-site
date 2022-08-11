<?php

namespace App\models\ATSFlight;

class SeatMapPassenger
{

    /**
     * @var \DateTime $DateOfBirth
     */
    protected $DateOfBirth = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var ArrayOfSeatMapFrequentFlyerData $FrequentFlyerInfos
     */
    protected $FrequentFlyerInfos = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
      if ($this->DateOfBirth == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateOfBirth);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateOfBirth
     * @return \App\models\ATSFlight\SeatMapPassenger
     */
    public function setDateOfBirth(\DateTime $DateOfBirth = null)
    {
      if ($DateOfBirth == null) {
       $this->DateOfBirth = null;
      } else {
        $this->DateOfBirth = $DateOfBirth->format(\DateTime::ATOM);
      }
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
     * @return \App\models\ATSFlight\SeatMapPassenger
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
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
     * @return \App\models\ATSFlight\SeatMapPassenger
     */
    public function setFrequentFlyerInfos($FrequentFlyerInfos)
    {
      $this->FrequentFlyerInfos = $FrequentFlyerInfos;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \App\models\ATSFlight\SeatMapPassenger
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
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
     * @return \App\models\ATSFlight\SeatMapPassenger
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

}
