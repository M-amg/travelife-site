<?php

namespace App\models\ATSFlight;

class CharterAccount
{

    /**
     * @var string $AccountID
     */
    protected $AccountID = null;

    /**
     * @var string $AccountName
     */
    protected $AccountName = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var string $LoginName
     */
    protected $LoginName = null;

    /**
     * @var string $LoginPassword
     */
    protected $LoginPassword = null;

    /**
     * @var string $Source
     */
    protected $Source = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAccountID()
    {
      return $this->AccountID;
    }

    /**
     * @param string $AccountID
     * @return \App\models\ATSFlight\CharterAccount
     */
    public function setAccountID($AccountID)
    {
      $this->AccountID = $AccountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
      return $this->AccountName;
    }

    /**
     * @param string $AccountName
     * @return \App\models\ATSFlight\CharterAccount
     */
    public function setAccountName($AccountName)
    {
      $this->AccountName = $AccountName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return \App\models\ATSFlight\CharterAccount
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLoginName()
    {
      return $this->LoginName;
    }

    /**
     * @param string $LoginName
     * @return \App\models\ATSFlight\CharterAccount
     */
    public function setLoginName($LoginName)
    {
      $this->LoginName = $LoginName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLoginPassword()
    {
      return $this->LoginPassword;
    }

    /**
     * @param string $LoginPassword
     * @return \App\models\ATSFlight\CharterAccount
     */
    public function setLoginPassword($LoginPassword)
    {
      $this->LoginPassword = $LoginPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param string $Source
     * @return \App\models\ATSFlight\CharterAccount
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
