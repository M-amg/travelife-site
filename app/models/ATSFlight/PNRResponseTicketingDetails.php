<?php

namespace App\models\ATSFlight;

class PNRResponseTicketingDetails
{

    /**
     * @var string $Commission
     */
    protected $Commission = null;

    /**
     * @var string $Endorsment
     */
    protected $Endorsment = null;

    /**
     * @var string $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var string $OriginalIssuedDetails
     */
    protected $OriginalIssuedDetails = null;

    /**
     * @var string $Tourcode
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
     * @return string
     */
    public function getCommission()
    {
      return $this->Commission;
    }

    /**
     * @param string $Commission
     * @return \App\models\ATSFlight\PNRResponseTicketingDetails
     */
    public function setCommission($Commission)
    {
      $this->Commission = $Commission;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndorsment()
    {
      return $this->Endorsment;
    }

    /**
     * @param string $Endorsment
     * @return \App\models\ATSFlight\PNRResponseTicketingDetails
     */
    public function setEndorsment($Endorsment)
    {
      $this->Endorsment = $Endorsment;
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
     * @return \App\models\ATSFlight\PNRResponseTicketingDetails
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
      return $this;
    }

    /**
     * @return string
     */
    public function getOriginalIssuedDetails()
    {
      return $this->OriginalIssuedDetails;
    }

    /**
     * @param string $OriginalIssuedDetails
     * @return \App\models\ATSFlight\PNRResponseTicketingDetails
     */
    public function setOriginalIssuedDetails($OriginalIssuedDetails)
    {
      $this->OriginalIssuedDetails = $OriginalIssuedDetails;
      return $this;
    }

    /**
     * @return string
     */
    public function getTourcode()
    {
      return $this->Tourcode;
    }

    /**
     * @param string $Tourcode
     * @return \App\models\ATSFlight\PNRResponseTicketingDetails
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
     * @return \App\models\ATSFlight\PNRResponseTicketingDetails
     */
    public function setValidatingCarrier($ValidatingCarrier)
    {
      $this->ValidatingCarrier = $ValidatingCarrier;
      return $this;
    }

}
