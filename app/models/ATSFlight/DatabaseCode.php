<?php

namespace App\models\ATSFlight;

class DatabaseCode
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var DatabaseCodeType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \App\models\ATSFlight\DatabaseCode
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return DatabaseCodeType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param DatabaseCodeType $Type
     * @return \App\models\ATSFlight\DatabaseCode
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
