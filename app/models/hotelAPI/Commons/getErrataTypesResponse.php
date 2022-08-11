<?php

namespace App\models\hotelAPI\Commons;

class getErrataTypesResponse
{

    /**
     * @var GetErrataTypesRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetErrataTypesRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetErrataTypesRS $result
     * @return \App\models\hotelAPI\Commons\getErrataTypesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
