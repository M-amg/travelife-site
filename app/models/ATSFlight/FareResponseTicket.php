<?php

namespace App\models\ATSFlight;

class FareResponseTicket
{

    /**
     * @var \DateTime $LastTicketingDate
     */
    protected $LastTicketingDate = null;

    /**
     * @var int $MaxTicketingAfterBook
     */
    protected $MaxTicketingAfterBook = null;

    /**
     * @var int $MinTicketingBeforeDep
     */
    protected $MinTicketingBeforeDep = null;

    /**
     * @var boolean $TicketBySupplier
     */
    protected $TicketBySupplier = null;

    /**
     * @var string $TicketOnDepInfo
     */
    protected $TicketOnDepInfo = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\FareResponseTicket
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
     * @return \App\models\ATSFlight\FareResponseTicket
     */
    public function setMaxTicketingAfterBook($MaxTicketingAfterBook)
    {
      $this->MaxTicketingAfterBook = $MaxTicketingAfterBook;
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
     * @return \App\models\ATSFlight\FareResponseTicket
     */
    public function setMinTicketingBeforeDep($MinTicketingBeforeDep)
    {
      $this->MinTicketingBeforeDep = $MinTicketingBeforeDep;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTicketBySupplier()
    {
      return $this->TicketBySupplier;
    }

    /**
     * @param boolean $TicketBySupplier
     * @return \App\models\ATSFlight\FareResponseTicket
     */
    public function setTicketBySupplier($TicketBySupplier)
    {
      $this->TicketBySupplier = $TicketBySupplier;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketOnDepInfo()
    {
      return $this->TicketOnDepInfo;
    }

    /**
     * @param string $TicketOnDepInfo
     * @return \App\models\ATSFlight\FareResponseTicket
     */
    public function setTicketOnDepInfo($TicketOnDepInfo)
    {
      $this->TicketOnDepInfo = $TicketOnDepInfo;
      return $this;
    }

}
