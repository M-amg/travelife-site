<?php

namespace App\models\hotelAPI\Commons;

class getErrataTypes
{

    /**
     * @var GetErrataTypesRQ $GetErrataTypesRQ_1
     */
    protected $GetErrataTypesRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetErrataTypesRQ
     */
    public function getGetErrataTypesRQ_1()
    {
      return $this->GetErrataTypesRQ_1;
    }

    /**
     * @param GetErrataTypesRQ $GetErrataTypesRQ_1
     * @return \App\models\hotelAPI\Commons\getErrataTypes
     */
    public function setGetErrataTypesRQ_1($GetErrataTypesRQ_1)
    {
      $this->GetErrataTypesRQ_1 = $GetErrataTypesRQ_1;
      return $this;
    }

}
