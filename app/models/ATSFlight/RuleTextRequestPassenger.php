<?php

namespace App\models\ATSFlight;

class RuleTextRequestPassenger
{

    /**
     * @var string $FreePassengerType
     */
    protected $FreePassengerType = null;

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @param PassengerTypeEnum $PassengerType
     */
    public function __construct($PassengerType)
    {
      $this->PassengerType = $PassengerType;
    }

    /**
     * @return string
     */
    public function getFreePassengerType()
    {
      return $this->FreePassengerType;
    }

    /**
     * @param string $FreePassengerType
     * @return \App\models\ATSFlight\RuleTextRequestPassenger
     */
    public function setFreePassengerType($FreePassengerType)
    {
      $this->FreePassengerType = $FreePassengerType;
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
     * @return \App\models\ATSFlight\RuleTextRequestPassenger
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

}
