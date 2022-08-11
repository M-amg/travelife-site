<?php

namespace App\models\hotelAPI\Commons;

class Continent
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var Country[] $countries
     */
    protected $countries = null;

    /**
     * @var string $name
     */
    protected $name = null;

    
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
     * @return \App\models\hotelAPI\Commons\Continent
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return Country[]
     */
    public function getCountries()
    {
      return $this->countries;
    }

    /**
     * @param Country[] $countries
     * @return \App\models\hotelAPI\Commons\Continent
     */
    public function setCountries(array $countries = null)
    {
      $this->countries = $countries;
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
     * @return \App\models\hotelAPI\Commons\Continent
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
