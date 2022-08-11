<?php

namespace App\models\ATSFlight;

class FareRequestVayant extends RequestVayantData
{

    /**
     * @var CheckAvailabilityEnum $CheckAvailability
     */
    protected $CheckAvailability = null;

    /**
     * @param int $NumberOfFares
     */
    public function __construct($NumberOfFares)
    {
      parent::__construct($NumberOfFares);
    }

    /**
     * @return CheckAvailabilityEnum
     */
    public function getCheckAvailability()
    {
      return $this->CheckAvailability;
    }

    /**
     * @param CheckAvailabilityEnum $CheckAvailability
     * @return \App\models\ATSFlight\FareRequestVayant
     */
    public function setCheckAvailability($CheckAvailability)
    {
      $this->CheckAvailability = $CheckAvailability;
      return $this;
    }

}
