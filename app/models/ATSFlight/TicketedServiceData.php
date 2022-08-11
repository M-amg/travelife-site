<?php

namespace App\models\ATSFlight;

class TicketedServiceData
{

    /**
     * @var ArrayOfstring $AssociatedTicketIDs
     */
    protected $AssociatedTicketIDs = null;

    /**
     * @var ArrayOfServiceTicketCouponData $Coupons
     */
    protected $Coupons = null;

    /**
     * @var \DateTime $DateOfIssue
     */
    protected $DateOfIssue = null;

    /**
     * @var string $DocumentNumber
     */
    protected $DocumentNumber = null;

    /**
     * @var SharedPrice $EquivalentServicePrice
     */
    protected $EquivalentServicePrice = null;

    /**
     * @var string $FareCalculation
     */
    protected $FareCalculation = null;

    /**
     * @var string $FormOfPayment
     */
    protected $FormOfPayment = null;

    /**
     * @var string $IATANumber
     */
    protected $IATANumber = null;

    /**
     * @var string $PassengerID
     */
    protected $PassengerID = null;

    /**
     * @var string $PlatingCarrier
     */
    protected $PlatingCarrier = null;

    /**
     * @var string $PointOfIssue
     */
    protected $PointOfIssue = null;

    /**
     * @var SharedPrice $ServicePrice
     */
    protected $ServicePrice = null;

    /**
     * @var string $ServiceText
     */
    protected $ServiceText = null;

    /**
     * @var TicketStatusEnum $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getAssociatedTicketIDs()
    {
      return $this->AssociatedTicketIDs;
    }

    /**
     * @param ArrayOfstring $AssociatedTicketIDs
     * @return \App\models\ATSFlight\TicketedServiceData
     */
    public function setAssociatedTicketIDs($AssociatedTicketIDs)
    {
      $this->AssociatedTicketIDs = $AssociatedTicketIDs;
      return $this;
    }

    /**
     * @return ArrayOfServiceTicketCouponData
     */
    public function getCoupons()
    {
      return $this->Coupons;
    }

    /**
     * @param ArrayOfServiceTicketCouponData $Coupons
     * @return \App\models\ATSFlight\TicketedServiceData
     */
    public function setCoupons($Coupons)
    {
      $this->Coupons = $Coupons;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateOfIssue()
    {
      if ($this->DateOfIssue == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DateOfIssue);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DateOfIssue
     * @return \App\models\ATSFlight\TicketedServiceData
     */
    public function setDateOfIssue(\DateTime $DateOfIssue = null)
    {
      if ($DateOfIssue == null) {
       $this->DateOfIssue = null;
      } else {
        $this->DateOfIssue = $DateOfIssue->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getDocumentNumber()
    {
      return $this->DocumentNumber;
    }

    /**
     * @param string $DocumentNumber
     * @return \App\models\ATSFlight\TicketedServiceData
     */
    public function setDocumentNumber($DocumentNumber)
    {
      $this->DocumentNumber = $DocumentNumber;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentServicePrice()
    {
      return $this->EquivalentServicePrice;
    }

    /**
     * @param SharedPrice $EquivalentServicePrice
     * @return \App\models\ATSFlight\TicketedServiceData
     */
    public function setEquivalentServicePrice($EquivalentServicePrice)
    {
      $this->EquivalentServicePrice = $EquivalentServicePrice;
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
     * @return \App\models\ATSFlight\TicketedServiceData
     */
    public function setFareCalculation($FareCalculation)
    {
      $this->FareCalculation = $FareCalculation;
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
     * @return \App\models\ATSFlight\TicketedServiceData
     */
    public function setFormOfPayment($FormOfPayment)
    {
      $this->FormOfPayment = $FormOfPayment;
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
     * @return \App\models\ATSFlight\TicketedServiceData
     */
    public function setIATANumber($IATANumber)
    {
      $this->IATANumber = $IATANumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassengerID()
    {
      return $this->PassengerID;
    }

    /**
     * @param string $PassengerID
     * @return \App\models\ATSFlight\TicketedServiceData
     */
    public function setPassengerID($PassengerID)
    {
      $this->PassengerID = $PassengerID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlatingCarrier()
    {
      return $this->PlatingCarrier;
    }

    /**
     * @param string $PlatingCarrier
     * @return \App\models\ATSFlight\TicketedServiceData
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
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
     * @return \App\models\ATSFlight\TicketedServiceData
     */
    public function setPointOfIssue($PointOfIssue)
    {
      $this->PointOfIssue = $PointOfIssue;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getServicePrice()
    {
      return $this->ServicePrice;
    }

    /**
     * @param SharedPrice $ServicePrice
     * @return \App\models\ATSFlight\TicketedServiceData
     */
    public function setServicePrice($ServicePrice)
    {
      $this->ServicePrice = $ServicePrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceText()
    {
      return $this->ServiceText;
    }

    /**
     * @param string $ServiceText
     * @return \App\models\ATSFlight\TicketedServiceData
     */
    public function setServiceText($ServiceText)
    {
      $this->ServiceText = $ServiceText;
      return $this;
    }

    /**
     * @return TicketStatusEnum
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param TicketStatusEnum $Status
     * @return \App\models\ATSFlight\TicketedServiceData
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
