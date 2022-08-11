<?php

namespace App\models\hotelAPI\Commons;

class getDistrictsV22Response
{

    /**
     * @var GetDistrictsRSV22 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetDistrictsRSV22
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetDistrictsRSV22 $result
     * @return \App\models\hotelAPI\Commons\getDistrictsV22Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
