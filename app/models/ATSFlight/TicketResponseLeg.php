<?php

namespace App\models\ATSFlight;

class TicketResponseLeg
{

    /**
     * @var DirectionEnum $Direction
     */
    protected $Direction = null;

    /**
     * @var string $NVA
     */
    protected $NVA = null;

    /**
     * @var string $NVALast
     */
    protected $NVALast = null;

    /**
     * @var string $NVB
     */
    protected $NVB = null;

    /**
     * @var string $NVBFirst
     */
    protected $NVBFirst = null;

    /**
     * @var ArrayOfTicketResponsePassenger $Passengers
     */
    protected $Passengers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DirectionEnum
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param DirectionEnum $Direction
     * @return \App\models\ATSFlight\TicketResponseLeg
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return string
     */
    public function getNVA()
    {
      return $this->NVA;
    }

    /**
     * @param string $NVA
     * @return \App\models\ATSFlight\TicketResponseLeg
     */
    public function setNVA($NVA)
    {
      $this->NVA = $NVA;
      return $this;
    }

    /**
     * @return string
     */
    public function getNVALast()
    {
      return $this->NVALast;
    }

    /**
     * @param string $NVALast
     * @return \App\models\ATSFlight\TicketResponseLeg
     */
    public function setNVALast($NVALast)
    {
      $this->NVALast = $NVALast;
      return $this;
    }

    /**
     * @return string
     */
    public function getNVB()
    {
      return $this->NVB;
    }

    /**
     * @param string $NVB
     * @return \App\models\ATSFlight\TicketResponseLeg
     */
    public function setNVB($NVB)
    {
      $this->NVB = $NVB;
      return $this;
    }

    /**
     * @return string
     */
    public function getNVBFirst()
    {
      return $this->NVBFirst;
    }

    /**
     * @param string $NVBFirst
     * @return \App\models\ATSFlight\TicketResponseLeg
     */
    public function setNVBFirst($NVBFirst)
    {
      $this->NVBFirst = $NVBFirst;
      return $this;
    }

    /**
     * @return ArrayOfTicketResponsePassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfTicketResponsePassenger $Passengers
     * @return \App\models\ATSFlight\TicketResponseLeg
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

}
