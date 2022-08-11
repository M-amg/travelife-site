<?php

namespace App\models\ATSFlight;

class SeatMapAvailabilityData
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    
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
     * @return \App\models\ATSFlight\SeatMapAvailabilityData
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \App\models\ATSFlight\SeatMapAvailabilityData
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
