<?php

namespace App\models\hotelAPI\Commons;

class getAreasV22Response
{

    /**
     * @var GetAreasRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetAreasRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetAreasRSV22 $result
     * @return \App\models\hotelAPI\Commons\getAreasV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
