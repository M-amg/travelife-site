<?php

namespace App\models\ATSFlight;

class SeatMapData
{

    /**
     * @var SeatMapSegmentData $FlightSegment
     */
    protected $FlightSegment = null;

    /**
     * @var ArrayOfSeatMapDetailData $SeatMapDetails
     */
    protected $SeatMapDetails = null;

    /**
     * @var ArrayOfSeatMapSurchargeDetail $SeatMapSurcharges
     */
    protected $SeatMapSurcharges = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SeatMapSegmentData
     */
    public function getFlightSegment()
    {
      return $this->FlightSegment;
    }

    /**
     * @param SeatMapSegmentData $FlightSegment
     * @return \App\models\ATSFlight\SeatMapData
     */
    public function setFlightSegment($FlightSegment)
    {
      $this->FlightSegment = $FlightSegment;
      return $this;
    }

    /**
     * @return ArrayOfSeatMapDetailData
     */
    public function getSeatMapDetails()
    {
      return $this->SeatMapDetails;
    }

    /**
     * @param ArrayOfSeatMapDetailData $SeatMapDetails
     * @return \App\models\ATSFlight\SeatMapData
     */
    public function setSeatMapDetails($SeatMapDetails)
    {
      $this->SeatMapDetails = $SeatMapDetails;
      return $this;
    }

    /**
     * @return ArrayOfSeatMapSurchargeDetail
     */
    public function getSeatMapSurcharges()
    {
      return $this->SeatMapSurcharges;
    }

    /**
     * @param ArrayOfSeatMapSurchargeDetail $SeatMapSurcharges
     * @return \App\models\ATSFlight\SeatMapData
     */
    public function setSeatMapSurcharges($SeatMapSurcharges)
    {
      $this->SeatMapSurcharges = $SeatMapSurcharges;
      return $this;
    }

}
