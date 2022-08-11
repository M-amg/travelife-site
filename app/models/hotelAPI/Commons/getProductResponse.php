<?php

namespace App\models\hotelAPI\Commons;

class getProductResponse
{

    /**
     * @var GetProductRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetProductRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetProductRS $result
     * @return \App\models\hotelAPI\Commons\getProductResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
