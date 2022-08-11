<?php

namespace App\models\ATSFlight;

class BookResponseSeatReservation
{

    /**
     * @var string $SeatColumn
     */
    protected $SeatColumn = null;

    /**
     * @var int $SeatRow
     */
    protected $SeatRow = null;

    /**
     * @var int $SegmentIndex
     */
    protected $SegmentIndex = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSeatColumn()
    {
      return $this->SeatColumn;
    }

    /**
     * @param string $SeatColumn
     * @return \App\models\ATSFlight\BookResponseSeatReservation
     */
    public function setSeatColumn($SeatColumn)
    {
      $this->SeatColumn = $SeatColumn;
      return $this;
    }

    /**
     * @return int
     */
    public function getSeatRow()
    {
      return $this->SeatRow;
    }

    /**
     * @param int $SeatRow
     * @return \App\models\ATSFlight\BookResponseSeatReservation
     */
    public function setSeatRow($SeatRow)
    {
      $this->SeatRow = $SeatRow;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentIndex()
    {
      return $this->SegmentIndex;
    }

    /**
     * @param int $SegmentIndex
     * @return \App\models\ATSFlight\BookResponseSeatReservation
     */
    public function setSegmentIndex($SegmentIndex)
    {
      $this->SegmentIndex = $SegmentIndex;
      return $this;
    }

}
