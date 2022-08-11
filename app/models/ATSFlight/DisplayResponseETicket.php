<?php

namespace App\models\ATSFlight;

class DisplayResponseETicket
{

    /**
     * @var boolean $ETicketAllowed
     */
    protected $ETicketAllowed = null;

    /**
     * @var SharedPrice $ETicketBuyPrice
     */
    protected $ETicketBuyPrice = null;

    /**
     * @var SharedPrice $ETicketSellPrice
     */
    protected $ETicketSellPrice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getETicketAllowed()
    {
      return $this->ETicketAllowed;
    }

    /**
     * @param boolean $ETicketAllowed
     * @return \App\models\ATSFlight\DisplayResponseETicket
     */
    public function setETicketAllowed($ETicketAllowed)
    {
      $this->ETicketAllowed = $ETicketAllowed;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getETicketBuyPrice()
    {
      return $this->ETicketBuyPrice;
    }

    /**
     * @param SharedPrice $ETicketBuyPrice
     * @return \App\models\ATSFlight\DisplayResponseETicket
     */
    public function setETicketBuyPrice($ETicketBuyPrice)
    {
      $this->ETicketBuyPrice = $ETicketBuyPrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getETicketSellPrice()
    {
      return $this->ETicketSellPrice;
    }

    /**
     * @param SharedPrice $ETicketSellPrice
     * @return \App\models\ATSFlight\DisplayResponseETicket
     */
    public function setETicketSellPrice($ETicketSellPrice)
    {
      $this->ETicketSellPrice = $ETicketSellPrice;
      return $this;
    }

}
