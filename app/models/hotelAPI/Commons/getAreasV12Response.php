<?php

namespace App\models\hotelAPI\Commons;

class getAreasV12Response
{

    /**
     * @var GetAreasRSV12 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetAreasRSV12
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetAreasRSV12 $result
     * @return \App\models\hotelAPI\Commons\getAreasV12Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
