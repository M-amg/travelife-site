<?php

namespace App\models\ATSFlight;

class FareComplexRequestData
{

    /**
     * @var ArrayOfFareComplexConfiguration $Configurations
     */
    protected $Configurations = null;

    /**
     * @var ArrayOfFareComplexFare $Fares
     */
    protected $Fares = null;

    /**
     * @var MCTData $MCT
     */
    protected $MCT = null;

    /**
     * @var int $MaxTotalFares
     */
    protected $MaxTotalFares = null;

    /**
     * @var ArrayOfFareComplexPassengeGroup $PassengerGroups
     */
    protected $PassengerGroups = null;

    /**
     * @var int $StartFareNumber
     */
    protected $StartFareNumber = null;

    /**
     * @var ArrayOfFareComplexTicketGroup $TicketGroups
     */
    protected $TicketGroups = null;

    /**
     * @param int $MaxTotalFares
     */
    public function __construct($MaxTotalFares)
    {
      $this->MaxTotalFares = $MaxTotalFares;
    }

    /**
     * @return ArrayOfFareComplexConfiguration
     */
    public function getConfigurations()
    {
      return $this->Configurations;
    }

    /**
     * @param ArrayOfFareComplexConfiguration $Configurations
     * @return \App\models\ATSFlight\FareComplexRequestData
     */
    public function setConfigurations($Configurations)
    {
      $this->Configurations = $Configurations;
      return $this;
    }

    /**
     * @return ArrayOfFareComplexFare
     */
    public function getFares()
    {
      return $this->Fares;
    }

    /**
     * @param ArrayOfFareComplexFare $Fares
     * @return \App\models\ATSFlight\FareComplexRequestData
     */
    public function setFares($Fares)
    {
      $this->Fares = $Fares;
      return $this;
    }

    /**
     * @return MCTData
     */
    public function getMCT()
    {
      return $this->MCT;
    }

    /**
     * @param MCTData $MCT
     * @return \App\models\ATSFlight\FareComplexRequestData
     */
    public function setMCT($MCT)
    {
      $this->MCT = $MCT;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxTotalFares()
    {
      return $this->MaxTotalFares;
    }

    /**
     * @param int $MaxTotalFares
     * @return \App\models\ATSFlight\FareComplexRequestData
     */
    public function setMaxTotalFares($MaxTotalFares)
    {
      $this->MaxTotalFares = $MaxTotalFares;
      return $this;
    }

    /**
     * @return ArrayOfFareComplexPassengeGroup
     */
    public function getPassengerGroups()
    {
      return $this->PassengerGroups;
    }

    /**
     * @param ArrayOfFareComplexPassengeGroup $PassengerGroups
     * @return \App\models\ATSFlight\FareComplexRequestData
     */
    public function setPassengerGroups($PassengerGroups)
    {
      $this->PassengerGroups = $PassengerGroups;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartFareNumber()
    {
      return $this->StartFareNumber;
    }

    /**
     * @param int $StartFareNumber
     * @return \App\models\ATSFlight\FareComplexRequestData
     */
    public function setStartFareNumber($StartFareNumber)
    {
      $this->StartFareNumber = $StartFareNumber;
      return $this;
    }

    /**
     * @return ArrayOfFareComplexTicketGroup
     */
    public function getTicketGroups()
    {
      return $this->TicketGroups;
    }

    /**
     * @param ArrayOfFareComplexTicketGroup $TicketGroups
     * @return \App\models\ATSFlight\FareComplexRequestData
     */
    public function setTicketGroups($TicketGroups)
    {
      $this->TicketGroups = $TicketGroups;
      return $this;
    }

}
