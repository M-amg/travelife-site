<?php

namespace App\models\ATSFlight;

class LegConnectionData
{

    /**
     * @var string $AvailString
     */
    protected $AvailString = null;

    /**
     * @var ClassTypeEnum $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var ArrayOfstring $FareGroups
     */
    protected $FareGroups = null;

    /**
     * @var boolean $IsCached
     */
    protected $IsCached = null;

    /**
     * @var duration $LegTravelTime
     */
    protected $LegTravelTime = null;

    /**
     * @var ArrayOfFareSegmentData $Segments
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
     * @return \App\models\ATSFlight\LegConnectionData
     */
    public function setAvailString($AvailString)
    {
      $this->AvailString = $AvailString;
      return $this;
    }

    /**
     * @return ClassTypeEnum
     */
    public function getCabinClass()
    {
      return $this->CabinClass;
    }

    /**
     * @param ClassTypeEnum $CabinClass
     * @return \App\models\ATSFlight\LegConnectionData
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return \App\models\ATSFlight\LegConnectionData
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getFareGroups()
    {
      return $this->FareGroups;
    }

    /**
     * @param ArrayOfstring $FareGroups
     * @return \App\models\ATSFlight\LegConnectionData
     */
    public function setFareGroups($FareGroups)
    {
      $this->FareGroups = $FareGroups;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsCached()
    {
      return $this->IsCached;
    }

    /**
     * @param boolean $IsCached
     * @return \App\models\ATSFlight\LegConnectionData
     */
    public function setIsCached($IsCached)
    {
      $this->IsCached = $IsCached;
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
     * @return \App\models\ATSFlight\LegConnectionData
     */
    public function setLegTravelTime($LegTravelTime)
    {
      $this->LegTravelTime = $LegTravelTime;
      return $this;
    }

    /**
     * @return ArrayOfFareSegmentData
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfFareSegmentData $Segments
     * @return \App\models\ATSFlight\LegConnectionData
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

}
