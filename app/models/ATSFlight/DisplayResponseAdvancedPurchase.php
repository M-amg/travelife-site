<?php

namespace App\models\ATSFlight;

class DisplayResponseAdvancedPurchase
{

    /**
     * @var \DateTime $FirstBookingDate
     */
    protected $FirstBookingDate = null;

    /**
     * @var \DateTime $FirstTicketingDate
     */
    protected $FirstTicketingDate = null;

    /**
     * @var \DateTime $LastBookingDate
     */
    protected $LastBookingDate = null;

    /**
     * @var \DateTime $LastTicketingDate
     */
    protected $LastTicketingDate = null;

    /**
     * @var int $MinBookingBeforeDeparture
     */
    protected $MinBookingBeforeDeparture = null;

    /**
     * @var int $MinTicketingBeforeDeparture
     */
    protected $MinTicketingBeforeDeparture = null;

    /**
     * @var int $TicketingDaysAfterBooking
     */
    protected $TicketingDaysAfterBooking = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getFirstBookingDate()
    {
      if ($this->FirstBookingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FirstBookingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FirstBookingDate
     * @return \App\models\ATSFlight\DisplayResponseAdvancedPurchase
     */
    public function setFirstBookingDate(\DateTime $FirstBookingDate = null)
    {
      if ($FirstBookingDate == null) {
       $this->FirstBookingDate = null;
      } else {
        $this->FirstBookingDate = $FirstBookingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFirstTicketingDate()
    {
      if ($this->FirstTicketingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FirstTicketingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FirstTicketingDate
     * @return \App\models\ATSFlight\DisplayResponseAdvancedPurchase
     */
    public function setFirstTicketingDate(\DateTime $FirstTicketingDate = null)
    {
      if ($FirstTicketingDate == null) {
       $this->FirstTicketingDate = null;
      } else {
        $this->FirstTicketingDate = $FirstTicketingDate->format(\DateTime::ATOM);
      }
      return $this;
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
     * @return \App\models\ATSFlight\DisplayResponseAdvancedPurchase
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
     * @return \App\models\ATSFlight\DisplayResponseAdvancedPurchase
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
    public function getMinBookingBeforeDeparture()
    {
      return $this->MinBookingBeforeDeparture;
    }

    /**
     * @param int $MinBookingBeforeDeparture
     * @return \App\models\ATSFlight\DisplayResponseAdvancedPurchase
     */
    public function setMinBookingBeforeDeparture($MinBookingBeforeDeparture)
    {
      $this->MinBookingBeforeDeparture = $MinBookingBeforeDeparture;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinTicketingBeforeDeparture()
    {
      return $this->MinTicketingBeforeDeparture;
    }

    /**
     * @param int $MinTicketingBeforeDeparture
     * @return \App\models\ATSFlight\DisplayResponseAdvancedPurchase
     */
    public function setMinTicketingBeforeDeparture($MinTicketingBeforeDeparture)
    {
      $this->MinTicketingBeforeDeparture = $MinTicketingBeforeDeparture;
      return $this;
    }

    /**
     * @return int
     */
    public function getTicketingDaysAfterBooking()
    {
      return $this->TicketingDaysAfterBooking;
    }

    /**
     * @param int $TicketingDaysAfterBooking
     * @return \App\models\ATSFlight\DisplayResponseAdvancedPurchase
     */
    public function setTicketingDaysAfterBooking($TicketingDaysAfterBooking)
    {
      $this->TicketingDaysAfterBooking = $TicketingDaysAfterBooking;
      return $this;
    }

}
