<?php

namespace App\models\hotelAPI\Basket;

class getDoc
{

    /**
     * @var GetDocRQ $GetDocRQ_1
     */
    protected $GetDocRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetDocRQ
     */
    public function getGetDocRQ_1()
    {
      return $this->GetDocRQ_1;
    }

    /**
     * @param GetDocRQ $GetDocRQ_1
     * @return \App\models\hotelAPI\Basket\getDoc
     */
    public function setGetDocRQ_1($GetDocRQ_1)
    {
      $this->GetDocRQ_1 = $GetDocRQ_1;
      return $this;
    }

}
