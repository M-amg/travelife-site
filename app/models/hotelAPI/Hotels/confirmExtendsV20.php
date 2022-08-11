<?php

namespace App\models\hotelAPI\Hotels;

class confirmExtendsV20
{

    /**
     * @var ConfirmRQV20 $ConfirmRQV20_1
     */
    protected $ConfirmRQV20_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmRQV20
     */
    public function getConfirmRQV20_1()
    {
      return $this->ConfirmRQV20_1;
    }

    /**
     * @param ConfirmRQV20 $ConfirmRQV20_1
     * @return \App\models\hotelAPI\Hotels\confirmExtendsV20
     */
    public function setConfirmRQV20_1($ConfirmRQV20_1)
    {
      $this->ConfirmRQV20_1 = $ConfirmRQV20_1;
      return $this;
    }

}
