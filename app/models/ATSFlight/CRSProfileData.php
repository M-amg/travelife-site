<?php

namespace App\models\ATSFlight;

class CRSProfileData
{

    /**
     * @var string $Branch
     */
    protected $Branch = null;

    /**
     * @var string $BranchGroup
     */
    protected $BranchGroup = null;

    /**
     * @var GDSEnum $CRSName
     */
    protected $CRSName = null;

    /**
     * @var boolean $EnableBranchAccess
     */
    protected $EnableBranchAccess = null;

    /**
     * @var string $Macroheader
     */
    protected $Macroheader = null;

    /**
     * @var string $Phone
     */
    protected $Phone = null;

    /**
     * @var string $ProfileGuid
     */
    protected $ProfileGuid = null;

    /**
     * @var string $ProfileName
     */
    protected $ProfileName = null;

    /**
     * @var QSurchargeEnum $QSurcharge
     */
    protected $QSurcharge = null;

    /**
     * @var ArrayOfQueueData $Queues
     */
    protected $Queues = null;

    /**
     * @var string $ReceivedFrom
     */
    protected $ReceivedFrom = null;

    /**
     * @var string $SpecialGDSName
     */
    protected $SpecialGDSName = null;

    /**
     * @var string $TerminalCountry
     */
    protected $TerminalCountry = null;

    /**
     * @var string $TerminalPCC
     */
    protected $TerminalPCC = null;

    /**
     * @var string $TicketPCC
     */
    protected $TicketPCC = null;

    /**
     * @var string $UserName
     */
    protected $UserName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBranch()
    {
      return $this->Branch;
    }

    /**
     * @param string $Branch
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setBranch($Branch)
    {
      $this->Branch = $Branch;
      return $this;
    }

    /**
     * @return string
     */
    public function getBranchGroup()
    {
      return $this->BranchGroup;
    }

    /**
     * @param string $BranchGroup
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setBranchGroup($BranchGroup)
    {
      $this->BranchGroup = $BranchGroup;
      return $this;
    }

    /**
     * @return GDSEnum
     */
    public function getCRSName()
    {
      return $this->CRSName;
    }

    /**
     * @param GDSEnum $CRSName
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setCRSName($CRSName)
    {
      $this->CRSName = $CRSName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableBranchAccess()
    {
      return $this->EnableBranchAccess;
    }

    /**
     * @param boolean $EnableBranchAccess
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setEnableBranchAccess($EnableBranchAccess)
    {
      $this->EnableBranchAccess = $EnableBranchAccess;
      return $this;
    }

    /**
     * @return string
     */
    public function getMacroheader()
    {
      return $this->Macroheader;
    }

    /**
     * @param string $Macroheader
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setMacroheader($Macroheader)
    {
      $this->Macroheader = $Macroheader;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setPhone($Phone)
    {
      $this->Phone = $Phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileGuid()
    {
      return $this->ProfileGuid;
    }

    /**
     * @param string $ProfileGuid
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setProfileGuid($ProfileGuid)
    {
      $this->ProfileGuid = $ProfileGuid;
      return $this;
    }

    /**
     * @return string
     */
    public function getProfileName()
    {
      return $this->ProfileName;
    }

    /**
     * @param string $ProfileName
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setProfileName($ProfileName)
    {
      $this->ProfileName = $ProfileName;
      return $this;
    }

    /**
     * @return QSurchargeEnum
     */
    public function getQSurcharge()
    {
      return $this->QSurcharge;
    }

    /**
     * @param QSurchargeEnum $QSurcharge
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setQSurcharge($QSurcharge)
    {
      $this->QSurcharge = $QSurcharge;
      return $this;
    }

    /**
     * @return ArrayOfQueueData
     */
    public function getQueues()
    {
      return $this->Queues;
    }

    /**
     * @param ArrayOfQueueData $Queues
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setQueues($Queues)
    {
      $this->Queues = $Queues;
      return $this;
    }

    /**
     * @return string
     */
    public function getReceivedFrom()
    {
      return $this->ReceivedFrom;
    }

    /**
     * @param string $ReceivedFrom
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setReceivedFrom($ReceivedFrom)
    {
      $this->ReceivedFrom = $ReceivedFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialGDSName()
    {
      return $this->SpecialGDSName;
    }

    /**
     * @param string $SpecialGDSName
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setSpecialGDSName($SpecialGDSName)
    {
      $this->SpecialGDSName = $SpecialGDSName;
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
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setTerminalCountry($TerminalCountry)
    {
      $this->TerminalCountry = $TerminalCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerminalPCC()
    {
      return $this->TerminalPCC;
    }

    /**
     * @param string $TerminalPCC
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setTerminalPCC($TerminalPCC)
    {
      $this->TerminalPCC = $TerminalPCC;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketPCC()
    {
      return $this->TicketPCC;
    }

    /**
     * @param string $TicketPCC
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setTicketPCC($TicketPCC)
    {
      $this->TicketPCC = $TicketPCC;
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
     * @return \App\models\ATSFlight\CRSProfileData
     */
    public function setUserName($UserName)
    {
      $this->UserName = $UserName;
      return $this;
    }

}
