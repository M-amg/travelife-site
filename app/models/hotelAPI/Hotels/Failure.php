<?php

namespace App\models\hotelAPI\Hotels;

class Failure
{

    /**
     * @var string $code
     */
    protected $code = null;

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
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \App\models\hotelAPI\Hotels\Failure
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
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
     * @return \App\models\hotelAPI\Hotels\Failure
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

}
