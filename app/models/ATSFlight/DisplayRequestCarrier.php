<?php

namespace App\models\ATSFlight;

class DisplayRequestCarrier
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
     * @return \App\models\ATSFlight\DisplayRequestCarrier
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
     * @return \App\models\ATSFlight\DisplayRequestCarrier
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
     * @return \App\models\ATSFlight\DisplayRequestCarrier
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

}
