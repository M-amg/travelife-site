<?php

namespace App\models\hotelAPI\Hotels;

class getPO
{

    /**
     * @var GetPORQ $GetPORQ_1
     */
    protected $GetPORQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetPORQ
     */
    public function getGetPORQ_1()
    {
      return $this->GetPORQ_1;
    }

    /**
     * @param GetPORQ $GetPORQ_1
     * @return \App\models\hotelAPI\Hotels\getPO
     */
    public function setGetPORQ_1($GetPORQ_1)
    {
      $this->GetPORQ_1 = $GetPORQ_1;
      return $this;
    }

}
