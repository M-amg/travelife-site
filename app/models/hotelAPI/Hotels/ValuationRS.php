<?php

namespace App\models\hotelAPI\Hotels;

class ValuationRS
{

    /**
     * @var Amount $amount
     */
    protected $amount = null;

    /**
     * @var CancellationTerm[] $cancellationTerms
     */
    protected $cancellationTerms = null;

    /**
     * @var Commision $commision
     */
    protected $commision = null;

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @var HandlingFee[] $handlingFees
     */
    protected $handlingFees = null;

    /**
     * @var ValuationLine[] $lines
     */
    protected $lines = null;

    /**
     * @var ValuationSupplement[] $reductions
     */
    protected $reductions = null;

    /**
     * @var Comment[] $remarks
     */
    protected $remarks = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var ValuationSupplement[] $supplements
     */
    protected $supplements = null;

    /**
     * @var \DateTime $checkIn
     */
    protected $checkIn = null;

    /**
     * @var \DateTime $checkOut
     */
    protected $checkOut = null;

    /**
     * @var Establishment $establishment
     */
    protected $establishment = null;

    /**
     * @var ValuatedOccupation[] $occupations
     */
    protected $occupations = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Amount
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param Amount $amount
     * @return \App\models\hotelAPI\Hotels\ValuationRS
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return CancellationTerm[]
     */
    public function getCancellationTerms()
    {
      return $this->cancellationTerms;
    }

    /**
     * @param CancellationTerm[] $cancellationTerms
     * @return \App\models\hotelAPI\Hotels\ValuationRS
     */
    public function setCancellationTerms(array $cancellationTerms = null)
    {
      $this->cancellationTerms = $cancellationTerms;
      return $this;
    }

    /**
     * @return Commision
     */
    public function getCommision()
    {
      return $this->commision;
    }

    /**
     * @param Commision $commision
     * @return \App\models\hotelAPI\Hotels\ValuationRS
     */
    public function setCommision($commision)
    {
      $this->commision = $commision;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $date
     * @return \App\models\hotelAPI\Hotels\ValuationRS
     */
    public function setDate(\DateTime $date = null)
    {
      if ($date == null) {
       $this->date = null;
      } else {
        $this->date = $date->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return HandlingFee[]
     */
    public function getHandlingFees()
    {
      return $this->handlingFees;
    }

    /**
     * @param HandlingFee[] $handlingFees
     * @return \App\models\hotelAPI\Hotels\ValuationRS
     */
    public function setHandlingFees(array $handlingFees = null)
    {
      $this->handlingFees = $handlingFees;
      return $this;
    }

    /**
     * @return ValuationLine[]
     */
    public function getLines()
    {
      return $this->lines;
    }

    /**
     * @param ValuationLine[] $lines
     * @return \App\models\hotelAPI\Hotels\ValuationRS
     */
    public function setLines(array $lines = null)
    {
      $this->lines = $lines;
      return $this;
    }

    /**
     * @return ValuationSupplement[]
     */
    public function getReductions()
    {
      return $this->reductions;
    }

    /**
     * @param ValuationSupplement[] $reductions
     * @return \App\models\hotelAPI\Hotels\ValuationRS
     */
    public function setReductions(array $reductions = null)
    {
      $this->reductions = $reductions;
      return $this;
    }

    /**
     * @return Comment[]
     */
    public function getRemarks()
    {
      return $this->remarks;
    }

    /**
     * @param Comment[] $remarks
     * @return \App\models\hotelAPI\Hotels\ValuationRS
     */
    public function setRemarks(array $remarks = null)
    {
      $this->remarks = $remarks;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \App\models\hotelAPI\Hotels\ValuationRS
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return ValuationSupplement[]
     */
    public function getSupplements()
    {
      return $this->supplements;
    }

    /**
     * @param ValuationSupplement[] $supplements
     * @return \App\models\hotelAPI\Hotels\ValuationRS
     */
    public function setSupplements(array $supplements = null)
    {
      $this->supplements = $supplements;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckIn()
    {
      if ($this->checkIn == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->checkIn);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $checkIn
     * @return \App\models\hotelAPI\Hotels\ValuationRS
     */
    public function setCheckIn(\DateTime $checkIn = null)
    {
      if ($checkIn == null) {
       $this->checkIn = null;
      } else {
        $this->checkIn = $checkIn->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckOut()
    {
      if ($this->checkOut == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->checkOut);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $checkOut
     * @return \App\models\hotelAPI\Hotels\ValuationRS
     */
    public function setCheckOut(\DateTime $checkOut = null)
    {
      if ($checkOut == null) {
       $this->checkOut = null;
      } else {
        $this->checkOut = $checkOut->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return Establishment
     */
    public function getEstablishment()
    {
      return $this->establishment;
    }

    /**
     * @param Establishment $establishment
     * @return \App\models\hotelAPI\Hotels\ValuationRS
     */
    public function setEstablishment($establishment)
    {
      $this->establishment = $establishment;
      return $this;
    }

    /**
     * @return ValuatedOccupation[]
     */
    public function getOccupations()
    {
      return $this->occupations;
    }

    /**
     * @param ValuatedOccupation[] $occupations
     * @return \App\models\hotelAPI\Hotels\ValuationRS
     */
    public function setOccupations(array $occupations = null)
    {
      $this->occupations = $occupations;
      return $this;
    }

}
