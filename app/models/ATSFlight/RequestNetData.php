<?php

namespace App\models\ATSFlight;

class RequestNetData
{

    /**
     * @var boolean $AllowClassMix
     */
    protected $AllowClassMix = null;

    /**
     * @var ArrayOfstring $MatchCodes
     */
    protected $MatchCodes = null;

    /**
     * @var ArrayOfstring $NetFareDatabaseCodes
     */
    protected $NetFareDatabaseCodes = null;

    /**
     * @var int $NumberOfFares
     */
    protected $NumberOfFares = null;

    /**
     * @var TariffSubTypeEnum $TariffSubType
     */
    protected $TariffSubType = null;

    /**
     * @var TariffTypeEnum $TariffType
     */
    protected $TariffType = null;

    /**
     * @var UserDefinedFieldDetailLevelEnum $UserDefinedFieldDetailLevel
     */
    protected $UserDefinedFieldDetailLevel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getAllowClassMix()
    {
      return $this->AllowClassMix;
    }

    /**
     * @param boolean $AllowClassMix
     * @return \App\models\ATSFlight\RequestNetData
     */
    public function setAllowClassMix($AllowClassMix)
    {
      $this->AllowClassMix = $AllowClassMix;
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
     * @return \App\models\ATSFlight\RequestNetData
     */
    public function setMatchCodes($MatchCodes)
    {
      $this->MatchCodes = $MatchCodes;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getNetFareDatabaseCodes()
    {
      return $this->NetFareDatabaseCodes;
    }

    /**
     * @param ArrayOfstring $NetFareDatabaseCodes
     * @return \App\models\ATSFlight\RequestNetData
     */
    public function setNetFareDatabaseCodes($NetFareDatabaseCodes)
    {
      $this->NetFareDatabaseCodes = $NetFareDatabaseCodes;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfFares()
    {
      return $this->NumberOfFares;
    }

    /**
     * @param int $NumberOfFares
     * @return \App\models\ATSFlight\RequestNetData
     */
    public function setNumberOfFares($NumberOfFares)
    {
      $this->NumberOfFares = $NumberOfFares;
      return $this;
    }

    /**
     * @return TariffSubTypeEnum
     */
    public function getTariffSubType()
    {
      return $this->TariffSubType;
    }

    /**
     * @param TariffSubTypeEnum $TariffSubType
     * @return \App\models\ATSFlight\RequestNetData
     */
    public function setTariffSubType($TariffSubType)
    {
      $this->TariffSubType = $TariffSubType;
      return $this;
    }

    /**
     * @return TariffTypeEnum
     */
    public function getTariffType()
    {
      return $this->TariffType;
    }

    /**
     * @param TariffTypeEnum $TariffType
     * @return \App\models\ATSFlight\RequestNetData
     */
    public function setTariffType($TariffType)
    {
      $this->TariffType = $TariffType;
      return $this;
    }

    /**
     * @return UserDefinedFieldDetailLevelEnum
     */
    public function getUserDefinedFieldDetailLevel()
    {
      return $this->UserDefinedFieldDetailLevel;
    }

    /**
     * @param UserDefinedFieldDetailLevelEnum $UserDefinedFieldDetailLevel
     * @return \App\models\ATSFlight\RequestNetData
     */
    public function setUserDefinedFieldDetailLevel($UserDefinedFieldDetailLevel)
    {
      $this->UserDefinedFieldDetailLevel = $UserDefinedFieldDetailLevel;
      return $this;
    }

}
