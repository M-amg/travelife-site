<?php

namespace App\models\ATSFlight;

class LoginData
{

    /**
     * @var int $OverideLogging
     */
    protected $OverideLogging = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $TransactionID
     */
    protected $TransactionID = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getOverideLogging()
    {
      return $this->OverideLogging;
    }

    /**
     * @param int $OverideLogging
     * @return \App\models\ATSFlight\LoginData
     */
    public function setOverideLogging($OverideLogging)
    {
      $this->OverideLogging = $OverideLogging;
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
     * @return \App\models\ATSFlight\LoginData
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
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
     * @return \App\models\ATSFlight\LoginData
     */
    public function setTransactionID($TransactionID)
    {
      $this->TransactionID = $TransactionID;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->UserName;
    }

    /**
     * @param string $UserName
     * @return \App\models\ATSFlight\LoginData
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

}
