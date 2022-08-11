<?php

namespace App\models\ATSFlight;

class CommonResponseLeg
{

    /**
     * @var boolean $SeatPreferences
     */
    protected $SeatPreferences = null;

    /**
     * @var ArrayOfCommonSegmentData $Segments
     */
    protected $Segments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getSeatPreferences()
    {
      return $this->SeatPreferences;
    }

    /**
     * @param boolean $SeatPreferences
     * @return \App\models\ATSFlight\CommonResponseLeg
     */
    public function setSeatPreferences($SeatPreferences)
    {
      $this->SeatPreferences = $SeatPreferences;
      return $this;
    }

    /**
     * @return ArrayOfCommonSegmentData
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfCommonSegmentData $Segments
     * @return \App\models\ATSFlight\CommonResponseLeg
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

}
