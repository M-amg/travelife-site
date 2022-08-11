<?php

namespace App\models\ATSFlight;

class SeatResSeatData
{

    /**
     * @var string $OriginalPassengerNumber
     */
    protected $OriginalPassengerNumber = null;

    /**
     * @var string $RowNumber
     */
    protected $RowNumber = null;

    /**
     * @var string $SeatNumber
     */
    protected $SeatNumber = null;

    /**
     * @var string $SeatPreference
     */
    protected $SeatPreference = null;

    
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
     * @return \App\models\ATSFlight\SeatResSeatData
     */
    public function setOriginalPassengerNumber($OriginalPassengerNumber)
    {
      $this->OriginalPassengerNumber = $OriginalPassengerNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getRowNumber()
    {
      return $this->RowNumber;
    }

    /**
     * @param string $RowNumber
     * @return \App\models\ATSFlight\SeatResSeatData
     */
    public function setRowNumber($RowNumber)
    {
      $this->RowNumber = $RowNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeatNumber()
    {
      return $this->SeatNumber;
    }

    /**
     * @param string $SeatNumber
     * @return \App\models\ATSFlight\SeatResSeatData
     */
    public function setSeatNumber($SeatNumber)
    {
      $this->SeatNumber = $SeatNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeatPreference()
    {
      return $this->SeatPreference;
    }

    /**
     * @param string $SeatPreference
     * @return \App\models\ATSFlight\SeatResSeatData
     */
    public function setSeatPreference($SeatPreference)
    {
      $this->SeatPreference = $SeatPreference;
      return $this;
    }

}
