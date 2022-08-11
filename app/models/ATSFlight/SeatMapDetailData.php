<?php

namespace App\models\ATSFlight;

class SeatMapDetailData
{

    /**
     * @var ArrayOfSeatMapAirRowData $AirRows
     */
    protected $AirRows = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfSeatMapAirRowData
     */
    public function getAirRows()
    {
      return $this->AirRows;
    }

    /**
     * @param ArrayOfSeatMapAirRowData $AirRows
     * @return \App\models\ATSFlight\SeatMapDetailData
     */
    public function setAirRows($AirRows)
    {
      $this->AirRows = $AirRows;
      return $this;
    }

}
