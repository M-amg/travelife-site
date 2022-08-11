<?php

namespace App\models\ATSFlight;

class BrowseResponseRecordLocatorItem
{

    /**
     * @var string $PassengerLastName
     */
    protected $PassengerLastName = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPassengerLastName()
    {
      return $this->PassengerLastName;
    }

    /**
     * @param string $PassengerLastName
     * @return \App\models\ATSFlight\BrowseResponseRecordLocatorItem
     */
    public function setPassengerLastName($PassengerLastName)
    {
      $this->PassengerLastName = $PassengerLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordLocator()
    {
      return $this->RecordLocator;
    }

    /**
     * @param string $RecordLocator
     * @return \App\models\ATSFlight\BrowseResponseRecordLocatorItem
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
      return $this;
    }

}
