<?php

namespace App\models\ATSFlight;

class RequestFareTypeFareBase
{

    /**
     * @var string $FareBase
     */
    protected $FareBase = null;

    /**
     * @var GDSFareTypeEnum $GDSFareType
     */
    protected $GDSFareType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFareBase()
    {
      return $this->FareBase;
    }

    /**
     * @param string $FareBase
     * @return \App\models\ATSFlight\RequestFareTypeFareBase
     */
    public function setFareBase($FareBase)
    {
      $this->FareBase = $FareBase;
      return $this;
    }

    /**
     * @return GDSFareTypeEnum
     */
    public function getGDSFareType()
    {
      return $this->GDSFareType;
    }

    /**
     * @param GDSFareTypeEnum $GDSFareType
     * @return \App\models\ATSFlight\RequestFareTypeFareBase
     */
    public function setGDSFareType($GDSFareType)
    {
      $this->GDSFareType = $GDSFareType;
      return $this;
    }

}
