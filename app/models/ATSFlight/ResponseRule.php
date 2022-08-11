<?php

namespace App\models\ATSFlight;

class ResponseRule
{

    /**
     * @var \DateTime $LastBookingDate
     */
    protected $LastBookingDate = null;

    /**
     * @var int $MaximumAge
     */
    protected $MaximumAge = null;

    /**
     * @var int $MinBookingBeforeDep
     */
    protected $MinBookingBeforeDep = null;

    /**
     * @var int $MinimumAge
     */
    protected $MinimumAge = null;

    /**
     * @var string $Penalty
     */
    protected $Penalty = null;

    /**
     * @var string $PlatingCarier
     */
    protected $PlatingCarier = null;

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
     * @return \App\models\ATSFlight\ResponseRule
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
     * @return int
     */
    public function getMaximumAge()
    {
      return $this->MaximumAge;
    }

    /**
     * @param int $MaximumAge
     * @return \App\models\ATSFlight\ResponseRule
     */
    public function setMaximumAge($MaximumAge)
    {
      $this->MaximumAge = $MaximumAge;
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
     * @return \App\models\ATSFlight\ResponseRule
     */
    public function setMinBookingBeforeDep($MinBookingBeforeDep)
    {
      $this->MinBookingBeforeDep = $MinBookingBeforeDep;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinimumAge()
    {
      return $this->MinimumAge;
    }

    /**
     * @param int $MinimumAge
     * @return \App\models\ATSFlight\ResponseRule
     */
    public function setMinimumAge($MinimumAge)
    {
      $this->MinimumAge = $MinimumAge;
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
     * @return \App\models\ATSFlight\ResponseRule
     */
    public function setPenalty($Penalty)
    {
      $this->Penalty = $Penalty;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlatingCarier()
    {
      return $this->PlatingCarier;
    }

    /**
     * @param string $PlatingCarier
     * @return \App\models\ATSFlight\ResponseRule
     */
    public function setPlatingCarier($PlatingCarier)
    {
      $this->PlatingCarier = $PlatingCarier;
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
     * @return \App\models\ATSFlight\ResponseRule
     */
    public function setSpecialDiscount($SpecialDiscount)
    {
      $this->SpecialDiscount = $SpecialDiscount;
      return $this;
    }

}
