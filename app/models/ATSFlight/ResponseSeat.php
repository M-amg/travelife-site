<?php

namespace App\models\ATSFlight;

class ResponseSeat
{

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var int $PassengerSelection
     */
    protected $PassengerSelection = null;

    /**
     * @var int $RowNumber
     */
    protected $RowNumber = null;

    /**
     * @var string $Seat
     */
    protected $Seat = null;

    /**
     * @var int $SegmentSelection
     */
    protected $SegmentSelection = null;

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
     * @return \App\models\ATSFlight\ResponseSeat
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return int
     */
    public function getPassengerSelection()
    {
      return $this->PassengerSelection;
    }

    /**
     * @param int $PassengerSelection
     * @return \App\models\ATSFlight\ResponseSeat
     */
    public function setPassengerSelection($PassengerSelection)
    {
      $this->PassengerSelection = $PassengerSelection;
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
     * @return \App\models\ATSFlight\ResponseSeat
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
     * @return \App\models\ATSFlight\ResponseSeat
     */
    public function setSeat($Seat)
    {
      $this->Seat = $Seat;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentSelection()
    {
      return $this->SegmentSelection;
    }

    /**
     * @param int $SegmentSelection
     * @return \App\models\ATSFlight\ResponseSeat
     */
    public function setSegmentSelection($SegmentSelection)
    {
      $this->SegmentSelection = $SegmentSelection;
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
     * @return \App\models\ATSFlight\ResponseSeat
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
