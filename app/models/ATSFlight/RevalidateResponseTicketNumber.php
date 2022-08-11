<?php

namespace App\models\ATSFlight;

class RevalidateResponseTicketNumber
{

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var int $StatusCode
     */
    protected $StatusCode = null;

    /**
     * @var string $TicketNumber
     */
    protected $TicketNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getErrorText()
    {
      return $this->ErrorText;
    }

    /**
     * @param string $ErrorText
     * @return \App\models\ATSFlight\RevalidateResponseTicketNumber
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatusCode()
    {
      return $this->StatusCode;
    }

    /**
     * @param int $StatusCode
     * @return \App\models\ATSFlight\RevalidateResponseTicketNumber
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketNumber()
    {
      return $this->TicketNumber;
    }

    /**
     * @param string $TicketNumber
     * @return \App\models\ATSFlight\RevalidateResponseTicketNumber
     */
    public function setTicketNumber($TicketNumber)
    {
      $this->TicketNumber = $TicketNumber;
      return $this;
    }

}
