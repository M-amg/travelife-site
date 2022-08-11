<?php

namespace App\models\ATSFlight;

class RuleTextRequestLeg
{

    /**
     * @var ArrayOfRuleTextRequestSegment $Segments
     */
    protected $Segments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRuleTextRequestSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfRuleTextRequestSegment $Segments
     * @return \App\models\ATSFlight\RuleTextRequestLeg
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

}
