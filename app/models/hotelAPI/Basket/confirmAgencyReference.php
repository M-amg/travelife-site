<?php

namespace App\models\hotelAPI\Basket;

class confirmAgencyReference
{

    /**
     * @var ConfirmRQAR $ConfirmRQAR_1
     */
    protected $ConfirmRQAR_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmRQAR
     */
    public function getConfirmRQAR_1()
    {
      return $this->ConfirmRQAR_1;
    }

    /**
     * @param ConfirmRQAR $ConfirmRQAR_1
     * @return \App\models\hotelAPI\Basket\confirmAgencyReference
     */
    public function setConfirmRQAR_1($ConfirmRQAR_1)
    {
      $this->ConfirmRQAR_1 = $ConfirmRQAR_1;
      return $this;
    }

}
