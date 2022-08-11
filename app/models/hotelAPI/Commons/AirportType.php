<?php

namespace App\models\hotelAPI\Commons;

class AirportType
{

    /**
     * @var string $type
     */
    protected $type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \App\models\hotelAPI\Commons\AirportType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
