<?php

namespace App\models\ATSFlight;

class FareRequestConnection
{

    /**
     * @var ArrayOfFareRequestSegment $Segments
     */
    protected $Segments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfFareRequestSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfFareRequestSegment $Segments
     * @return \App\models\ATSFlight\FareRequestConnection
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

}
