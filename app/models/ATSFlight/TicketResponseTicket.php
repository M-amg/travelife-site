<?php

namespace App\models\ATSFlight;

class TicketResponseTicket
{

    /**
     * @var string $Commission
     */
    protected $Commission = null;

    /**
     * @var string $Endorsement
     */
    protected $Endorsement = null;

    /**
     * @var string $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var string $IssuedBy
     */
    protected $IssuedBy = null;

    /**
     * @var ArrayOfTicketResponseLeg $Legs
     */
    protected $Legs = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param string $Commission
     * @return \App\models\ATSFlight\TicketResponseTicket
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndorsement()
    {
      return $this->Endorsement;
    }

    /**
     * @param string $Endorsement
     * @return \App\models\ATSFlight\TicketResponseTicket
     */
    public function setEndorsement($Endorsement)
    {
      $this->Endorsement = $Endorsement;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormOfPayment()
    {
      return $this->FormOfPayment;
    }

    /**
     * @param string $FormOfPayment
     * @return \App\models\ATSFlight\TicketResponseTicket
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssuedBy()
    {
      return $this->IssuedBy;
    }

    /**
     * @param string $IssuedBy
     * @return \App\models\ATSFlight\TicketResponseTicket
     */
    public function setIssuedBy($IssuedBy)
    {
      $this->IssuedBy = $IssuedBy;
      return $this;
    }

    /**
     * @return ArrayOfTicketResponseLeg
     */
    public function getLegs()
    {
      return $this->Legs;
    }

    /**
     * @param ArrayOfTicketResponseLeg $Legs
     * @return \App\models\ATSFlight\TicketResponseTicket
     */
    public function setLegs($Legs)
    {
      $this->Legs = $Legs;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \App\models\ATSFlight\TicketResponseTicket
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
      return $this;
    }

}
