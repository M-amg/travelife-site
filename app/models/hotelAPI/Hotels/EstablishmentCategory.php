<?php

namespace App\models\hotelAPI\Hotels;

class EstablishmentCategory
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $group
     */
    protected $group = null;

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
     * @return \App\models\hotelAPI\Hotels\EstablishmentCategory
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroup()
    {
      return $this->group;
    }

    /**
     * @param string $group
     * @return \App\models\hotelAPI\Hotels\EstablishmentCategory
     */
    public function setGroup($group)
    {
      $this->group = $group;
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentCategory
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
