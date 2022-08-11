<?php

namespace App\models\ATSFlight;

class FareResponseRule
{

    /**
     * @var \DateTime $LastBookingDate
     */
    protected $LastBookingDate = null;

    /**
     * @var string $MatchCode
     */
    protected $MatchCode = null;

    /**
     * @var int $MaxAge
     */
    protected $MaxAge = null;

    /**
     * @var int $MinAge
     */
    protected $MinAge = null;

    /**
     * @var int $MinBookingBeforeDep
     */
    protected $MinBookingBeforeDep = null;

    /**
     * @var string $Penalty
     */
    protected $Penalty = null;

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
     * @return \App\models\ATSFlight\FareResponseRule
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
     * @return string
     */
    public function getMatchCode()
    {
      return $this->MatchCode;
    }

    /**
     * @param string $MatchCode
     * @return \App\models\ATSFlight\FareResponseRule
     */
    public function setMatchCode($MatchCode)
    {
      $this->MatchCode = $MatchCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxAge()
    {
      return $this->MaxAge;
    }

    /**
     * @param int $MaxAge
     * @return \App\models\ATSFlight\FareResponseRule
     */
    public function setMaxAge($MaxAge)
    {
      $this->MaxAge = $MaxAge;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinAge()
    {
      return $this->MinAge;
    }

    /**
     * @param int $MinAge
     * @return \App\models\ATSFlight\FareResponseRule
     */
    public function setMinAge($MinAge)
    {
      $this->MinAge = $MinAge;
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
     * @return \App\models\ATSFlight\FareResponseRule
     */
    public function setMinBookingBeforeDep($MinBookingBeforeDep)
    {
      $this->MinBookingBeforeDep = $MinBookingBeforeDep;
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
     * @return \App\models\ATSFlight\FareResponseRule
     */
    public function setPenalty($Penalty)
    {
      $this->Penalty = $Penalty;
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
     * @return \App\models\ATSFlight\FareResponseRule
     */
    public function setSpecialDiscount($SpecialDiscount)
    {
      $this->SpecialDiscount = $SpecialDiscount;
      return $this;
    }

}
