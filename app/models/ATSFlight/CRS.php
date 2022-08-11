<?php

namespace App\models\ATSFlight;

class CRS
{

    /**
     * @var GDSEnum $CRSName
     */
    protected $CRSName = null;

    /**
     * @var string $GDS
     */
    protected $GDS = null;

    /**
     * @var string $GUID
     */
    protected $GUID = null;

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
     * @var string $User
     */
    protected $User = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\CRS
     */
    public function setCRSName($CRSName)
    {
      $this->CRSName = $CRSName;
      return $this;
    }

    /**
     * @return string
     */
    public function getGDS()
    {
      return $this->GDS;
    }

    /**
     * @param string $GDS
     * @return \App\models\ATSFlight\CRS
     */
    public function setGDS($GDS)
    {
      $this->GDS = $GDS;
      return $this;
    }

    /**
     * @return string
     */
    public function getGUID()
    {
      return $this->GUID;
    }

    /**
     * @param string $GUID
     * @return \App\models\ATSFlight\CRS
     */
    public function setGUID($GUID)
    {
      $this->GUID = $GUID;
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
     * @return \App\models\ATSFlight\CRS
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
     * @return \App\models\ATSFlight\CRS
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
     * @return \App\models\ATSFlight\CRS
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
     * @return \App\models\ATSFlight\CRS
     */
    public function setTerminalPCC($TerminalPCC)
    {
      $this->TerminalPCC = $TerminalPCC;
      return $this;
    }

    /**
     * @return string
     */
    public function getUser()
    {
      return $this->User;
    }

    /**
     * @param string $User
     * @return \App\models\ATSFlight\CRS
     */
    public function setUser($User)
    {
      $this->User = $User;
      return $this;
    }

}
