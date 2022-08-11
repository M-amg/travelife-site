<?php

namespace App\models\ATSFlight;

class CalendarResponseData
{

    /**
     * @var ArrayOfCalendarResponseCell $Cells
     */
    protected $Cells = null;

    /**
     * @var int $NumberOfCells
     */
    protected $NumberOfCells = null;

    /**
     * @var int $NumberOfFares
     */
    protected $NumberOfFares = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCalendarResponseCell
     */
    public function getCells()
    {
      return $this->Cells;
    }

    /**
     * @param ArrayOfCalendarResponseCell $Cells
     * @return \App\models\ATSFlight\CalendarResponseData
     */
    public function setCells($Cells)
    {
      $this->Cells = $Cells;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfCells()
    {
      return $this->NumberOfCells;
    }

    /**
     * @param int $NumberOfCells
     * @return \App\models\ATSFlight\CalendarResponseData
     */
    public function setNumberOfCells($NumberOfCells)
    {
      $this->NumberOfCells = $NumberOfCells;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfFares()
    {
      return $this->NumberOfFares;
    }

    /**
     * @param int $NumberOfFares
     * @return \App\models\ATSFlight\CalendarResponseData
     */
    public function setNumberOfFares($NumberOfFares)
    {
      $this->NumberOfFares = $NumberOfFares;
      return $this;
    }

    /**
     * @return ResponseInfoDetails
     */
    public function getResponseInfo()
    {
      return $this->ResponseInfo;
    }

    /**
     * @param ResponseInfoDetails $ResponseInfo
     * @return \App\models\ATSFlight\CalendarResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

}
