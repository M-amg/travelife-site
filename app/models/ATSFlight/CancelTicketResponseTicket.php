<?php

namespace App\models\ATSFlight;

class CancelTicketResponseTicket
{

    /**
     * @var string $EMDNumber
     */
    protected $EMDNumber = null;

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var string $FirstTicketNumber
     */
    protected $FirstTicketNumber = null;

    /**
     * @var string $LastTicketNumber
     */
    protected $LastTicketNumber = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

    /**
     * @var int $StatusCode
     */
    protected $StatusCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEMDNumber()
    {
      return $this->EMDNumber;
    }

    /**
     * @param string $EMDNumber
     * @return \App\models\ATSFlight\CancelTicketResponseTicket
     */
    public function setEMDNumber($EMDNumber)
    {
      $this->EMDNumber = $EMDNumber;
      return $this;
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
     * @return \App\models\ATSFlight\CancelTicketResponseTicket
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstTicketNumber()
    {
      return $this->FirstTicketNumber;
    }

    /**
     * @param string $FirstTicketNumber
     * @return \App\models\ATSFlight\CancelTicketResponseTicket
     */
    public function setFirstTicketNumber($FirstTicketNumber)
    {
      $this->FirstTicketNumber = $FirstTicketNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastTicketNumber()
    {
      return $this->LastTicketNumber;
    }

    /**
     * @param string $LastTicketNumber
     * @return \App\models\ATSFlight\CancelTicketResponseTicket
     */
    public function setLastTicketNumber($LastTicketNumber)
    {
      $this->LastTicketNumber = $LastTicketNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordLocator()
    {
      return $this->RecordLocator;
    }

    /**
     * @param string $RecordLocator
     * @return \App\models\ATSFlight\CancelTicketResponseTicket
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
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
     * @return \App\models\ATSFlight\CancelTicketResponseTicket
     */
    public function setStatusCode($StatusCode)
    {
      $this->StatusCode = $StatusCode;
      return $this;
    }

}
