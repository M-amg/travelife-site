<?php

namespace App\models\ATSFlight;

class PercentageConfig
{

    /**
     * @var int $CalcGroupNo
     */
    protected $CalcGroupNo = null;

    /**
     * @var string $ClientLink
     */
    protected $ClientLink = null;

    /**
     * @var string $DatabaseCode
     */
    protected $DatabaseCode = null;

    /**
     * @var ArrayOfstring $MatchCodes
     */
    protected $MatchCodes = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCalcGroupNo()
    {
      return $this->CalcGroupNo;
    }

    /**
     * @param int $CalcGroupNo
     * @return \App\models\ATSFlight\PercentageConfig
     */
    public function setCalcGroupNo($CalcGroupNo)
    {
      $this->CalcGroupNo = $CalcGroupNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientLink()
    {
      return $this->ClientLink;
    }

    /**
     * @param string $ClientLink
     * @return \App\models\ATSFlight\PercentageConfig
     */
    public function setClientLink($ClientLink)
    {
      $this->ClientLink = $ClientLink;
      return $this;
    }

    /**
     * @return string
     */
    public function getDatabaseCode()
    {
      return $this->DatabaseCode;
    }

    /**
     * @param string $DatabaseCode
     * @return \App\models\ATSFlight\PercentageConfig
     */
    public function setDatabaseCode($DatabaseCode)
    {
      $this->DatabaseCode = $DatabaseCode;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getMatchCodes()
    {
      return $this->MatchCodes;
    }

    /**
     * @param ArrayOfstring $MatchCodes
     * @return \App\models\ATSFlight\PercentageConfig
     */
    public function setMatchCodes($MatchCodes)
    {
      $this->MatchCodes = $MatchCodes;
      return $this;
    }

}
