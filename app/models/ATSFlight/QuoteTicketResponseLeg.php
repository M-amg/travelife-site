<?php

namespace App\models\ATSFlight;

class QuoteTicketResponseLeg
{

    /**
     * @var string $Departure
     */
    protected $Departure = null;

    /**
     * @var string $Destination
     */
    protected $Destination = null;

    /**
     * @var DirectionEnum $Direction
     */
    protected $Direction = null;

    /**
     * @var ArrayOfQuoteTicketResponseSeg $Segments
     */
    protected $Segments = null;

    /**
     * @var string $TariffTitle
     */
    protected $TariffTitle = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDeparture()
    {
      return $this->Departure;
    }

    /**
     * @param string $Departure
     * @return \App\models\ATSFlight\QuoteTicketResponseLeg
     */
    public function setDeparture($Departure)
    {
      $this->Departure = $Departure;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
      return $this->Destination;
    }

    /**
     * @param string $Destination
     * @return \App\models\ATSFlight\QuoteTicketResponseLeg
     */
    public function setDestination($Destination)
    {
      $this->Destination = $Destination;
      return $this;
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
     * @return \App\models\ATSFlight\QuoteTicketResponseLeg
     */
    public function setDirection($Direction)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return ArrayOfQuoteTicketResponseSeg
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfQuoteTicketResponseSeg $Segments
     * @return \App\models\ATSFlight\QuoteTicketResponseLeg
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

    /**
     * @return string
     */
    public function getTariffTitle()
    {
      return $this->TariffTitle;
    }

    /**
     * @param string $TariffTitle
     * @return \App\models\ATSFlight\QuoteTicketResponseLeg
     */
    public function setTariffTitle($TariffTitle)
    {
      $this->TariffTitle = $TariffTitle;
      return $this;
    }

}
