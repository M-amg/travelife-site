<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByCityExtendsResponse
{

    /**
     * @var AvailabilityExtendsRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailabilityExtendsRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param AvailabilityExtendsRS $result
     * @return \App\models\hotelAPI\Hotels\availableHotelsByCityExtendsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
