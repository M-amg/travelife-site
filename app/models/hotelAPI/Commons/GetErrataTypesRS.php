<?php

namespace App\models\hotelAPI\Commons;

class GetErrataTypesRS
{

    /**
     * @var ErrataTypeRS[] $errataType
     */
    protected $errataType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ErrataTypeRS[]
     */
    public function getErrataType()
    {
      return $this->errataType;
    }

    /**
     * @param ErrataTypeRS[] $errataType
     * @return \App\models\hotelAPI\Commons\GetErrataTypesRS
     */
    public function setErrataType(array $errataType = null)
    {
      $this->errataType = $errataType;
      return $this;
    }

}
