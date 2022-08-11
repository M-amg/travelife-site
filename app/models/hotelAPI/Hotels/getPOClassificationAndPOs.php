<?php

namespace App\models\hotelAPI\Hotels;

class getPOClassificationAndPOs
{

    /**
     * @var GetPOClassificationRQ $GetPOClassificationRQ_1
     */
    protected $GetPOClassificationRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetPOClassificationRQ
     */
    public function getGetPOClassificationRQ_1()
    {
      return $this->GetPOClassificationRQ_1;
    }

    /**
     * @param GetPOClassificationRQ $GetPOClassificationRQ_1
     * @return \App\models\hotelAPI\Hotels\getPOClassificationAndPOs
     */
    public function setGetPOClassificationRQ_1($GetPOClassificationRQ_1)
    {
      $this->GetPOClassificationRQ_1 = $GetPOClassificationRQ_1;
      return $this;
    }

}
