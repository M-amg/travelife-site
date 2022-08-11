<?php

namespace App\models\ATSFlight;

class RuleResponseCarrier
{

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var CarrierTypeEnum $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBookingClass()
    {
      return $this->BookingClass;
    }

    /**
     * @param string $BookingClass
     * @return \App\models\ATSFlight\RuleResponseCarrier
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
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
     * @return \App\models\ATSFlight\RuleResponseCarrier
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \App\models\ATSFlight\RuleResponseCarrier
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return CarrierTypeEnum
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param CarrierTypeEnum $Type
     * @return \App\models\ATSFlight\RuleResponseCarrier
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
