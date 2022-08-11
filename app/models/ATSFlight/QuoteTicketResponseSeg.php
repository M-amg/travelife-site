<?php

namespace App\models\ATSFlight;

class QuoteTicketResponseSeg
{

    /**
     * @var string $Baggage
     */
    protected $Baggage = null;

    /**
     * @var string $BaggageDescription
     */
    protected $BaggageDescription = null;

    /**
     * @var FreeBaggageAllowanceDetails $BaggageDetails
     */
    protected $BaggageDetails = null;

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var \DateTime $DepartureDateTime
     */
    protected $DepartureDateTime = null;

    /**
     * @var string $Designator
     */
    protected $Designator = null;

    /**
     * @var string $Farebasis
     */
    protected $Farebasis = null;

    /**
     * @var string $FlightNo
     */
    protected $FlightNo = null;

    /**
     * @var string $NVA
     */
    protected $NVA = null;

    /**
     * @var string $NVB
     */
    protected $NVB = null;

    /**
     * @var int $SegmentID
     */
    protected $SegmentID = null;

    /**
     * @var string $StopIndicator
     */
    protected $StopIndicator = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBaggage()
    {
      return $this->Baggage;
    }

    /**
     * @param string $Baggage
     * @return \App\models\ATSFlight\QuoteTicketResponseSeg
     */
    public function setBaggage($Baggage)
    {
      $this->Baggage = $Baggage;
      return $this;
    }

    /**
     * @return string
     */
    public function getBaggageDescription()
    {
      return $this->BaggageDescription;
    }

    /**
     * @param string $BaggageDescription
     * @return \App\models\ATSFlight\QuoteTicketResponseSeg
     */
    public function setBaggageDescription($BaggageDescription)
    {
      $this->BaggageDescription = $BaggageDescription;
      return $this;
    }

    /**
     * @return FreeBaggageAllowanceDetails
     */
    public function getBaggageDetails()
    {
      return $this->BaggageDetails;
    }

    /**
     * @param FreeBaggageAllowanceDetails $BaggageDetails
     * @return \App\models\ATSFlight\QuoteTicketResponseSeg
     */
    public function setBaggageDetails($BaggageDetails)
    {
      $this->BaggageDetails = $BaggageDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingClass()
    {
      return $this->BookingClass;
    }

    /**
     * @param string $BookingClass
     * @return \App\models\ATSFlight\QuoteTicketResponseSeg
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return \App\models\ATSFlight\QuoteTicketResponseSeg
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDateTime()
    {
      if ($this->DepartureDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DepartureDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DepartureDateTime
     * @return \App\models\ATSFlight\QuoteTicketResponseSeg
     */
    public function setDepartureDateTime(\DateTime $DepartureDateTime = null)
    {
      if ($DepartureDateTime == null) {
       $this->DepartureDateTime = null;
      } else {
        $this->DepartureDateTime = $DepartureDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDesignator()
    {
      return $this->Designator;
    }

    /**
     * @param string $Designator
     * @return \App\models\ATSFlight\QuoteTicketResponseSeg
     */
    public function setDesignator($Designator)
    {
      $this->Designator = $Designator;
      return $this;
    }

    /**
     * @return string
     */
    public function getFarebasis()
    {
      return $this->Farebasis;
    }

    /**
     * @param string $Farebasis
     * @return \App\models\ATSFlight\QuoteTicketResponseSeg
     */
    public function setFarebasis($Farebasis)
    {
      $this->Farebasis = $Farebasis;
      return $this;
    }

    /**
     * @return string
     */
    public function getFlightNo()
    {
      return $this->FlightNo;
    }

    /**
     * @param string $FlightNo
     * @return \App\models\ATSFlight\QuoteTicketResponseSeg
     */
    public function setFlightNo($FlightNo)
    {
      $this->FlightNo = $FlightNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getNVA()
    {
      return $this->NVA;
    }

    /**
     * @param string $NVA
     * @return \App\models\ATSFlight\QuoteTicketResponseSeg
     */
    public function setNVA($NVA)
    {
      $this->NVA = $NVA;
      return $this;
    }

    /**
     * @return string
     */
    public function getNVB()
    {
      return $this->NVB;
    }

    /**
     * @param string $NVB
     * @return \App\models\ATSFlight\QuoteTicketResponseSeg
     */
    public function setNVB($NVB)
    {
      $this->NVB = $NVB;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentID()
    {
      return $this->SegmentID;
    }

    /**
     * @param int $SegmentID
     * @return \App\models\ATSFlight\QuoteTicketResponseSeg
     */
    public function setSegmentID($SegmentID)
    {
      $this->SegmentID = $SegmentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getStopIndicator()
    {
      return $this->StopIndicator;
    }

    /**
     * @param string $StopIndicator
     * @return \App\models\ATSFlight\QuoteTicketResponseSeg
     */
    public function setStopIndicator($StopIndicator)
    {
      $this->StopIndicator = $StopIndicator;
      return $this;
    }

}
