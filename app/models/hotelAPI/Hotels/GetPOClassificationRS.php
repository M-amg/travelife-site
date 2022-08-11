<?php

namespace App\models\hotelAPI\Hotels;

class GetPOClassificationRS
{

    /**
     * @var POClass[] $poClass
     */
    protected $poClass = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return POClass[]
     */
    public function getPoClass()
    {
      return $this->poClass;
    }

    /**
     * @param POClass[] $poClass
     * @return \App\models\hotelAPI\Hotels\GetPOClassificationRS
     */
    public function setPoClass(array $poClass = null)
    {
      $this->poClass = $poClass;
      return $this;
    }

}
