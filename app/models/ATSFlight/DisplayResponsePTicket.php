<?php

namespace App\models\ATSFlight;

class DisplayResponsePTicket
{

    /**
     * @var boolean $PTicketAllowed
     */
    protected $PTicketAllowed = null;

    /**
     * @var SharedPrice $PTicketBuyPrice
     */
    protected $PTicketBuyPrice = null;

    /**
     * @var SharedPrice $PTicketSellPrice
     */
    protected $PTicketSellPrice = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getPTicketAllowed()
    {
      return $this->PTicketAllowed;
    }

    /**
     * @param boolean $PTicketAllowed
     * @return \App\models\ATSFlight\DisplayResponsePTicket
     */
    public function setPTicketAllowed($PTicketAllowed)
    {
      $this->PTicketAllowed = $PTicketAllowed;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPTicketBuyPrice()
    {
      return $this->PTicketBuyPrice;
    }

    /**
     * @param SharedPrice $PTicketBuyPrice
     * @return \App\models\ATSFlight\DisplayResponsePTicket
     */
    public function setPTicketBuyPrice($PTicketBuyPrice)
    {
      $this->PTicketBuyPrice = $PTicketBuyPrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPTicketSellPrice()
    {
      return $this->PTicketSellPrice;
    }

    /**
     * @param SharedPrice $PTicketSellPrice
     * @return \App\models\ATSFlight\DisplayResponsePTicket
     */
    public function setPTicketSellPrice($PTicketSellPrice)
    {
      $this->PTicketSellPrice = $PTicketSellPrice;
      return $this;
    }

}
