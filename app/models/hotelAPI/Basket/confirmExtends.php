<?php

namespace App\models\hotelAPI\Basket;

class confirmExtends
{

    /**
     * @var ConfirmRQExtends $ConfirmRQExtends_1
     */
    protected $ConfirmRQExtends_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmRQExtends
     */
    public function getConfirmRQExtends_1()
    {
      return $this->ConfirmRQExtends_1;
    }

    /**
     * @param ConfirmRQExtends $ConfirmRQExtends_1
     * @return \App\models\hotelAPI\Basket\confirmExtends
     */
    public function setConfirmRQExtends_1($ConfirmRQExtends_1)
    {
      $this->ConfirmRQExtends_1 = $ConfirmRQExtends_1;
      return $this;
    }

}
