<?php

namespace App\models\hotelAPI\Hotels;

class Zone
{

    /**
     * @var Airport[] $airports
     */
    protected $airports = null;

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
     * @return Airport[]
     */
    public function getAirports()
    {
      return $this->airports;
    }

    /**
     * @param Airport[] $airports
     * @return \App\models\hotelAPI\Hotels\Zone
     */
    public function setAirports(array $airports = null)
    {
      $this->airports = $airports;
      return $this;
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
     * @return \App\models\hotelAPI\Hotels\Zone
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
     * @return \App\models\hotelAPI\Hotels\Zone
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
     * @return \App\models\hotelAPI\Hotels\Zone
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
