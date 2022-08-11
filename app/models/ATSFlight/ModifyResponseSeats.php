<?php

namespace App\models\ATSFlight;

class ModifyResponseSeats
{

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var int $RowNumber
     */
    protected $RowNumber = null;

    /**
     * @var string $Seat
     */
    protected $Seat = null;

    /**
     * @var int $SegmentNumber
     */
    protected $SegmentNumber = null;

    /**
     * @var int $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getErrorText()
    {
      return $this->ErrorText;
    }

    /**
     * @param string $ErrorText
     * @return \App\models\ATSFlight\ModifyResponseSeats
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return int
     */
    public function getRowNumber()
    {
      return $this->RowNumber;
    }

    /**
     * @param int $RowNumber
     * @return \App\models\ATSFlight\ModifyResponseSeats
     */
    public function setRowNumber($RowNumber)
    {
      $this->RowNumber = $RowNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getSeat()
    {
      return $this->Seat;
    }

    /**
     * @param string $Seat
     * @return \App\models\ATSFlight\ModifyResponseSeats
     */
    public function setSeat($Seat)
    {
      $this->Seat = $Seat;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentNumber()
    {
      return $this->SegmentNumber;
    }

    /**
     * @param int $SegmentNumber
     * @return \App\models\ATSFlight\ModifyResponseSeats
     */
    public function setSegmentNumber($SegmentNumber)
    {
      $this->SegmentNumber = $SegmentNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param int $Status
     * @return \App\models\ATSFlight\ModifyResponseSeats
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
