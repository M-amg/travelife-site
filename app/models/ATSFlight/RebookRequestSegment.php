<?php

namespace App\models\ATSFlight;

class RebookRequestSegment
{

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var ArrayOfstring $OriginalSegmentNumbers
     */
    protected $OriginalSegmentNumbers = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\RebookRequestSegment
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getOriginalSegmentNumbers()
    {
      return $this->OriginalSegmentNumbers;
    }

    /**
     * @param ArrayOfstring $OriginalSegmentNumbers
     * @return \App\models\ATSFlight\RebookRequestSegment
     */
    public function setOriginalSegmentNumbers($OriginalSegmentNumbers)
    {
      $this->OriginalSegmentNumbers = $OriginalSegmentNumbers;
      return $this;
    }

}
