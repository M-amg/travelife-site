<?php

namespace App\models\ATSFlight;

class FareComplexResponseFareItem extends FareResponseFlight
{

    /**
     * @var FareComplexResponseFareDetails $Fare
     */
    protected $Fare = null;

    /**
     * @var int $TicketGroupID
     */
    protected $TicketGroupID = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return FareComplexResponseFareDetails
     */
    public function getFare()
    {
      return $this->Fare;
    }

    /**
     * @param FareComplexResponseFareDetails $Fare
     * @return \App\models\ATSFlight\FareComplexResponseFareItem
     */
    public function setFare($Fare)
    {
      $this->Fare = $Fare;
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
     * @return \App\models\ATSFlight\FareComplexResponseFareItem
     */
    public function setTicketGroupID($TicketGroupID)
    {
      $this->TicketGroupID = $TicketGroupID;
      return $this;
    }

}
