<?php

namespace App\models\ATSFlight;

class ChangeFlightWebFare
{

    /**
     * @var boolean $AllowSMSNotification
     */
    protected $AllowSMSNotification = null;

    /**
     * @var string $PassengerFirstName
     */
    protected $PassengerFirstName = null;

    /**
     * @var string $PassengerLastName
     */
    protected $PassengerLastName = null;

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
     * @return \App\models\ATSFlight\ChangeFlightWebFare
     */
    public function setAllowSMSNotification($AllowSMSNotification)
    {
      $this->AllowSMSNotification = $AllowSMSNotification;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassengerFirstName()
    {
      return $this->PassengerFirstName;
    }

    /**
     * @param string $PassengerFirstName
     * @return \App\models\ATSFlight\ChangeFlightWebFare
     */
    public function setPassengerFirstName($PassengerFirstName)
    {
      $this->PassengerFirstName = $PassengerFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassengerLastName()
    {
      return $this->PassengerLastName;
    }

    /**
     * @param string $PassengerLastName
     * @return \App\models\ATSFlight\ChangeFlightWebFare
     */
    public function setPassengerLastName($PassengerLastName)
    {
      $this->PassengerLastName = $PassengerLastName;
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
     * @return \App\models\ATSFlight\ChangeFlightWebFare
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
     * @return \App\models\ATSFlight\ChangeFlightWebFare
     */
    public function setWebAgent($WebAgent)
    {
      $this->WebAgent = $WebAgent;
      return $this;
    }

}
