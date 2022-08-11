<?php

namespace App\models\hotelAPI\Commons;

class Area
{

    /**
     * @var Area[] $areas
     */
    protected $areas = null;

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
     * @return Area[]
     */
    public function getAreas()
    {
      return $this->areas;
    }

    /**
     * @param Area[] $areas
     * @return \App\models\hotelAPI\Commons\Area
     */
    public function setAreas(array $areas = null)
    {
      $this->areas = $areas;
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
     * @return \App\models\hotelAPI\Commons\Area
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
     * @return \App\models\hotelAPI\Commons\Area
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
