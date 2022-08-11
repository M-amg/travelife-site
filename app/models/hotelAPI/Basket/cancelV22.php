<?php

namespace App\models\hotelAPI\Basket;

class cancelV22
{

    /**
     * @var CancelRQV22 $CancelRQV22_1
     */
    protected $CancelRQV22_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelRQV22
     */
    public function getCancelRQV22_1()
    {
      return $this->CancelRQV22_1;
    }

    /**
     * @param CancelRQV22 $CancelRQV22_1
     * @return \App\models\hotelAPI\Basket\cancelV22
     */
    public function setCancelRQV22_1($CancelRQV22_1)
    {
      $this->CancelRQV22_1 = $CancelRQV22_1;
      return $this;
    }

}
