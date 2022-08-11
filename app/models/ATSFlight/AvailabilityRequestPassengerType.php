<?php

namespace App\models\ATSFlight;

class AvailabilityRequestPassengerType
{

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @param int $Number
     * @param PassengerTypeEnum $PassengerType
     */
    public function __construct($Number, $PassengerType)
    {
      $this->Number = $Number;
      $this->PassengerType = $PassengerType;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \App\models\ATSFlight\AvailabilityRequestPassengerType
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
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
     * @return \App\models\ATSFlight\AvailabilityRequestPassengerType
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

}
