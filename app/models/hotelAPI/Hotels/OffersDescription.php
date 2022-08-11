<?php

namespace App\models\hotelAPI\Hotels;

class OffersDescription
{

    /**
     * @var string $description
     */
    protected $description = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \App\models\hotelAPI\Hotels\OffersDescription
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
