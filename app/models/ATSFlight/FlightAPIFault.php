<?php

namespace App\models\ATSFlight;

class FlightAPIFault
{

    /**
     * @var string $APIVersion
     */
    protected $APIVersion = null;

    /**
     * @var string $ExceptionCode
     */
    protected $ExceptionCode = null;

    /**
     * @var string $ExceptionText
     */
    protected $ExceptionText = null;

    /**
     * @var int $ListenPort
     */
    protected $ListenPort = null;

    /**
     * @var string $MachineName
     */
    protected $MachineName = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAPIVersion()
    {
      return $this->APIVersion;
    }

    /**
     * @param string $APIVersion
     * @return \App\models\ATSFlight\FlightAPIFault
     */
    public function setAPIVersion($APIVersion)
    {
      $this->APIVersion = $APIVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getExceptionCode()
    {
      return $this->ExceptionCode;
    }

    /**
     * @param string $ExceptionCode
     * @return \App\models\ATSFlight\FlightAPIFault
     */
    public function setExceptionCode($ExceptionCode)
    {
      $this->ExceptionCode = $ExceptionCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getExceptionText()
    {
      return $this->ExceptionText;
    }

    /**
     * @param string $ExceptionText
     * @return \App\models\ATSFlight\FlightAPIFault
     */
    public function setExceptionText($ExceptionText)
    {
      $this->ExceptionText = $ExceptionText;
      return $this;
    }

    /**
     * @return int
     */
    public function getListenPort()
    {
      return $this->ListenPort;
    }

    /**
     * @param int $ListenPort
     * @return \App\models\ATSFlight\FlightAPIFault
     */
    public function setListenPort($ListenPort)
    {
      $this->ListenPort = $ListenPort;
      return $this;
    }

    /**
     * @return string
     */
    public function getMachineName()
    {
      return $this->MachineName;
    }

    /**
     * @param string $MachineName
     * @return \App\models\ATSFlight\FlightAPIFault
     */
    public function setMachineName($MachineName)
    {
      $this->MachineName = $MachineName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionID()
    {
      return $this->TransactionID;
    }

    /**
     * @param string $TransactionID
     * @return \App\models\ATSFlight\FlightAPIFault
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

}
