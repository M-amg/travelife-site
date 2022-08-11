<?php

namespace App\models\hotelAPI\Hotels;

class GetPORS
{

    /**
     * @var PO $po
     */
    protected $po = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PO
     */
    public function getPo()
    {
      return $this->po;
    }

    /**
     * @param PO $po
     * @return \App\models\hotelAPI\Hotels\GetPORS
     */
    public function setPo($po)
    {
      $this->po = $po;
      return $this;
    }

}
