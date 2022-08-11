<?php

namespace App\models\ATSFlight;

class MultiChannelQueryRequestData
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
     * @var FlightTypeEnum $FlightType
     */
    protected $FlightType = null;

    /**
     * @var string $MultiChannelBranch
     */
    protected $MultiChannelBranch = null;

    /**
     * @var string $MultiChannelBranchGroup
     */
    protected $MultiChannelBranchGroup = null;

    /**
     * @var ArrayOfstring $Origins
     */
    protected $Origins = null;

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @param PassengerTypeEnum $PassengerType
     */
    public function __construct($PassengerType)
    {
      $this->PassengerType = $PassengerType;
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
     * @return \App\models\ATSFlight\MultiChannelQueryRequestData
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
     * @return \App\models\ATSFlight\MultiChannelQueryRequestData
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
     * @return \App\models\ATSFlight\MultiChannelQueryRequestData
     */
    public function setDestinations($Destinations)
    {
      $this->Destinations = $Destinations;
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
     * @return \App\models\ATSFlight\MultiChannelQueryRequestData
     */
    public function setFlightType($FlightType)
    {
      $this->FlightType = $FlightType;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultiChannelBranch()
    {
      return $this->MultiChannelBranch;
    }

    /**
     * @param string $MultiChannelBranch
     * @return \App\models\ATSFlight\MultiChannelQueryRequestData
     */
    public function setMultiChannelBranch($MultiChannelBranch)
    {
      $this->MultiChannelBranch = $MultiChannelBranch;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultiChannelBranchGroup()
    {
      return $this->MultiChannelBranchGroup;
    }

    /**
     * @param string $MultiChannelBranchGroup
     * @return \App\models\ATSFlight\MultiChannelQueryRequestData
     */
    public function setMultiChannelBranchGroup($MultiChannelBranchGroup)
    {
      $this->MultiChannelBranchGroup = $MultiChannelBranchGroup;
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
     * @return \App\models\ATSFlight\MultiChannelQueryRequestData
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
     * @return \App\models\ATSFlight\MultiChannelQueryRequestData
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

}
