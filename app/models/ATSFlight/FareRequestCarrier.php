<?php

namespace App\models\ATSFlight;

class FareRequestCarrier
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var boolean $Exclude
     */
    protected $Exclude = null;

    /**
     * @var FareTypeEnum $FareType
     */
    protected $FareType = null;

    /**
     * @var int $GDSSettingID
     */
    protected $GDSSettingID = null;

    /**
     * @param FareTypeEnum $FareType
     */
    public function __construct($FareType)
    {
      $this->FareType = $FareType;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \App\models\ATSFlight\FareRequestCarrier
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExclude()
    {
      return $this->Exclude;
    }

    /**
     * @param boolean $Exclude
     * @return \App\models\ATSFlight\FareRequestCarrier
     */
    public function setExclude($Exclude)
    {
      $this->Exclude = $Exclude;
      return $this;
    }

    /**
     * @return FareTypeEnum
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param FareTypeEnum $FareType
     * @return \App\models\ATSFlight\FareRequestCarrier
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return int
     */
    public function getGDSSettingID()
    {
      return $this->GDSSettingID;
    }

    /**
     * @param int $GDSSettingID
     * @return \App\models\ATSFlight\FareRequestCarrier
     */
    public function setGDSSettingID($GDSSettingID)
    {
      $this->GDSSettingID = $GDSSettingID;
      return $this;
    }

}
