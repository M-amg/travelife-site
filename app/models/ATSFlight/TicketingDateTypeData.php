<?php

namespace App\models\ATSFlight;

class TicketingDateTypeData
{

    /**
     * @var \DateTime $TicketingDate
     */
    protected $TicketingDate = null;

    /**
     * @var TicketingDateTypeEnum $TicketingDateType
     */
    protected $TicketingDateType = null;

    /**
     * @param TicketingDateTypeEnum $TicketingDateType
     */
    public function __construct($TicketingDateType)
    {
      $this->TicketingDateType = $TicketingDateType;
    }

    /**
     * @return \DateTime
     */
    public function getTicketingDate()
    {
      if ($this->TicketingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TicketingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TicketingDate
     * @return \App\models\ATSFlight\TicketingDateTypeData
     */
    public function setTicketingDate(\DateTime $TicketingDate = null)
    {
      if ($TicketingDate == null) {
       $this->TicketingDate = null;
      } else {
        $this->TicketingDate = $TicketingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return TicketingDateTypeEnum
     */
    public function getTicketingDateType()
    {
      return $this->TicketingDateType;
    }

    /**
     * @param TicketingDateTypeEnum $TicketingDateType
     * @return \App\models\ATSFlight\TicketingDateTypeData
     */
    public function setTicketingDateType($TicketingDateType)
    {
      $this->TicketingDateType = $TicketingDateType;
      return $this;
    }

}
