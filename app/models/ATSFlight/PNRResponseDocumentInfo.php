<?php

namespace App\models\ATSFlight;

class PNRResponseDocumentInfo
{

    /**
     * @var string $Arrival
     */
    protected $Arrival = null;

    /**
     * @var string $Baggage
     */
    protected $Baggage = null;

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var string $Company
     */
    protected $Company = null;

    /**
     * @var string $CouponNumber
     */
    protected $CouponNumber = null;

    /**
     * @var string $CouponStatus
     */
    protected $CouponStatus = null;

    /**
     * @var string $Departure
     */
    protected $Departure = null;

    /**
     * @var string $DocumentDetails
     */
    protected $DocumentDetails = null;

    /**
     * @var string $FareBase
     */
    protected $FareBase = null;

    /**
     * @var \DateTime $FlightDate
     */
    protected $FlightDate = null;

    /**
     * @var string $FlightInfo
     */
    protected $FlightInfo = null;

    /**
     * @var string $NVA
     */
    protected $NVA = null;

    /**
     * @var string $NVB
     */
    protected $NVB = null;

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
    public function getArrival()
    {
      return $this->Arrival;
    }

    /**
     * @param string $Arrival
     * @return \App\models\ATSFlight\PNRResponseDocumentInfo
     */
    public function setArrival($Arrival)
    {
      $this->Arrival = $Arrival;
      return $this;
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
     * @return \App\models\ATSFlight\PNRResponseDocumentInfo
     */
    public function setBaggage($Baggage)
    {
      $this->Baggage = $Baggage;
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
     * @return \App\models\ATSFlight\PNRResponseDocumentInfo
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
      return $this->Company;
    }

    /**
     * @param string $Company
     * @return \App\models\ATSFlight\PNRResponseDocumentInfo
     */
    public function setCompany($Company)
    {
      $this->Company = $Company;
      return $this;
    }

    /**
     * @return string
     */
    public function getCouponNumber()
    {
      return $this->CouponNumber;
    }

    /**
     * @param string $CouponNumber
     * @return \App\models\ATSFlight\PNRResponseDocumentInfo
     */
    public function setCouponNumber($CouponNumber)
    {
      $this->CouponNumber = $CouponNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getCouponStatus()
    {
      return $this->CouponStatus;
    }

    /**
     * @param string $CouponStatus
     * @return \App\models\ATSFlight\PNRResponseDocumentInfo
     */
    public function setCouponStatus($CouponStatus)
    {
      $this->CouponStatus = $CouponStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeparture()
    {
      return $this->Departure;
    }

    /**
     * @param string $Departure
     * @return \App\models\ATSFlight\PNRResponseDocumentInfo
     */
    public function setDeparture($Departure)
    {
      $this->Departure = $Departure;
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentDetails()
    {
      return $this->DocumentDetails;
    }

    /**
     * @param string $DocumentDetails
     * @return \App\models\ATSFlight\PNRResponseDocumentInfo
     */
    public function setDocumentDetails($DocumentDetails)
    {
      $this->DocumentDetails = $DocumentDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareBase()
    {
      return $this->FareBase;
    }

    /**
     * @param string $FareBase
     * @return \App\models\ATSFlight\PNRResponseDocumentInfo
     */
    public function setFareBase($FareBase)
    {
      $this->FareBase = $FareBase;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFlightDate()
    {
      if ($this->FlightDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FlightDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FlightDate
     * @return \App\models\ATSFlight\PNRResponseDocumentInfo
     */
    public function setFlightDate(\DateTime $FlightDate = null)
    {
      if ($FlightDate == null) {
       $this->FlightDate = null;
      } else {
        $this->FlightDate = $FlightDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getFlightInfo()
    {
      return $this->FlightInfo;
    }

    /**
     * @param string $FlightInfo
     * @return \App\models\ATSFlight\PNRResponseDocumentInfo
     */
    public function setFlightInfo($FlightInfo)
    {
      $this->FlightInfo = $FlightInfo;
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
     * @return \App\models\ATSFlight\PNRResponseDocumentInfo
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
     * @return \App\models\ATSFlight\PNRResponseDocumentInfo
     */
    public function setNVB($NVB)
    {
      $this->NVB = $NVB;
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
     * @return \App\models\ATSFlight\PNRResponseDocumentInfo
     */
    public function setStopIndicator($StopIndicator)
    {
      $this->StopIndicator = $StopIndicator;
      return $this;
    }

}
