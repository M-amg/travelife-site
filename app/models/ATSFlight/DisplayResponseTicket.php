<?php

namespace App\models\ATSFlight;

class DisplayResponseTicket
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
     * @var ArrayOfDisplayResponsePassengerTicket $PassengerTicket
     */
    protected $PassengerTicket = null;

    /**
     * @var string $ReferenceCode
     */
    protected $ReferenceCode = null;

    /**
     * @var string $TicketOnDeparture
     */
    protected $TicketOnDeparture = null;

    
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
     * @return \App\models\ATSFlight\DisplayResponseTicket
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
     * @return \App\models\ATSFlight\DisplayResponseTicket
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
     * @return \App\models\ATSFlight\DisplayResponseTicket
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
     * @return \App\models\ATSFlight\DisplayResponseTicket
     */
    public function setIssuedBy($IssuedBy)
    {
      $this->IssuedBy = $IssuedBy;
      return $this;
    }

    /**
     * @return ArrayOfDisplayResponsePassengerTicket
     */
    public function getPassengerTicket()
    {
      return $this->PassengerTicket;
    }

    /**
     * @param ArrayOfDisplayResponsePassengerTicket $PassengerTicket
     * @return \App\models\ATSFlight\DisplayResponseTicket
     */
    public function setPassengerTicket($PassengerTicket)
    {
      $this->PassengerTicket = $PassengerTicket;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceCode()
    {
      return $this->ReferenceCode;
    }

    /**
     * @param string $ReferenceCode
     * @return \App\models\ATSFlight\DisplayResponseTicket
     */
    public function setReferenceCode($ReferenceCode)
    {
      $this->ReferenceCode = $ReferenceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketOnDeparture()
    {
      return $this->TicketOnDeparture;
    }

    /**
     * @param string $TicketOnDeparture
     * @return \App\models\ATSFlight\DisplayResponseTicket
     */
    public function setTicketOnDeparture($TicketOnDeparture)
    {
      $this->TicketOnDeparture = $TicketOnDeparture;
      return $this;
    }

}
