<?php

namespace App\models\hotelAPI\Commons;

class getSectionsResponse
{

    /**
     * @var GetSectionsRS $result
     */
    protected $result = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetSectionsRS
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param GetSectionsRS $result
     * @return \App\models\hotelAPI\Commons\getSectionsResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
