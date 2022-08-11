<?php

namespace App\models\ATSFlight;

class Agent
{

    /**
     * @var string $APIPassword
     */
    protected $APIPassword = null;

    /**
     * @var string $APIUser
     */
    protected $APIUser = null;

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $CompanyID
     */
    protected $CompanyID = null;

    /**
     * @var string $CompanyName
     */
    protected $CompanyName = null;

    /**
     * @var ArrayOfstring $CorporateCodes
     */
    protected $CorporateCodes = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var boolean $IncludePublished
     */
    protected $IncludePublished = null;

    /**
     * @var string $LoginID
     */
    protected $LoginID = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var OptionalPlugInEnum $OptionalPlugIn
     */
    protected $OptionalPlugIn = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAPIPassword()
    {
      return $this->APIPassword;
    }

    /**
     * @param string $APIPassword
     * @return \App\models\ATSFlight\Agent
     */
    public function setAPIPassword($APIPassword)
    {
      $this->APIPassword = $APIPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getAPIUser()
    {
      return $this->APIUser;
    }

    /**
     * @param string $APIUser
     * @return \App\models\ATSFlight\Agent
     */
    public function setAPIUser($APIUser)
    {
      $this->APIUser = $APIUser;
      return $this;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return \App\models\ATSFlight\Agent
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
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
     * @return \App\models\ATSFlight\Agent
     */
    public function setCompanyID($CompanyID)
    {
      $this->CompanyID = $CompanyID;
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
     * @return \App\models\ATSFlight\Agent
     */
    public function setCompanyName($CompanyName)
    {
      $this->CompanyName = $CompanyName;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getCorporateCodes()
    {
      return $this->CorporateCodes;
    }

    /**
     * @param ArrayOfstring $CorporateCodes
     * @return \App\models\ATSFlight\Agent
     */
    public function setCorporateCodes($CorporateCodes)
    {
      $this->CorporateCodes = $CorporateCodes;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \App\models\ATSFlight\Agent
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludePublished()
    {
      return $this->IncludePublished;
    }

    /**
     * @param boolean $IncludePublished
     * @return \App\models\ATSFlight\Agent
     */
    public function setIncludePublished($IncludePublished)
    {
      $this->IncludePublished = $IncludePublished;
      return $this;
    }

    /**
     * @return string
     */
    public function getLoginID()
    {
      return $this->LoginID;
    }

    /**
     * @param string $LoginID
     * @return \App\models\ATSFlight\Agent
     */
    public function setLoginID($LoginID)
    {
      $this->LoginID = $LoginID;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \App\models\ATSFlight\Agent
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return OptionalPlugInEnum
     */
    public function getOptionalPlugIn()
    {
      return $this->OptionalPlugIn;
    }

    /**
     * @param OptionalPlugInEnum $OptionalPlugIn
     * @return \App\models\ATSFlight\Agent
     */
    public function setOptionalPlugIn($OptionalPlugIn)
    {
      $this->OptionalPlugIn = $OptionalPlugIn;
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
     * @return \App\models\ATSFlight\Agent
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

}
