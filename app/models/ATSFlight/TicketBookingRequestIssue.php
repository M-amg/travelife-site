<?php

namespace App\models\ATSFlight;

class TicketBookingRequestIssue
{

    /**
     * @var TicketBookingRequestCommission $Commission
     */
    protected $Commission = null;

    /**
     * @var TicketBookingRequestPaxText $Endorsement
     */
    protected $Endorsement = null;

    /**
     * @var ArrayOfTicketBookingRequestPayment $FormOfPayments
     */
    protected $FormOfPayments = null;

    /**
     * @var ArrayOfTicketBookingRequestPassenger $IssuePassengers
     */
    protected $IssuePassengers = null;

    /**
     * @var ArrayOfTicketBookingRequestSegment $IssueSegments
     */
    protected $IssueSegments = null;

    /**
     * @var TicketBookingRequestPaxText $Tourcode
     */
    protected $Tourcode = null;

    /**
     * @var string $ValidatingCarrier
     */
    protected $ValidatingCarrier = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TicketBookingRequestCommission
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param TicketBookingRequestCommission $Commission
     * @return \App\models\ATSFlight\TicketBookingRequestIssue
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return TicketBookingRequestPaxText
     */
    public function getEndorsement()
    {
      return $this->Endorsement;
    }

    /**
     * @param TicketBookingRequestPaxText $Endorsement
     * @return \App\models\ATSFlight\TicketBookingRequestIssue
     */
    public function setEndorsement($Endorsement)
    {
      $this->Endorsement = $Endorsement;
      return $this;
    }

    /**
     * @return ArrayOfTicketBookingRequestPayment
     */
    public function getFormOfPayments()
    {
      return $this->FormOfPayments;
    }

    /**
     * @param ArrayOfTicketBookingRequestPayment $FormOfPayments
     * @return \App\models\ATSFlight\TicketBookingRequestIssue
     */
    public function setFormOfPayments($FormOfPayments)
    {
      $this->FormOfPayments = $FormOfPayments;
      return $this;
    }

    /**
     * @return ArrayOfTicketBookingRequestPassenger
     */
    public function getIssuePassengers()
    {
      return $this->IssuePassengers;
    }

    /**
     * @param ArrayOfTicketBookingRequestPassenger $IssuePassengers
     * @return \App\models\ATSFlight\TicketBookingRequestIssue
     */
    public function setIssuePassengers($IssuePassengers)
    {
      $this->IssuePassengers = $IssuePassengers;
      return $this;
    }

    /**
     * @return ArrayOfTicketBookingRequestSegment
     */
    public function getIssueSegments()
    {
      return $this->IssueSegments;
    }

    /**
     * @param ArrayOfTicketBookingRequestSegment $IssueSegments
     * @return \App\models\ATSFlight\TicketBookingRequestIssue
     */
    public function setIssueSegments($IssueSegments)
    {
      $this->IssueSegments = $IssueSegments;
      return $this;
    }

    /**
     * @return TicketBookingRequestPaxText
     */
    public function getTourcode()
    {
      return $this->Tourcode;
    }

    /**
     * @param TicketBookingRequestPaxText $Tourcode
     * @return \App\models\ATSFlight\TicketBookingRequestIssue
     */
    public function setTourcode($Tourcode)
    {
      $this->Tourcode = $Tourcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getValidatingCarrier()
    {
      return $this->ValidatingCarrier;
    }

    /**
     * @param string $ValidatingCarrier
     * @return \App\models\ATSFlight\TicketBookingRequestIssue
     */
    public function setValidatingCarrier($ValidatingCarrier)
    {
      $this->ValidatingCarrier = $ValidatingCarrier;
      return $this;
    }

}
