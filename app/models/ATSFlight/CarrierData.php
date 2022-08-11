<?php

namespace App\models\ATSFlight;

class CarrierData
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var boolean $Exclude
     */
    protected $Exclude = null;

    
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
     * @return \App\models\ATSFlight\CarrierData
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExclude()
    {
      return $this->Exclude;
    }

    /**
     * @param boolean $Exclude
     * @return \App\models\ATSFlight\CarrierData
     */
    public function setExclude($Exclude)
    {
      $this->Exclude = $Exclude;
      return $this;
    }

}
