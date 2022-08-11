<?php

namespace App\models\ATSFlight;

class UserPccData
{

    /**
     * @var string $AccessPoint
     */
    protected $AccessPoint = null;

    /**
     * @var string $GDSName
     */
    protected $GDSName = null;

    /**
     * @var boolean $IsDefault
     */
    protected $IsDefault = null;

    /**
     * @var string $OrganisationID
     */
    protected $OrganisationID = null;

    /**
     * @var string $PCC
     */
    protected $PCC = null;

    /**
     * @var string $PCCUser
     */
    protected $PCCUser = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var ArrayOfUserPCCQueue $Queues
     */
    protected $Queues = null;

    /**
     * @var string $ReferenceID
     */
    protected $ReferenceID = null;

    /**
     * @var string $TerminalCountry
     */
    protected $TerminalCountry = null;

    /**
     * @var ForceSourceTypeEnum $UserSourceType
     */
    protected $UserSourceType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAccessPoint()
    {
      return $this->AccessPoint;
    }

    /**
     * @param string $AccessPoint
     * @return \App\models\ATSFlight\UserPccData
     */
    public function setAccessPoint($AccessPoint)
    {
      $this->AccessPoint = $AccessPoint;
      return $this;
    }

    /**
     * @return string
     */
    public function getGDSName()
    {
      return $this->GDSName;
    }

    /**
     * @param string $GDSName
     * @return \App\models\ATSFlight\UserPccData
     */
    public function setGDSName($GDSName)
    {
      $this->GDSName = $GDSName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsDefault()
    {
      return $this->IsDefault;
    }

    /**
     * @param boolean $IsDefault
     * @return \App\models\ATSFlight\UserPccData
     */
    public function setIsDefault($IsDefault)
    {
      $this->IsDefault = $IsDefault;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrganisationID()
    {
      return $this->OrganisationID;
    }

    /**
     * @param string $OrganisationID
     * @return \App\models\ATSFlight\UserPccData
     */
    public function setOrganisationID($OrganisationID)
    {
      $this->OrganisationID = $OrganisationID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPCC()
    {
      return $this->PCC;
    }

    /**
     * @param string $PCC
     * @return \App\models\ATSFlight\UserPccData
     */
    public function setPCC($PCC)
    {
      $this->PCC = $PCC;
      return $this;
    }

    /**
     * @return string
     */
    public function getPCCUser()
    {
      return $this->PCCUser;
    }

    /**
     * @param string $PCCUser
     * @return \App\models\ATSFlight\UserPccData
     */
    public function setPCCUser($PCCUser)
    {
      $this->PCCUser = $PCCUser;
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
     * @return \App\models\ATSFlight\UserPccData
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return ArrayOfUserPCCQueue
     */
    public function getQueues()
    {
      return $this->Queues;
    }

    /**
     * @param ArrayOfUserPCCQueue $Queues
     * @return \App\models\ATSFlight\UserPccData
     */
    public function setQueues($Queues)
    {
      $this->Queues = $Queues;
      return $this;
    }

    /**
     * @return string
     */
    public function getReferenceID()
    {
      return $this->ReferenceID;
    }

    /**
     * @param string $ReferenceID
     * @return \App\models\ATSFlight\UserPccData
     */
    public function setReferenceID($ReferenceID)
    {
      $this->ReferenceID = $ReferenceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerminalCountry()
    {
      return $this->TerminalCountry;
    }

    /**
     * @param string $TerminalCountry
     * @return \App\models\ATSFlight\UserPccData
     */
    public function setTerminalCountry($TerminalCountry)
    {
      $this->TerminalCountry = $TerminalCountry;
      return $this;
    }

    /**
     * @return ForceSourceTypeEnum
     */
    public function getUserSourceType()
    {
      return $this->UserSourceType;
    }

    /**
     * @param ForceSourceTypeEnum $UserSourceType
     * @return \App\models\ATSFlight\UserPccData
     */
    public function setUserSourceType($UserSourceType)
    {
      $this->UserSourceType = $UserSourceType;
      return $this;
    }

}
