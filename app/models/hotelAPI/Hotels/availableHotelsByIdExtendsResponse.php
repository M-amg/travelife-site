<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsByIdExtendsResponse
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
     * @return \App\models\hotelAPI\Hotels\availableHotelsByIdExtendsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
