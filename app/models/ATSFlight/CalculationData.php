<?php

namespace App\models\ATSFlight;

class CalculationData
{

    /**
     * @var CalculationRequestData $BranchCalc
     */
    protected $BranchCalc = null;

    /**
     * @var CalculationRequestData $GlobalCalc
     */
    protected $GlobalCalc = null;

    /**
     * @var ManualCalculationData $ManualCalc
     */
    protected $ManualCalc = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CalculationRequestData
     */
    public function getBranchCalc()
    {
      return $this->BranchCalc;
    }

    /**
     * @param CalculationRequestData $BranchCalc
     * @return \App\models\ATSFlight\CalculationData
     */
    public function setBranchCalc($BranchCalc)
    {
      $this->BranchCalc = $BranchCalc;
      return $this;
    }

    /**
     * @return CalculationRequestData
     */
    public function getGlobalCalc()
    {
      return $this->GlobalCalc;
    }

    /**
     * @param CalculationRequestData $GlobalCalc
     * @return \App\models\ATSFlight\CalculationData
     */
    public function setGlobalCalc($GlobalCalc)
    {
      $this->GlobalCalc = $GlobalCalc;
      return $this;
    }

    /**
     * @return ManualCalculationData
     */
    public function getManualCalc()
    {
      return $this->ManualCalc;
    }

    /**
     * @param ManualCalculationData $ManualCalc
     * @return \App\models\ATSFlight\CalculationData
     */
    public function setManualCalc($ManualCalc)
    {
      $this->ManualCalc = $ManualCalc;
      return $this;
    }

}
