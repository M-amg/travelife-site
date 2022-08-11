<?php

namespace App\models\ATSFlight;

class BookResponseTicketData
{

    /**
     * @var string $Farebase
     */
    protected $Farebase = null;

    /**
     * @var string $FreeBaggageAllowance
     */
    protected $FreeBaggageAllowance = null;

    /**
     * @var ArrayOfint $SegmentNumbers
     */
    protected $SegmentNumbers = null;

    /**
     * @var boolean $TicketBySupplier
     */
    protected $TicketBySupplier = null;

    /**
     * @var string $TicketDesignator
     */
    protected $TicketDesignator = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFarebase()
    {
      return $this->Farebase;
    }

    /**
     * @param string $Farebase
     * @return \App\models\ATSFlight\BookResponseTicketData
     */
    public function setFarebase($Farebase)
    {
      $this->Farebase = $Farebase;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreeBaggageAllowance()
    {
      return $this->FreeBaggageAllowance;
    }

    /**
     * @param string $FreeBaggageAllowance
     * @return \App\models\ATSFlight\BookResponseTicketData
     */
    public function setFreeBaggageAllowance($FreeBaggageAllowance)
    {
      $this->FreeBaggageAllowance = $FreeBaggageAllowance;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegmentNumbers()
    {
      return $this->SegmentNumbers;
    }

    /**
     * @param ArrayOfint $SegmentNumbers
     * @return \App\models\ATSFlight\BookResponseTicketData
     */
    public function setSegmentNumbers($SegmentNumbers)
    {
      $this->SegmentNumbers = $SegmentNumbers;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTicketBySupplier()
    {
      return $this->TicketBySupplier;
    }

    /**
     * @param boolean $TicketBySupplier
     * @return \App\models\ATSFlight\BookResponseTicketData
     */
    public function setTicketBySupplier($TicketBySupplier)
    {
      $this->TicketBySupplier = $TicketBySupplier;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketDesignator()
    {
      return $this->TicketDesignator;
    }

    /**
     * @param string $TicketDesignator
     * @return \App\models\ATSFlight\BookResponseTicketData
     */
    public function setTicketDesignator($TicketDesignator)
    {
      $this->TicketDesignator = $TicketDesignator;
      return $this;
    }

}
