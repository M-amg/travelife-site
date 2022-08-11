<?php

namespace App\models\hotelAPI\Hotels;

class PropertiesGroup
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var Property[] $properties
     */
    protected $properties = null;

    
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
     * @return \App\models\hotelAPI\Hotels\PropertiesGroup
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
     * @return \App\models\hotelAPI\Hotels\PropertiesGroup
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return Property[]
     */
    public function getProperties()
    {
      return $this->properties;
    }

    /**
     * @param Property[] $properties
     * @return \App\models\hotelAPI\Hotels\PropertiesGroup
     */
    public function setProperties(array $properties = null)
    {
      $this->properties = $properties;
      return $this;
    }

}
