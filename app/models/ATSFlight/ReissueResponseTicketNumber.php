<?php

namespace App\models\ATSFlight;

class ReissueResponseTicketNumber
{

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

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\ReissueResponseTicketNumber
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
     * @return \App\models\ATSFlight\ReissueResponseTicketNumber
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
     * @return \App\models\ATSFlight\ReissueResponseTicketNumber
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
      return $this;
    }

}
