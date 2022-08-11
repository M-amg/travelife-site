<?php

namespace App\models\ATSFlight;

class DetailsRequestLeg
{

    /**
     * @var string $AvailString
     */
    protected $AvailString = null;

    /**
     * @var string $LegCarrier
     */
    protected $LegCarrier = null;

    /**
     * @var ArrayOfDetailsRequestSegment $Segments
     */
    protected $Segments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAvailString()
    {
      return $this->AvailString;
    }

    /**
     * @param string $AvailString
     * @return \App\models\ATSFlight\DetailsRequestLeg
     */
    public function setAvailString($AvailString)
    {
      $this->AvailString = $AvailString;
      return $this;
    }

    /**
     * @return string
     */
    public function getLegCarrier()
    {
      return $this->LegCarrier;
    }

    /**
     * @param string $LegCarrier
     * @return \App\models\ATSFlight\DetailsRequestLeg
     */
    public function setLegCarrier($LegCarrier)
    {
      $this->LegCarrier = $LegCarrier;
      return $this;
    }

    /**
     * @return ArrayOfDetailsRequestSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfDetailsRequestSegment $Segments
     * @return \App\models\ATSFlight\DetailsRequestLeg
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

}
