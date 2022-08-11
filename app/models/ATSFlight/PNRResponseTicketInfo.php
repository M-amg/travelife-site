<?php

namespace App\models\ATSFlight;

class PNRResponseTicketInfo
{

    /**
     * @var SharedPrice $BaseFare
     */
    protected $BaseFare = null;

    /**
     * @var \DateTime $DateOfIssuse
     */
    protected $DateOfIssuse = null;

    /**
     * @var ArrayOfPNRResponseDocumentInfo $DocumentInfo
     */
    protected $DocumentInfo = null;

    /**
     * @var string $FareCalculation
     */
    protected $FareCalculation = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $FormOfPaymentAmount
     */
    protected $FormOfPaymentAmount = null;

    /**
     * @var string $FormOfPaymentType
     */
    protected $FormOfPaymentType = null;

    /**
     * @var SharedPrice $GrandTotal
     */
    protected $GrandTotal = null;

    /**
     * @var string $IATANumber
     */
    protected $IATANumber = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $PointOfIssue
     */
    protected $PointOfIssue = null;

    /**
     * @var ArrayOfTaxDetail $Taxes
     */
    protected $Taxes = null;

    /**
     * @var string $TicketStatus
     */
    protected $TicketStatus = null;

    /**
     * @var SharedPrice $TotalAmount
     */
    protected $TotalAmount = null;

    /**
     * @var SharedPrice $TotalFee
     */
    protected $TotalFee = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getBaseFare()
    {
      return $this->BaseFare;
    }

    /**
     * @param SharedPrice $BaseFare
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setBaseFare($BaseFare)
    {
      $this->BaseFare = $BaseFare;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfIssuse()
    {
      if ($this->DateOfIssuse == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateOfIssuse);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateOfIssuse
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setDateOfIssuse(\DateTime $DateOfIssuse = null)
    {
      if ($DateOfIssuse == null) {
       $this->DateOfIssuse = null;
      } else {
        $this->DateOfIssuse = $DateOfIssuse->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return ArrayOfPNRResponseDocumentInfo
     */
    public function getDocumentInfo()
    {
      return $this->DocumentInfo;
    }

    /**
     * @param ArrayOfPNRResponseDocumentInfo $DocumentInfo
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setDocumentInfo($DocumentInfo)
    {
      $this->DocumentInfo = $DocumentInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareCalculation()
    {
      return $this->FareCalculation;
    }

    /**
     * @param string $FareCalculation
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setFareCalculation($FareCalculation)
    {
      $this->FareCalculation = $FareCalculation;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormOfPaymentAmount()
    {
      return $this->FormOfPaymentAmount;
    }

    /**
     * @param string $FormOfPaymentAmount
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setFormOfPaymentAmount($FormOfPaymentAmount)
    {
      $this->FormOfPaymentAmount = $FormOfPaymentAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getFormOfPaymentType()
    {
      return $this->FormOfPaymentType;
    }

    /**
     * @param string $FormOfPaymentType
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setFormOfPaymentType($FormOfPaymentType)
    {
      $this->FormOfPaymentType = $FormOfPaymentType;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getGrandTotal()
    {
      return $this->GrandTotal;
    }

    /**
     * @param SharedPrice $GrandTotal
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setGrandTotal($GrandTotal)
    {
      $this->GrandTotal = $GrandTotal;
      return $this;
    }

    /**
     * @return string
     */
    public function getIATANumber()
    {
      return $this->IATANumber;
    }

    /**
     * @param string $IATANumber
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointOfIssue()
    {
      return $this->PointOfIssue;
    }

    /**
     * @param string $PointOfIssue
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setPointOfIssue($PointOfIssue)
    {
      $this->PointOfIssue = $PointOfIssue;
      return $this;
    }

    /**
     * @return ArrayOfTaxDetail
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfTaxDetail $Taxes
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketStatus()
    {
      return $this->TicketStatus;
    }

    /**
     * @param string $TicketStatus
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setTicketStatus($TicketStatus)
    {
      $this->TicketStatus = $TicketStatus;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalAmount()
    {
      return $this->TotalAmount;
    }

    /**
     * @param SharedPrice $TotalAmount
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setTotalAmount($TotalAmount)
    {
      $this->TotalAmount = $TotalAmount;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalFee()
    {
      return $this->TotalFee;
    }

    /**
     * @param SharedPrice $TotalFee
     * @return \App\models\ATSFlight\PNRResponseTicketInfo
     */
    public function setTotalFee($TotalFee)
    {
      $this->TotalFee = $TotalFee;
      return $this;
    }

}
