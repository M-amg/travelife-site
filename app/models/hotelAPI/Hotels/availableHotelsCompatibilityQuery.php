<?php

namespace App\models\hotelAPI\Hotels;

class availableHotelsCompatibilityQuery
{

    /**
     * @var AvailableHotelsCompatibilityQueryRQ $AvailableHotelsCompatibilityQueryRQ_1
     */
    protected $AvailableHotelsCompatibilityQueryRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AvailableHotelsCompatibilityQueryRQ
     */
    public function getAvailableHotelsCompatibilityQueryRQ_1()
    {
      return $this->AvailableHotelsCompatibilityQueryRQ_1;
    }

    /**
     * @param AvailableHotelsCompatibilityQueryRQ $AvailableHotelsCompatibilityQueryRQ_1
     * @return \App\models\hotelAPI\Hotels\availableHotelsCompatibilityQuery
     */
    public function setAvailableHotelsCompatibilityQueryRQ_1($AvailableHotelsCompatibilityQueryRQ_1)
    {
      $this->AvailableHotelsCompatibilityQueryRQ_1 = $AvailableHotelsCompatibilityQueryRQ_1;
      return $this;
    }

}
