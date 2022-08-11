<?php

namespace App\models\hotelAPI\Hotels;

class confirmExtendsV21
{

    /**
     * @var ConfirmRQV21 $ConfirmRQV21_1
     */
    protected $ConfirmRQV21_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmRQV21
     */
    public function getConfirmRQV21_1()
    {
      return $this->ConfirmRQV21_1;
    }

    /**
     * @param ConfirmRQV21 $ConfirmRQV21_1
     * @return \App\models\hotelAPI\Hotels\confirmExtendsV21
     */
    public function setConfirmRQV21_1($ConfirmRQV21_1)
    {
      $this->ConfirmRQV21_1 = $ConfirmRQV21_1;
      return $this;
    }

}
