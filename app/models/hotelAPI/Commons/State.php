<?php

namespace App\models\hotelAPI\Commons;

class State
{

    /**
     * @var City[] $cities
     */
    protected $cities = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $name
     */
    protected $name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return City[]
     */
    public function getCities()
    {
      return $this->cities;
    }

    /**
     * @param City[] $cities
     * @return \App\models\hotelAPI\Commons\State
     */
    public function setCities(array $cities = null)
    {
      $this->cities = $cities;
      return $this;
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
     * @return \App\models\hotelAPI\Commons\State
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \App\models\hotelAPI\Commons\State
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
