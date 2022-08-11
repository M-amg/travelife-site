<?php

namespace App\models\ATSFlight;

class BookRequestWebFare
{

    /**
     * @var boolean $AllowSMSNotification
     */
    protected $AllowSMSNotification = null;

    /**
     * @var SharedPrice $MaximumTolerance
     */
    protected $MaximumTolerance = null;

    /**
     * @var int $PercentageTolerance
     */
    protected $PercentageTolerance = null;

    /**
     * @var string $Transactioncode
     */
    protected $Transactioncode = null;

    /**
     * @var Agent $WebAgent
     */
    protected $WebAgent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getAllowSMSNotification()
    {
      return $this->AllowSMSNotification;
    }

    /**
     * @param boolean $AllowSMSNotification
     * @return \App\models\ATSFlight\BookRequestWebFare
     */
    public function setAllowSMSNotification($AllowSMSNotification)
    {
      $this->AllowSMSNotification = $AllowSMSNotification;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getMaximumTolerance()
    {
      return $this->MaximumTolerance;
    }

    /**
     * @param SharedPrice $MaximumTolerance
     * @return \App\models\ATSFlight\BookRequestWebFare
     */
    public function setMaximumTolerance($MaximumTolerance)
    {
      $this->MaximumTolerance = $MaximumTolerance;
      return $this;
    }

    /**
     * @return int
     */
    public function getPercentageTolerance()
    {
      return $this->PercentageTolerance;
    }

    /**
     * @param int $PercentageTolerance
     * @return \App\models\ATSFlight\BookRequestWebFare
     */
    public function setPercentageTolerance($PercentageTolerance)
    {
      $this->PercentageTolerance = $PercentageTolerance;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactioncode()
    {
      return $this->Transactioncode;
    }

    /**
     * @param string $Transactioncode
     * @return \App\models\ATSFlight\BookRequestWebFare
     */
    public function setTransactioncode($Transactioncode)
    {
      $this->Transactioncode = $Transactioncode;
      return $this;
    }

    /**
     * @return Agent
     */
    public function getWebAgent()
    {
      return $this->WebAgent;
    }

    /**
     * @param Agent $WebAgent
     * @return \App\models\ATSFlight\BookRequestWebFare
     */
    public function setWebAgent($WebAgent)
    {
      $this->WebAgent = $WebAgent;
      return $this;
    }

}
