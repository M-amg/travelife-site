<?php

namespace App\models\ATSFlight;

class ManualCalculationData
{

    /**
     * @var int $NumberOfAdults
     */
    protected $NumberOfAdults = null;

    /**
     * @var int $NumberOfChildren
     */
    protected $NumberOfChildren = null;

    /**
     * @var int $NumberOfInfants
     */
    protected $NumberOfInfants = null;

    /**
     * @var float $Surcharge
     */
    protected $Surcharge = null;

    /**
     * @var CalcSurchargeType $SurchargeType
     */
    protected $SurchargeType = null;

    /**
     * @var CalcSurchargeValueType $SurchargeValueType
     */
    protected $SurchargeValueType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getNumberOfAdults()
    {
      return $this->NumberOfAdults;
    }

    /**
     * @param int $NumberOfAdults
     * @return \App\models\ATSFlight\ManualCalculationData
     */
    public function setNumberOfAdults($NumberOfAdults)
    {
      $this->NumberOfAdults = $NumberOfAdults;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfChildren()
    {
      return $this->NumberOfChildren;
    }

    /**
     * @param int $NumberOfChildren
     * @return \App\models\ATSFlight\ManualCalculationData
     */
    public function setNumberOfChildren($NumberOfChildren)
    {
      $this->NumberOfChildren = $NumberOfChildren;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfInfants()
    {
      return $this->NumberOfInfants;
    }

    /**
     * @param int $NumberOfInfants
     * @return \App\models\ATSFlight\ManualCalculationData
     */
    public function setNumberOfInfants($NumberOfInfants)
    {
      $this->NumberOfInfants = $NumberOfInfants;
      return $this;
    }

    /**
     * @return float
     */
    public function getSurcharge()
    {
      return $this->Surcharge;
    }

    /**
     * @param float $Surcharge
     * @return \App\models\ATSFlight\ManualCalculationData
     */
    public function setSurcharge($Surcharge)
    {
      $this->Surcharge = $Surcharge;
      return $this;
    }

    /**
     * @return CalcSurchargeType
     */
    public function getSurchargeType()
    {
      return $this->SurchargeType;
    }

    /**
     * @param CalcSurchargeType $SurchargeType
     * @return \App\models\ATSFlight\ManualCalculationData
     */
    public function setSurchargeType($SurchargeType)
    {
      $this->SurchargeType = $SurchargeType;
      return $this;
    }

    /**
     * @return CalcSurchargeValueType
     */
    public function getSurchargeValueType()
    {
      return $this->SurchargeValueType;
    }

    /**
     * @param CalcSurchargeValueType $SurchargeValueType
     * @return \App\models\ATSFlight\ManualCalculationData
     */
    public function setSurchargeValueType($SurchargeValueType)
    {
      $this->SurchargeValueType = $SurchargeValueType;
      return $this;
    }

}
