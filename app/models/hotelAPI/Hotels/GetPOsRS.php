<?php

namespace App\models\hotelAPI\Hotels;

class GetPOsRS
{

    /**
     * @var PO[] $pos
     */
    protected $pos = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PO[]
     */
    public function getPos()
    {
      return $this->pos;
    }

    /**
     * @param PO[] $pos
     * @return \App\models\hotelAPI\Hotels\GetPOsRS
     */
    public function setPos(array $pos = null)
    {
      $this->pos = $pos;
      return $this;
    }

}
