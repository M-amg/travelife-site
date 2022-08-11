<?php

namespace App\models\hotelAPI\Basket;

class CarDetails
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $sample
     */
    protected $sample = null;

    
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
     * @return \App\models\hotelAPI\Basket\CarDetails
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
     * @return \App\models\hotelAPI\Basket\CarDetails
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getSample()
    {
      return $this->sample;
    }

    /**
     * @param string $sample
     * @return \App\models\hotelAPI\Basket\CarDetails
     */
    public function setSample($sample)
    {
      $this->sample = $sample;
      return $this;
    }

}
