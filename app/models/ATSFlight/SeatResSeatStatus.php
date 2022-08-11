<?php

namespace App\models\ATSFlight;

class SeatResSeatStatus
{

    /**
     * @var string $OriginalPassengerNumber
     */
    protected $OriginalPassengerNumber = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getOriginalPassengerNumber()
    {
      return $this->OriginalPassengerNumber;
    }

    /**
     * @param string $OriginalPassengerNumber
     * @return \App\models\ATSFlight\SeatResSeatStatus
     */
    public function setOriginalPassengerNumber($OriginalPassengerNumber)
    {
      $this->OriginalPassengerNumber = $OriginalPassengerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \App\models\ATSFlight\SeatResSeatStatus
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
