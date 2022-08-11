<?php

namespace App\models\ATSFlight;

class RuleTextResponseRule
{

    /**
     * @var ArrayOfRuleTextResponsePassengerType $Passengers
     */
    protected $Passengers = null;

    /**
     * @var ArrayOfint $SegmentNumbers
     */
    protected $SegmentNumbers = null;

    /**
     * @var ArrayOfRuleTextResponseTitle $Titles
     */
    protected $Titles = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfRuleTextResponsePassengerType
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfRuleTextResponsePassengerType $Passengers
     * @return \App\models\ATSFlight\RuleTextResponseRule
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegmentNumbers()
    {
      return $this->SegmentNumbers;
    }

    /**
     * @param ArrayOfint $SegmentNumbers
     * @return \App\models\ATSFlight\RuleTextResponseRule
     */
    public function setSegmentNumbers($SegmentNumbers)
    {
      $this->SegmentNumbers = $SegmentNumbers;
      return $this;
    }

    /**
     * @return ArrayOfRuleTextResponseTitle
     */
    public function getTitles()
    {
      return $this->Titles;
    }

    /**
     * @param ArrayOfRuleTextResponseTitle $Titles
     * @return \App\models\ATSFlight\RuleTextResponseRule
     */
    public function setTitles($Titles)
    {
      $this->Titles = $Titles;
      return $this;
    }

}
