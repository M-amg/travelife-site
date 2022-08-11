<?php

namespace App\models\ATSFlight;

class ResponsePassengerData
{

    /**
     * @var SharedPrice $AirlineSell
     */
    protected $AirlineSell = null;

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
     * @var \DateTime $DOB
     */
    protected $DOB = null;

    /**
     * @var SharedPrice $EndconsumerBuy
     */
    protected $EndconsumerBuy = null;

    /**
     * @var SharedPrice $EquivalentAirlineSell
     */
    protected $EquivalentAirlineSell = null;

    /**
     * @var SharedPrice $EquivalentEndconsumerBuy
     */
    protected $EquivalentEndconsumerBuy = null;

    /**
     * @var SharedPrice $EquivalentServiceFee
     */
    protected $EquivalentServiceFee = null;

    /**
     * @var SharedPrice $EquivalentTotalTax
     */
    protected $EquivalentTotalTax = null;

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
     * @var boolean $HasServiceFee
     */
    protected $HasServiceFee = null;

    /**
     * @var string $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var PassengerTypeEnum $PassengerTypeName
     */
    protected $PassengerTypeName = null;

    /**
     * @var SharedPrice $ServiceFee
     */
    protected $ServiceFee = null;

    /**
     * @var ArrayOfServicePriceData $ServicePrices
     */
    protected $ServicePrices = null;

    /**
     * @var ArrayOfSurchargeDetail $Surcharges
     */
    protected $Surcharges = null;

    /**
     * @var SharedPrice $TotalTax
     */
    protected $TotalTax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getAirlineSell()
    {
      return $this->AirlineSell;
    }

    /**
     * @param SharedPrice $AirlineSell
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setAirlineSell($AirlineSell)
    {
      $this->AirlineSell = $AirlineSell;
      return $this;
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
     * @return \App\models\ATSFlight\ResponsePassengerData
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
     * @return \App\models\ATSFlight\ResponsePassengerData
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
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setCalculationRule($CalculationRule)
    {
      $this->CalculationRule = $CalculationRule;
      return $this;
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
     * @return \App\models\ATSFlight\ResponsePassengerData
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
     * @return SharedPrice
     */
    public function getEndconsumerBuy()
    {
      return $this->EndconsumerBuy;
    }

    /**
     * @param SharedPrice $EndconsumerBuy
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setEndconsumerBuy($EndconsumerBuy)
    {
      $this->EndconsumerBuy = $EndconsumerBuy;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentAirlineSell()
    {
      return $this->EquivalentAirlineSell;
    }

    /**
     * @param SharedPrice $EquivalentAirlineSell
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setEquivalentAirlineSell($EquivalentAirlineSell)
    {
      $this->EquivalentAirlineSell = $EquivalentAirlineSell;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentEndconsumerBuy()
    {
      return $this->EquivalentEndconsumerBuy;
    }

    /**
     * @param SharedPrice $EquivalentEndconsumerBuy
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setEquivalentEndconsumerBuy($EquivalentEndconsumerBuy)
    {
      $this->EquivalentEndconsumerBuy = $EquivalentEndconsumerBuy;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentServiceFee()
    {
      return $this->EquivalentServiceFee;
    }

    /**
     * @param SharedPrice $EquivalentServiceFee
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setEquivalentServiceFee($EquivalentServiceFee)
    {
      $this->EquivalentServiceFee = $EquivalentServiceFee;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTotalTax()
    {
      return $this->EquivalentTotalTax;
    }

    /**
     * @param SharedPrice $EquivalentTotalTax
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setEquivalentTotalTax($EquivalentTotalTax)
    {
      $this->EquivalentTotalTax = $EquivalentTotalTax;
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
     * @return \App\models\ATSFlight\ResponsePassengerData
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
     * @return \App\models\ATSFlight\ResponsePassengerData
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
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setFareTypeDetails($FareTypeDetails)
    {
      $this->FareTypeDetails = $FareTypeDetails;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasServiceFee()
    {
      return $this->HasServiceFee;
    }

    /**
     * @param boolean $HasServiceFee
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setHasServiceFee($HasServiceFee)
    {
      $this->HasServiceFee = $HasServiceFee;
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
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
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
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setPassengerTypeName($PassengerTypeName)
    {
      $this->PassengerTypeName = $PassengerTypeName;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getServiceFee()
    {
      return $this->ServiceFee;
    }

    /**
     * @param SharedPrice $ServiceFee
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setServiceFee($ServiceFee)
    {
      $this->ServiceFee = $ServiceFee;
      return $this;
    }

    /**
     * @return ArrayOfServicePriceData
     */
    public function getServicePrices()
    {
      return $this->ServicePrices;
    }

    /**
     * @param ArrayOfServicePriceData $ServicePrices
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setServicePrices($ServicePrices)
    {
      $this->ServicePrices = $ServicePrices;
      return $this;
    }

    /**
     * @return ArrayOfSurchargeDetail
     */
    public function getSurcharges()
    {
      return $this->Surcharges;
    }

    /**
     * @param ArrayOfSurchargeDetail $Surcharges
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setSurcharges($Surcharges)
    {
      $this->Surcharges = $Surcharges;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalTax()
    {
      return $this->TotalTax;
    }

    /**
     * @param SharedPrice $TotalTax
     * @return \App\models\ATSFlight\ResponsePassengerData
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

}
