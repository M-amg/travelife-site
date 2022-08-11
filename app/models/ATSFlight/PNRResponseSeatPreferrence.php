<?php

namespace App\models\ATSFlight;

class PNRResponseSeatPreferrence
{

    /**
     * @var string $Characteristics
     */
    protected $Characteristics = null;

    /**
     * @var boolean $Chargeable
     */
    protected $Chargeable = null;

    /**
     * @var boolean $IsIssused
     */
    protected $IsIssused = null;

    /**
     * @var string $Preference
     */
    protected $Preference = null;

    /**
     * @var string $Row
     */
    protected $Row = null;

    /**
     * @var string $Seat
     */
    protected $Seat = null;

    /**
     * @var ArrayOfint $SegmentNumber
     */
    protected $SegmentNumber = null;

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
    public function getCharacteristics()
    {
      return $this->Characteristics;
    }

    /**
     * @param string $Characteristics
     * @return \App\models\ATSFlight\PNRResponseSeatPreferrence
     */
    public function setCharacteristics($Characteristics)
    {
      $this->Characteristics = $Characteristics;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getChargeable()
    {
      return $this->Chargeable;
    }

    /**
     * @param boolean $Chargeable
     * @return \App\models\ATSFlight\PNRResponseSeatPreferrence
     */
    public function setChargeable($Chargeable)
    {
      $this->Chargeable = $Chargeable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsIssused()
    {
      return $this->IsIssused;
    }

    /**
     * @param boolean $IsIssused
     * @return \App\models\ATSFlight\PNRResponseSeatPreferrence
     */
    public function setIsIssused($IsIssused)
    {
      $this->IsIssused = $IsIssused;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreference()
    {
      return $this->Preference;
    }

    /**
     * @param string $Preference
     * @return \App\models\ATSFlight\PNRResponseSeatPreferrence
     */
    public function setPreference($Preference)
    {
      $this->Preference = $Preference;
      return $this;
    }

    /**
     * @return string
     */
    public function getRow()
    {
      return $this->Row;
    }

    /**
     * @param string $Row
     * @return \App\models\ATSFlight\PNRResponseSeatPreferrence
     */
    public function setRow($Row)
    {
      $this->Row = $Row;
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
     * @return \App\models\ATSFlight\PNRResponseSeatPreferrence
     */
    public function setSeat($Seat)
    {
      $this->Seat = $Seat;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegmentNumber()
    {
      return $this->SegmentNumber;
    }

    /**
     * @param ArrayOfint $SegmentNumber
     * @return \App\models\ATSFlight\PNRResponseSeatPreferrence
     */
    public function setSegmentNumber($SegmentNumber)
    {
      $this->SegmentNumber = $SegmentNumber;
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
     * @return \App\models\ATSFlight\PNRResponseSeatPreferrence
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
