<?php

namespace App\models\ATSFlight;

class DisplayResponsePassenger extends ResponsePassengerPrices
{

    /**
     * @var int $CalcType
     */
    protected $CalcType = null;

    /**
     * @var string $CalculationGroup
     */
    protected $CalculationGroup = null;

    /**
     * @var string $CalculationRule
     */
    protected $CalculationRule = null;

    /**
     * @var DisplayResponseETicket $ElectronicTicket
     */
    protected $ElectronicTicket = null;

    /**
     * @var FareSubTypeEnum $FareSubType
     */
    protected $FareSubType = null;

    /**
     * @var string $FareType
     */
    protected $FareType = null;

    /**
     * @var FareTypeData $FareTypeDetails
     */
    protected $FareTypeDetails = null;

    /**
     * @var DisplayResponsePTicket $PaperTicket
     */
    protected $PaperTicket = null;

    /**
     * @var string $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var boolean $PassengerTypeChanged
     */
    protected $PassengerTypeChanged = null;

    /**
     * @var PassengerTypeEnum $PassengerTypeName
     */
    protected $PassengerTypeName = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getCalcType()
    {
      return $this->CalcType;
    }

    /**
     * @param int $CalcType
     * @return \App\models\ATSFlight\DisplayResponsePassenger
     */
    public function setCalcType($CalcType)
    {
      $this->CalcType = $CalcType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCalculationGroup()
    {
      return $this->CalculationGroup;
    }

    /**
     * @param string $CalculationGroup
     * @return \App\models\ATSFlight\DisplayResponsePassenger
     */
    public function setCalculationGroup($CalculationGroup)
    {
      $this->CalculationGroup = $CalculationGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getCalculationRule()
    {
      return $this->CalculationRule;
    }

    /**
     * @param string $CalculationRule
     * @return \App\models\ATSFlight\DisplayResponsePassenger
     */
    public function setCalculationRule($CalculationRule)
    {
      $this->CalculationRule = $CalculationRule;
      return $this;
    }

    /**
     * @return DisplayResponseETicket
     */
    public function getElectronicTicket()
    {
      return $this->ElectronicTicket;
    }

    /**
     * @param DisplayResponseETicket $ElectronicTicket
     * @return \App\models\ATSFlight\DisplayResponsePassenger
     */
    public function setElectronicTicket($ElectronicTicket)
    {
      $this->ElectronicTicket = $ElectronicTicket;
      return $this;
    }

    /**
     * @return FareSubTypeEnum
     */
    public function getFareSubType()
    {
      return $this->FareSubType;
    }

    /**
     * @param FareSubTypeEnum $FareSubType
     * @return \App\models\ATSFlight\DisplayResponsePassenger
     */
    public function setFareSubType($FareSubType)
    {
      $this->FareSubType = $FareSubType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareType()
    {
      return $this->FareType;
    }

    /**
     * @param string $FareType
     * @return \App\models\ATSFlight\DisplayResponsePassenger
     */
    public function setFareType($FareType)
    {
      $this->FareType = $FareType;
      return $this;
    }

    /**
     * @return FareTypeData
     */
    public function getFareTypeDetails()
    {
      return $this->FareTypeDetails;
    }

    /**
     * @param FareTypeData $FareTypeDetails
     * @return \App\models\ATSFlight\DisplayResponsePassenger
     */
    public function setFareTypeDetails($FareTypeDetails)
    {
      $this->FareTypeDetails = $FareTypeDetails;
      return $this;
    }

    /**
     * @return DisplayResponsePTicket
     */
    public function getPaperTicket()
    {
      return $this->PaperTicket;
    }

    /**
     * @param DisplayResponsePTicket $PaperTicket
     * @return \App\models\ATSFlight\DisplayResponsePassenger
     */
    public function setPaperTicket($PaperTicket)
    {
      $this->PaperTicket = $PaperTicket;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param string $PassengerType
     * @return \App\models\ATSFlight\DisplayResponsePassenger
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPassengerTypeChanged()
    {
      return $this->PassengerTypeChanged;
    }

    /**
     * @param boolean $PassengerTypeChanged
     * @return \App\models\ATSFlight\DisplayResponsePassenger
     */
    public function setPassengerTypeChanged($PassengerTypeChanged)
    {
      $this->PassengerTypeChanged = $PassengerTypeChanged;
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
     * @return \App\models\ATSFlight\DisplayResponsePassenger
     */
    public function setPassengerTypeName($PassengerTypeName)
    {
      $this->PassengerTypeName = $PassengerTypeName;
      return $this;
    }

}
