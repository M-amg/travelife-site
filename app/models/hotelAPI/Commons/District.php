<?php

namespace App\models\hotelAPI\Commons;

class District
{

    /**
     * @var string $cityCode
     */
    protected $cityCode = null;

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
     * @return string
     */
    public function getCityCode()
    {
      return $this->cityCode;
    }

    /**
     * @param string $cityCode
     * @return \App\models\hotelAPI\Commons\District
     */
    public function setCityCode($cityCode)
    {
      $this->cityCode = $cityCode;
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
     * @return \App\models\hotelAPI\Commons\District
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
     * @return \App\models\hotelAPI\Commons\District
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
