<?php

namespace App\models\ATSFlight;

class QuoteResponseRuleData
{

    /**
     * @var \DateTime $LastBookingDate
     */
    protected $LastBookingDate = null;

    /**
     * @var \DateTime $LastTicketingDate
     */
    protected $LastTicketingDate = null;

    /**
     * @var int $MaxTicketingAfterBook
     */
    protected $MaxTicketingAfterBook = null;

    /**
     * @var int $MinBookingBeforeDep
     */
    protected $MinBookingBeforeDep = null;

    /**
     * @var int $MinTicketingBeforeDep
     */
    protected $MinTicketingBeforeDep = null;

    /**
     * @var string $Penalty
     */
    protected $Penalty = null;

    /**
     * @var string $PlatingCarrier
     */
    protected $PlatingCarrier = null;

    /**
     * @var int $Requirements
     */
    protected $Requirements = null;

    /**
     * @var DiscountEnum $SpecialDiscount
     */
    protected $SpecialDiscount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getLastBookingDate()
    {
      if ($this->LastBookingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastBookingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastBookingDate
     * @return \App\models\ATSFlight\QuoteResponseRuleData
     */
    public function setLastBookingDate(\DateTime $LastBookingDate = null)
    {
      if ($LastBookingDate == null) {
       $this->LastBookingDate = null;
      } else {
        $this->LastBookingDate = $LastBookingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastTicketingDate()
    {
      if ($this->LastTicketingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastTicketingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastTicketingDate
     * @return \App\models\ATSFlight\QuoteResponseRuleData
     */
    public function setLastTicketingDate(\DateTime $LastTicketingDate = null)
    {
      if ($LastTicketingDate == null) {
       $this->LastTicketingDate = null;
      } else {
        $this->LastTicketingDate = $LastTicketingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxTicketingAfterBook()
    {
      return $this->MaxTicketingAfterBook;
    }

    /**
     * @param int $MaxTicketingAfterBook
     * @return \App\models\ATSFlight\QuoteResponseRuleData
     */
    public function setMaxTicketingAfterBook($MaxTicketingAfterBook)
    {
      $this->MaxTicketingAfterBook = $MaxTicketingAfterBook;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinBookingBeforeDep()
    {
      return $this->MinBookingBeforeDep;
    }

    /**
     * @param int $MinBookingBeforeDep
     * @return \App\models\ATSFlight\QuoteResponseRuleData
     */
    public function setMinBookingBeforeDep($MinBookingBeforeDep)
    {
      $this->MinBookingBeforeDep = $MinBookingBeforeDep;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinTicketingBeforeDep()
    {
      return $this->MinTicketingBeforeDep;
    }

    /**
     * @param int $MinTicketingBeforeDep
     * @return \App\models\ATSFlight\QuoteResponseRuleData
     */
    public function setMinTicketingBeforeDep($MinTicketingBeforeDep)
    {
      $this->MinTicketingBeforeDep = $MinTicketingBeforeDep;
      return $this;
    }

    /**
     * @return string
     */
    public function getPenalty()
    {
      return $this->Penalty;
    }

    /**
     * @param string $Penalty
     * @return \App\models\ATSFlight\QuoteResponseRuleData
     */
    public function setPenalty($Penalty)
    {
      $this->Penalty = $Penalty;
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
     * @return \App\models\ATSFlight\QuoteResponseRuleData
     */
    public function setPlatingCarrier($PlatingCarrier)
    {
      $this->PlatingCarrier = $PlatingCarrier;
      return $this;
    }

    /**
     * @return int
     */
    public function getRequirements()
    {
      return $this->Requirements;
    }

    /**
     * @param int $Requirements
     * @return \App\models\ATSFlight\QuoteResponseRuleData
     */
    public function setRequirements($Requirements)
    {
      $this->Requirements = $Requirements;
      return $this;
    }

    /**
     * @return DiscountEnum
     */
    public function getSpecialDiscount()
    {
      return $this->SpecialDiscount;
    }

    /**
     * @param DiscountEnum $SpecialDiscount
     * @return \App\models\ATSFlight\QuoteResponseRuleData
     */
    public function setSpecialDiscount($SpecialDiscount)
    {
      $this->SpecialDiscount = $SpecialDiscount;
      return $this;
    }

}
