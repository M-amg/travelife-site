<?php

namespace App\models\hotelAPI\Hotels;

class getRoomTypesResponse
{

    /**
     * @var GetRoomTypesRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetRoomTypesRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetRoomTypesRS $result
     * @return \App\models\hotelAPI\Hotels\getRoomTypesResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
