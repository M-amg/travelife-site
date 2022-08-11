<?php

namespace App\models\hotelAPI\Commons;

class getAreasResponse
{

    /**
     * @var GetAreasRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetAreasRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetAreasRS $result
     * @return \App\models\hotelAPI\Commons\getAreasResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
