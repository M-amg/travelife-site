<?php

namespace App\models\hotelAPI\Basket;

class cancelServiceV22
{

    /**
     * @var CancelServiceRQV22 $CancelServiceRQV22_1
     */
    protected $CancelServiceRQV22_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CancelServiceRQV22
     */
    public function getCancelServiceRQV22_1()
    {
      return $this->CancelServiceRQV22_1;
    }

    /**
     * @param CancelServiceRQV22 $CancelServiceRQV22_1
     * @return \App\models\hotelAPI\Basket\cancelServiceV22
     */
    public function setCancelServiceRQV22_1($CancelServiceRQV22_1)
    {
      $this->CancelServiceRQV22_1 = $CancelServiceRQV22_1;
      return $this;
    }

}
