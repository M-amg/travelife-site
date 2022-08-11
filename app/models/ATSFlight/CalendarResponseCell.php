<?php

namespace App\models\ATSFlight;

class CalendarResponseCell
{

    /**
     * @var int $CellIDIn
     */
    protected $CellIDIn = null;

    /**
     * @var int $CellIDOut
     */
    protected $CellIDOut = null;

    /**
     * @var ArrayOfResponseFareData $Fares
     */
    protected $Fares = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCellIDIn()
    {
      return $this->CellIDIn;
    }

    /**
     * @param int $CellIDIn
     * @return \App\models\ATSFlight\CalendarResponseCell
     */
    public function setCellIDIn($CellIDIn)
    {
      $this->CellIDIn = $CellIDIn;
      return $this;
    }

    /**
     * @return int
     */
    public function getCellIDOut()
    {
      return $this->CellIDOut;
    }

    /**
     * @param int $CellIDOut
     * @return \App\models\ATSFlight\CalendarResponseCell
     */
    public function setCellIDOut($CellIDOut)
    {
      $this->CellIDOut = $CellIDOut;
      return $this;
    }

    /**
     * @return ArrayOfResponseFareData
     */
    public function getFares()
    {
      return $this->Fares;
    }

    /**
     * @param ArrayOfResponseFareData $Fares
     * @return \App\models\ATSFlight\CalendarResponseCell
     */
    public function setFares($Fares)
    {
      $this->Fares = $Fares;
      return $this;
    }

}
