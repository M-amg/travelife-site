<?php

namespace App\models\hotelAPI\Commons;

class getProduct
{

    /**
     * @var GetProductRQ $GetProductRQ_1
     */
    protected $GetProductRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetProductRQ
     */
    public function getGetProductRQ_1()
    {
      return $this->GetProductRQ_1;
    }

    /**
     * @param GetProductRQ $GetProductRQ_1
     * @return \App\models\hotelAPI\Commons\getProduct
     */
    public function setGetProductRQ_1($GetProductRQ_1)
    {
      $this->GetProductRQ_1 = $GetProductRQ_1;
      return $this;
    }

}
