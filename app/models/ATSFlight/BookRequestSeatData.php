<?php

namespace App\models\ATSFlight;

class BookRequestSeatData
{

    /**
     * @var string $SeatNumber
     */
    protected $SeatNumber = null;

    /**
     * @var int $SeatRow
     */
    protected $SeatRow = null;

    /**
     * @var int $SegmentIndex
     */
    protected $SegmentIndex = null;

    /**
     * @param int $SeatRow
     * @param int $SegmentIndex
     */
    public function __construct($SeatRow, $SegmentIndex)
    {
      $this->SeatRow = $SeatRow;
      $this->SegmentIndex = $SegmentIndex;
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
     * @return \App\models\ATSFlight\BookRequestSeatData
     */
    public function setSeatNumber($SeatNumber)
    {
      $this->SeatNumber = $SeatNumber;
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
     * @return \App\models\ATSFlight\BookRequestSeatData
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
     * @return \App\models\ATSFlight\BookRequestSeatData
     */
    public function setSegmentIndex($SegmentIndex)
    {
      $this->SegmentIndex = $SegmentIndex;
      return $this;
    }

}
