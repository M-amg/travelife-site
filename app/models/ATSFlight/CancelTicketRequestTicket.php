<?php

namespace App\models\ATSFlight;

class CancelTicketRequestTicket
{

    /**
     * @var SharedPrice $Fare
     */
    protected $Fare = null;

    /**
     * @var string $FirstTicketNumber
     */
    protected $FirstTicketNumber = null;

    /**
     * @var string $LastTicketNumber
     */
    protected $LastTicketNumber = null;

    /**
     * @var CancelTicketPricePercentage $Penalities
     */
    protected $Penalities = null;

    /**
     * @var CancelTicketPricePercentage $PenalityCommission
     */
    protected $PenalityCommission = null;

    /**
     * @var RefundModeEnum $RefundMode
     */
    protected $RefundMode = null;

    /**
     * @var string $RefundRemark
     */
    protected $RefundRemark = null;

    /**
     * @var ArrayOfTaxDetail $TaxRefundDetails
     */
    protected $TaxRefundDetails = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getFare()
    {
      return $this->Fare;
    }

    /**
     * @param SharedPrice $Fare
     * @return \App\models\ATSFlight\CancelTicketRequestTicket
     */
    public function setFare($Fare)
    {
      $this->Fare = $Fare;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstTicketNumber()
    {
      return $this->FirstTicketNumber;
    }

    /**
     * @param string $FirstTicketNumber
     * @return \App\models\ATSFlight\CancelTicketRequestTicket
     */
    public function setFirstTicketNumber($FirstTicketNumber)
    {
      $this->FirstTicketNumber = $FirstTicketNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastTicketNumber()
    {
      return $this->LastTicketNumber;
    }

    /**
     * @param string $LastTicketNumber
     * @return \App\models\ATSFlight\CancelTicketRequestTicket
     */
    public function setLastTicketNumber($LastTicketNumber)
    {
      $this->LastTicketNumber = $LastTicketNumber;
      return $this;
    }

    /**
     * @return CancelTicketPricePercentage
     */
    public function getPenalities()
    {
      return $this->Penalities;
    }

    /**
     * @param CancelTicketPricePercentage $Penalities
     * @return \App\models\ATSFlight\CancelTicketRequestTicket
     */
    public function setPenalities($Penalities)
    {
      $this->Penalities = $Penalities;
      return $this;
    }

    /**
     * @return CancelTicketPricePercentage
     */
    public function getPenalityCommission()
    {
      return $this->PenalityCommission;
    }

    /**
     * @param CancelTicketPricePercentage $PenalityCommission
     * @return \App\models\ATSFlight\CancelTicketRequestTicket
     */
    public function setPenalityCommission($PenalityCommission)
    {
      $this->PenalityCommission = $PenalityCommission;
      return $this;
    }

    /**
     * @return RefundModeEnum
     */
    public function getRefundMode()
    {
      return $this->RefundMode;
    }

    /**
     * @param RefundModeEnum $RefundMode
     * @return \App\models\ATSFlight\CancelTicketRequestTicket
     */
    public function setRefundMode($RefundMode)
    {
      $this->RefundMode = $RefundMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefundRemark()
    {
      return $this->RefundRemark;
    }

    /**
     * @param string $RefundRemark
     * @return \App\models\ATSFlight\CancelTicketRequestTicket
     */
    public function setRefundRemark($RefundRemark)
    {
      $this->RefundRemark = $RefundRemark;
      return $this;
    }

    /**
     * @return ArrayOfTaxDetail
     */
    public function getTaxRefundDetails()
    {
      return $this->TaxRefundDetails;
    }

    /**
     * @param ArrayOfTaxDetail $TaxRefundDetails
     * @return \App\models\ATSFlight\CancelTicketRequestTicket
     */
    public function setTaxRefundDetails($TaxRefundDetails)
    {
      $this->TaxRefundDetails = $TaxRefundDetails;
      return $this;
    }

}
