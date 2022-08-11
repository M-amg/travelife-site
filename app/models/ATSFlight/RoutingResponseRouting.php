<?php

namespace App\models\ATSFlight;

class RoutingResponseRouting
{

    /**
     * @var ArrayOfRoutingResponseSegment $Segments
     */
    protected $Segments = null;

    /**
     * @var ArrayOfRoutingResponseStop $StopOverSequences
     */
    protected $StopOverSequences = null;

    /**
     * @var ArrayOfRoutingResponseVia $ViaSequences
     */
    protected $ViaSequences = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRoutingResponseSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfRoutingResponseSegment $Segments
     * @return \App\models\ATSFlight\RoutingResponseRouting
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

    /**
     * @return ArrayOfRoutingResponseStop
     */
    public function getStopOverSequences()
    {
      return $this->StopOverSequences;
    }

    /**
     * @param ArrayOfRoutingResponseStop $StopOverSequences
     * @return \App\models\ATSFlight\RoutingResponseRouting
     */
    public function setStopOverSequences($StopOverSequences)
    {
      $this->StopOverSequences = $StopOverSequences;
      return $this;
    }

    /**
     * @return ArrayOfRoutingResponseVia
     */
    public function getViaSequences()
    {
      return $this->ViaSequences;
    }

    /**
     * @param ArrayOfRoutingResponseVia $ViaSequences
     * @return \App\models\ATSFlight\RoutingResponseRouting
     */
    public function setViaSequences($ViaSequences)
    {
      $this->ViaSequences = $ViaSequences;
      return $this;
    }

}
