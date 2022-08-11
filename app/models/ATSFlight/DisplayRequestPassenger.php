<?php

namespace App\models\ATSFlight;

class DisplayRequestPassenger
{

    /**
     * @var string $FreePassengerType
     */
    protected $FreePassengerType = null;

    /**
     * @var PassengerTypeEnum $Type
     */
    protected $Type = null;

    /**
     * @param PassengerTypeEnum $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
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
     * @return \App\models\ATSFlight\DisplayRequestPassenger
     */
    public function setFreePassengerType($FreePassengerType)
    {
      $this->FreePassengerType = $FreePassengerType;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param PassengerTypeEnum $Type
     * @return \App\models\ATSFlight\DisplayRequestPassenger
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
