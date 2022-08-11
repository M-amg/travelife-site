<?php

namespace App\models\ATSFlight;

class QuerySearchCriteriaData
{

    /**
     * @var ClassTypeEnum $CabinClass
     */
    protected $CabinClass = null;

    /**
     * @var ArrayOfstring $Carriers
     */
    protected $Carriers = null;

    /**
     * @var ArrayOfstring $Destinations
     */
    protected $Destinations = null;

    /**
     * @var boolean $Domestic
     */
    protected $Domestic = null;

    /**
     * @var FlightTypeEnum $FlightType
     */
    protected $FlightType = null;

    /**
     * @var ArrayOfstring $Origins
     */
    protected $Origins = null;

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\QuerySearchCriteriaData
     */
    public function setCabinClass($CabinClass)
    {
      $this->CabinClass = $CabinClass;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCarriers()
    {
      return $this->Carriers;
    }

    /**
     * @param ArrayOfstring $Carriers
     * @return \App\models\ATSFlight\QuerySearchCriteriaData
     */
    public function setCarriers($Carriers)
    {
      $this->Carriers = $Carriers;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getDestinations()
    {
      return $this->Destinations;
    }

    /**
     * @param ArrayOfstring $Destinations
     * @return \App\models\ATSFlight\QuerySearchCriteriaData
     */
    public function setDestinations($Destinations)
    {
      $this->Destinations = $Destinations;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDomestic()
    {
      return $this->Domestic;
    }

    /**
     * @param boolean $Domestic
     * @return \App\models\ATSFlight\QuerySearchCriteriaData
     */
    public function setDomestic($Domestic)
    {
      $this->Domestic = $Domestic;
      return $this;
    }

    /**
     * @return FlightTypeEnum
     */
    public function getFlightType()
    {
      return $this->FlightType;
    }

    /**
     * @param FlightTypeEnum $FlightType
     * @return \App\models\ATSFlight\QuerySearchCriteriaData
     */
    public function setFlightType($FlightType)
    {
      $this->FlightType = $FlightType;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getOrigins()
    {
      return $this->Origins;
    }

    /**
     * @param ArrayOfstring $Origins
     * @return \App\models\ATSFlight\QuerySearchCriteriaData
     */
    public function setOrigins($Origins)
    {
      $this->Origins = $Origins;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param PassengerTypeEnum $PassengerType
     * @return \App\models\ATSFlight\QuerySearchCriteriaData
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

}
