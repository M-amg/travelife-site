<?php

namespace App\models\hotelAPI\Hotels;

class confirmExtendedResponse
{

    /**
     * @var ConfirmExtendsRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmExtendsRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ConfirmExtendsRS $result
     * @return \App\models\hotelAPI\Hotels\confirmExtendedResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
