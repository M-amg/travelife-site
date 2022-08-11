<?php

namespace App\models\ATSFlight;

class BackOfficeData
{

    /**
     * @var string $AccountNumber
     */
    protected $AccountNumber = null;

    /**
     * @var string $ClientID
     */
    protected $ClientID = null;

    /**
     * @var string $CompanyID
     */
    protected $CompanyID = null;

    /**
     * @var string $CostNumber
     */
    protected $CostNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
      return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     * @return \App\models\ATSFlight\BackOfficeData
     */
    public function setAccountNumber($AccountNumber)
    {
      $this->AccountNumber = $AccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientID()
    {
      return $this->ClientID;
    }

    /**
     * @param string $ClientID
     * @return \App\models\ATSFlight\BackOfficeData
     */
    public function setClientID($ClientID)
    {
      $this->ClientID = $ClientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyID()
    {
      return $this->CompanyID;
    }

    /**
     * @param string $CompanyID
     * @return \App\models\ATSFlight\BackOfficeData
     */
    public function setCompanyID($CompanyID)
    {
      $this->CompanyID = $CompanyID;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostNumber()
    {
      return $this->CostNumber;
    }

    /**
     * @param string $CostNumber
     * @return \App\models\ATSFlight\BackOfficeData
     */
    public function setCostNumber($CostNumber)
    {
      $this->CostNumber = $CostNumber;
      return $this;
    }

}
