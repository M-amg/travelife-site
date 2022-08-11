<?php

namespace App\models\ATSFlight;

class CalculationResponseData
{

    /**
     * @var CalculationInfoData $BranchCalcInfo
     */
    protected $BranchCalcInfo = null;

    /**
     * @var CalculationInfoData $GlobalCalcInfo
     */
    protected $GlobalCalcInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CalculationInfoData
     */
    public function getBranchCalcInfo()
    {
      return $this->BranchCalcInfo;
    }

    /**
     * @param CalculationInfoData $BranchCalcInfo
     * @return \App\models\ATSFlight\CalculationResponseData
     */
    public function setBranchCalcInfo($BranchCalcInfo)
    {
      $this->BranchCalcInfo = $BranchCalcInfo;
      return $this;
    }

    /**
     * @return CalculationInfoData
     */
    public function getGlobalCalcInfo()
    {
      return $this->GlobalCalcInfo;
    }

    /**
     * @param CalculationInfoData $GlobalCalcInfo
     * @return \App\models\ATSFlight\CalculationResponseData
     */
    public function setGlobalCalcInfo($GlobalCalcInfo)
    {
      $this->GlobalCalcInfo = $GlobalCalcInfo;
      return $this;
    }

}
