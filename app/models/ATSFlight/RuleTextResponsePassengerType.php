<?php

namespace App\models\ATSFlight;

class RuleTextResponsePassengerType
{

    /**
     * @var string $PassengerTypeCode
     */
    protected $PassengerTypeCode = null;

    /**
     * @var PassengerTypeEnum $PassengerTypeName
     */
    protected $PassengerTypeName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getPassengerTypeCode()
    {
      return $this->PassengerTypeCode;
    }

    /**
     * @param string $PassengerTypeCode
     * @return \App\models\ATSFlight\RuleTextResponsePassengerType
     */
    public function setPassengerTypeCode($PassengerTypeCode)
    {
      $this->PassengerTypeCode = $PassengerTypeCode;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getPassengerTypeName()
    {
      return $this->PassengerTypeName;
    }

    /**
     * @param PassengerTypeEnum $PassengerTypeName
     * @return \App\models\ATSFlight\RuleTextResponsePassengerType
     */
    public function setPassengerTypeName($PassengerTypeName)
    {
      $this->PassengerTypeName = $PassengerTypeName;
      return $this;
    }

}
