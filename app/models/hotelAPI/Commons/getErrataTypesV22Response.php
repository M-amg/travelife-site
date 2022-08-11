<?php

namespace App\models\hotelAPI\Commons;

class getErrataTypesV22Response
{

    /**
     * @var GetErrataTypesRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetErrataTypesRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetErrataTypesRSV22 $result
     * @return \App\models\hotelAPI\Commons\getErrataTypesV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
