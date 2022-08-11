<?php

namespace App\models\ATSFlight;

class FareComplexTicketGroup
{

    /**
     * @var ArrayOfFareRequestCarrier $Carriers
     */
    protected $Carriers = null;

    /**
     * @var int $ConfigurationRef
     */
    protected $ConfigurationRef = null;

    /**
     * @var int $FareRef
     */
    protected $FareRef = null;

    /**
     * @var ArrayOfFareComplexLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var int $PassengerGroupRef
     */
    protected $PassengerGroupRef = null;

    /**
     * @var FareRequestPricing $Pricing
     */
    protected $Pricing = null;

    /**
     * @var int $TicketGroupID
     */
    protected $TicketGroupID = null;

    /**
     * @param int $ConfigurationRef
     * @param int $FareRef
     * @param int $PassengerGroupRef
     * @param int $TicketGroupID
     */
    public function __construct($ConfigurationRef, $FareRef, $PassengerGroupRef, $TicketGroupID)
    {
      $this->ConfigurationRef = $ConfigurationRef;
      $this->FareRef = $FareRef;
      $this->PassengerGroupRef = $PassengerGroupRef;
      $this->TicketGroupID = $TicketGroupID;
    }

    /**
     * @return ArrayOfFareRequestCarrier
     */
    public function getCarriers()
    {
      return $this->Carriers;
    }

    /**
     * @param ArrayOfFareRequestCarrier $Carriers
     * @return \App\models\ATSFlight\FareComplexTicketGroup
     */
    public function setCarriers($Carriers)
    {
      $this->Carriers = $Carriers;
      return $this;
    }

    /**
     * @return int
     */
    public function getConfigurationRef()
    {
      return $this->ConfigurationRef;
    }

    /**
     * @param int $ConfigurationRef
     * @return \App\models\ATSFlight\FareComplexTicketGroup
     */
    public function setConfigurationRef($ConfigurationRef)
    {
      $this->ConfigurationRef = $ConfigurationRef;
      return $this;
    }

    /**
     * @return int
     */
    public function getFareRef()
    {
      return $this->FareRef;
    }

    /**
     * @param int $FareRef
     * @return \App\models\ATSFlight\FareComplexTicketGroup
     */
    public function setFareRef($FareRef)
    {
      $this->FareRef = $FareRef;
      return $this;
    }

    /**
     * @return ArrayOfFareComplexLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfFareComplexLeg $Legs
     * @return \App\models\ATSFlight\FareComplexTicketGroup
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return int
     */
    public function getPassengerGroupRef()
    {
      return $this->PassengerGroupRef;
    }

    /**
     * @param int $PassengerGroupRef
     * @return \App\models\ATSFlight\FareComplexTicketGroup
     */
    public function setPassengerGroupRef($PassengerGroupRef)
    {
      $this->PassengerGroupRef = $PassengerGroupRef;
      return $this;
    }

    /**
     * @return FareRequestPricing
     */
    public function getPricing()
    {
      return $this->Pricing;
    }

    /**
     * @param FareRequestPricing $Pricing
     * @return \App\models\ATSFlight\FareComplexTicketGroup
     */
    public function setPricing($Pricing)
    {
      $this->Pricing = $Pricing;
      return $this;
    }

    /**
     * @return int
     */
    public function getTicketGroupID()
    {
      return $this->TicketGroupID;
    }

    /**
     * @param int $TicketGroupID
     * @return \App\models\ATSFlight\FareComplexTicketGroup
     */
    public function setTicketGroupID($TicketGroupID)
    {
      $this->TicketGroupID = $TicketGroupID;
      return $this;
    }

}
