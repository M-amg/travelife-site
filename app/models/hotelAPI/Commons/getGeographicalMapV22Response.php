<?php

namespace App\models\hotelAPI\Commons;

class getGeographicalMapV22Response
{

    /**
     * @var GetGeographicalMapRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetGeographicalMapRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetGeographicalMapRSV22 $result
     * @return \App\models\hotelAPI\Commons\getGeographicalMapV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
