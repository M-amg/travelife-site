<?php

namespace App\models\ATSFlight;

class SeatMapExceptionData
{

    /**
     * @var string $ExceptionCode
     */
    protected $ExceptionCode = null;

    /**
     * @var string $ExceptionText
     */
    protected $ExceptionText = null;

    /**
     * @var SeatMapSegmentData $FlightSegment
     */
    protected $FlightSegment = null;

    /**
     * @var string $SourceException
     */
    protected $SourceException = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getExceptionCode()
    {
      return $this->ExceptionCode;
    }

    /**
     * @param string $ExceptionCode
     * @return \App\models\ATSFlight\SeatMapExceptionData
     */
    public function setExceptionCode($ExceptionCode)
    {
      $this->ExceptionCode = $ExceptionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExceptionText()
    {
      return $this->ExceptionText;
    }

    /**
     * @param string $ExceptionText
     * @return \App\models\ATSFlight\SeatMapExceptionData
     */
    public function setExceptionText($ExceptionText)
    {
      $this->ExceptionText = $ExceptionText;
      return $this;
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
     * @return \App\models\ATSFlight\SeatMapExceptionData
     */
    public function setFlightSegment($FlightSegment)
    {
      $this->FlightSegment = $FlightSegment;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceException()
    {
      return $this->SourceException;
    }

    /**
     * @param string $SourceException
     * @return \App\models\ATSFlight\SeatMapExceptionData
     */
    public function setSourceException($SourceException)
    {
      $this->SourceException = $SourceException;
      return $this;
    }

}
