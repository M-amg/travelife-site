<?php

namespace App\models\hotelAPI\Basket;

class confirmExtendsResponse
{

    /**
     * @var ConfirmRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ConfirmRS $result
     * @return \App\models\hotelAPI\Basket\confirmExtendsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
