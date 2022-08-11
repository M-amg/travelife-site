<?php

namespace App\models\hotelAPI\Hotels;

class Supplement
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param int $code
     */
    public function __construct($code)
    {
      $this->code = $code;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param int $code
     * @return \App\models\hotelAPI\Hotels\Supplement
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
     * @return \App\models\hotelAPI\Hotels\Supplement
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
