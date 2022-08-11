<?php

namespace App\models\hotelAPI\Hotels;

class Airport
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $iataCode
     */
    protected $iataCode = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var Zone[] $zones
     */
    protected $zones = null;

    
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
     * @return \App\models\hotelAPI\Hotels\Airport
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getIataCode()
    {
      return $this->iataCode;
    }

    /**
     * @param string $iataCode
     * @return \App\models\hotelAPI\Hotels\Airport
     */
    public function setIataCode($iataCode)
    {
      $this->iataCode = $iataCode;
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
     * @return \App\models\hotelAPI\Hotels\Airport
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
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
     * @return \App\models\hotelAPI\Hotels\Airport
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return Zone[]
     */
    public function getZones()
    {
      return $this->zones;
    }

    /**
     * @param Zone[] $zones
     * @return \App\models\hotelAPI\Hotels\Airport
     */
    public function setZones(array $zones = null)
    {
      $this->zones = $zones;
      return $this;
    }

}
