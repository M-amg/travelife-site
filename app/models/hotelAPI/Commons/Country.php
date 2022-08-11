<?php

namespace App\models\hotelAPI\Commons;

class Country
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
     * @var State[] $states
     */
    protected $states = null;

    
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
     * @return \App\models\hotelAPI\Commons\Country
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
     * @return \App\models\hotelAPI\Commons\Country
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return State[]
     */
    public function getStates()
    {
      return $this->states;
    }

    /**
     * @param State[] $states
     * @return \App\models\hotelAPI\Commons\Country
     */
    public function setStates(array $states = null)
    {
      $this->states = $states;
      return $this;
    }

}
