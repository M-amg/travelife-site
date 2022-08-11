<?php

namespace App\models\ATSFlight;

class RequestPassengerData
{

    /**
     * @var \DateTime $DOB
     */
    protected $DOB = null;

    /**
     * @var boolean $ForcePassengerType
     */
    protected $ForcePassengerType = null;

    /**
     * @var string $FreePassengerType
     */
    protected $FreePassengerType = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    /**
     * @var PassengerTypeEnum $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDOB()
    {
      if ($this->DOB == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DOB);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DOB
     * @return \App\models\ATSFlight\RequestPassengerData
     */
    public function setDOB(\DateTime $DOB = null)
    {
      if ($DOB == null) {
       $this->DOB = null;
      } else {
        $this->DOB = $DOB->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getForcePassengerType()
    {
      return $this->ForcePassengerType;
    }

    /**
     * @param boolean $ForcePassengerType
     * @return \App\models\ATSFlight\RequestPassengerData
     */
    public function setForcePassengerType($ForcePassengerType)
    {
      $this->ForcePassengerType = $ForcePassengerType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreePassengerType()
    {
      return $this->FreePassengerType;
    }

    /**
     * @param string $FreePassengerType
     * @return \App\models\ATSFlight\RequestPassengerData
     */
    public function setFreePassengerType($FreePassengerType)
    {
      $this->FreePassengerType = $FreePassengerType;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \App\models\ATSFlight\RequestPassengerData
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param PassengerTypeEnum $Type
     * @return \App\models\ATSFlight\RequestPassengerData
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
