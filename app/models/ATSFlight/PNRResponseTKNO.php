<?php

namespace App\models\ATSFlight;

class PNRResponseTKNO
{

    /**
     * @var boolean $IsEMD
     */
    protected $IsEMD = null;

    /**
     * @var string $PlatingCarrier
     */
    protected $PlatingCarrier = null;

    /**
     * @var ArrayOfstring $SegmentNumbers
     */
    protected $SegmentNumbers = null;

    /**
     * @var TicketStatusEnum $TicketStatus
     */
    protected $TicketStatus = null;

    /**
     * @var string $Ticketnumber
     */
    protected $Ticketnumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getIsEMD()
    {
      return $this->IsEMD;
    }

    /**
     * @param boolean $IsEMD
     * @return \App\models\ATSFlight\PNRResponseTKNO
     */
    public function setIsEMD($IsEMD)
    {
      $this->IsEMD = $IsEMD;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlatingCarrier()
    {
      return $this->PlatingCarrier;
    }

    /**
     * @param string $PlatingCarrier
     * @return \App\models\ATSFlight\PNRResponseTKNO
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getSegmentNumbers()
    {
      return $this->SegmentNumbers;
    }

    /**
     * @param ArrayOfstring $SegmentNumbers
     * @return \App\models\ATSFlight\PNRResponseTKNO
     */
    public function setSegmentNumbers($SegmentNumbers)
    {
      $this->SegmentNumbers = $SegmentNumbers;
      return $this;
    }

    /**
     * @return TicketStatusEnum
     */
    public function getTicketStatus()
    {
      return $this->TicketStatus;
    }

    /**
     * @param TicketStatusEnum $TicketStatus
     * @return \App\models\ATSFlight\PNRResponseTKNO
     */
    public function setTicketStatus($TicketStatus)
    {
      $this->TicketStatus = $TicketStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketnumber()
    {
      return $this->Ticketnumber;
    }

    /**
     * @param string $Ticketnumber
     * @return \App\models\ATSFlight\PNRResponseTKNO
     */
    public function setTicketnumber($Ticketnumber)
    {
      $this->Ticketnumber = $Ticketnumber;
      return $this;
    }

}
