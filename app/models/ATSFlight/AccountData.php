<?php

namespace App\models\ATSFlight;

class AccountData
{

    /**
     * @var string $CustomerEmail
     */
    protected $CustomerEmail = null;

    /**
     * @var string $IPAddress
     */
    protected $IPAddress = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $UserID
     */
    protected $UserID = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCustomerEmail()
    {
      return $this->CustomerEmail;
    }

    /**
     * @param string $CustomerEmail
     * @return \App\models\ATSFlight\AccountData
     */
    public function setCustomerEmail($CustomerEmail)
    {
      $this->CustomerEmail = $CustomerEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getIPAddress()
    {
      return $this->IPAddress;
    }

    /**
     * @param string $IPAddress
     * @return \App\models\ATSFlight\AccountData
     */
    public function setIPAddress($IPAddress)
    {
      $this->IPAddress = $IPAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \App\models\ATSFlight\AccountData
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserID()
    {
      return $this->UserID;
    }

    /**
     * @param string $UserID
     * @return \App\models\ATSFlight\AccountData
     */
    public function setUserID($UserID)
    {
      $this->UserID = $UserID;
      return $this;
    }

}
