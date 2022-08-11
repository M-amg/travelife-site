<?php

namespace App\models\ATSFlight;

class AvailabilityResponseAlternativeType
{

    /**
     * @var string $AvailabilityString
     */
    protected $AvailabilityString = null;

    /**
     * @var duration $LegTravelTime
     */
    protected $LegTravelTime = null;

    /**
     * @var ClassTypeEnum $MajorCabinClass
     */
    protected $MajorCabinClass = null;

    /**
     * @var string $MajorCarrier
     */
    protected $MajorCarrier = null;

    /**
     * @var ArrayOfAvailabilityResponseSegmentType $SegmentType
     */
    protected $SegmentType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAvailabilityString()
    {
      return $this->AvailabilityString;
    }

    /**
     * @param string $AvailabilityString
     * @return \App\models\ATSFlight\AvailabilityResponseAlternativeType
     */
    public function setAvailabilityString($AvailabilityString)
    {
      $this->AvailabilityString = $AvailabilityString;
      return $this;
    }

    /**
     * @return duration
     */
    public function getLegTravelTime()
    {
      return $this->LegTravelTime;
    }

    /**
     * @param duration $LegTravelTime
     * @return \App\models\ATSFlight\AvailabilityResponseAlternativeType
     */
    public function setLegTravelTime($LegTravelTime)
    {
      $this->LegTravelTime = $LegTravelTime;
      return $this;
    }

    /**
     * @return ClassTypeEnum
     */
    public function getMajorCabinClass()
    {
      return $this->MajorCabinClass;
    }

    /**
     * @param ClassTypeEnum $MajorCabinClass
     * @return \App\models\ATSFlight\AvailabilityResponseAlternativeType
     */
    public function setMajorCabinClass($MajorCabinClass)
    {
      $this->MajorCabinClass = $MajorCabinClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getMajorCarrier()
    {
      return $this->MajorCarrier;
    }

    /**
     * @param string $MajorCarrier
     * @return \App\models\ATSFlight\AvailabilityResponseAlternativeType
     */
    public function setMajorCarrier($MajorCarrier)
    {
      $this->MajorCarrier = $MajorCarrier;
      return $this;
    }

    /**
     * @return ArrayOfAvailabilityResponseSegmentType
     */
    public function getSegmentType()
    {
      return $this->SegmentType;
    }

    /**
     * @param ArrayOfAvailabilityResponseSegmentType $SegmentType
     * @return \App\models\ATSFlight\AvailabilityResponseAlternativeType
     */
    public function setSegmentType($SegmentType)
    {
      $this->SegmentType = $SegmentType;
      return $this;
    }

}
