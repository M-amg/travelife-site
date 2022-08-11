<?php

namespace App\models\hotelAPI\Hotels;

class confirmExtendsV15Response
{

    /**
     * @var ConfirmExtendsRSV15 $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ConfirmExtendsRSV15
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param ConfirmExtendsRSV15 $result
     * @return \App\models\hotelAPI\Hotels\confirmExtendsV15Response
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
