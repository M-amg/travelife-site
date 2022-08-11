<?php

namespace App\models\ATSFlight;

class DisplayRequestConnection
{

    /**
     * @var ArrayOfDisplayRequestSegment $Segments
     */
    protected $Segments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfDisplayRequestSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfDisplayRequestSegment $Segments
     * @return \App\models\ATSFlight\DisplayRequestConnection
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

}
