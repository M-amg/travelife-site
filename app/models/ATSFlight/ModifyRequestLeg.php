<?php

namespace App\models\ATSFlight;

class ModifyRequestLeg
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
     * @var ArrayOfModifyRequestSegment $Segments
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
     * @return \App\models\ATSFlight\ModifyRequestLeg
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
     * @return \App\models\ATSFlight\ModifyRequestLeg
     */
    public function setLegCarrier($LegCarrier)
    {
      $this->LegCarrier = $LegCarrier;
      return $this;
    }

    /**
     * @return ArrayOfModifyRequestSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfModifyRequestSegment $Segments
     * @return \App\models\ATSFlight\ModifyRequestLeg
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

}
