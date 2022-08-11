<?php

namespace App\models\ATSFlight;

class UserCalculationData
{

    /**
     * @var string $DefaultBranchCalcModelName
     */
    protected $DefaultBranchCalcModelName = null;

    /**
     * @var boolean $DefaultBranchCalcOverridable
     */
    protected $DefaultBranchCalcOverridable = null;

    /**
     * @var string $DefaultGlobalCalcModelName
     */
    protected $DefaultGlobalCalcModelName = null;

    /**
     * @var boolean $DefaultGlobalCalcOverridable
     */
    protected $DefaultGlobalCalcOverridable = null;

    /**
     * @var boolean $EnableBranchCalcInfo
     */
    protected $EnableBranchCalcInfo = null;

    /**
     * @var boolean $EnableGlobalCalcInfo
     */
    protected $EnableGlobalCalcInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDefaultBranchCalcModelName()
    {
      return $this->DefaultBranchCalcModelName;
    }

    /**
     * @param string $DefaultBranchCalcModelName
     * @return \App\models\ATSFlight\UserCalculationData
     */
    public function setDefaultBranchCalcModelName($DefaultBranchCalcModelName)
    {
      $this->DefaultBranchCalcModelName = $DefaultBranchCalcModelName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultBranchCalcOverridable()
    {
      return $this->DefaultBranchCalcOverridable;
    }

    /**
     * @param boolean $DefaultBranchCalcOverridable
     * @return \App\models\ATSFlight\UserCalculationData
     */
    public function setDefaultBranchCalcOverridable($DefaultBranchCalcOverridable)
    {
      $this->DefaultBranchCalcOverridable = $DefaultBranchCalcOverridable;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultGlobalCalcModelName()
    {
      return $this->DefaultGlobalCalcModelName;
    }

    /**
     * @param string $DefaultGlobalCalcModelName
     * @return \App\models\ATSFlight\UserCalculationData
     */
    public function setDefaultGlobalCalcModelName($DefaultGlobalCalcModelName)
    {
      $this->DefaultGlobalCalcModelName = $DefaultGlobalCalcModelName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDefaultGlobalCalcOverridable()
    {
      return $this->DefaultGlobalCalcOverridable;
    }

    /**
     * @param boolean $DefaultGlobalCalcOverridable
     * @return \App\models\ATSFlight\UserCalculationData
     */
    public function setDefaultGlobalCalcOverridable($DefaultGlobalCalcOverridable)
    {
      $this->DefaultGlobalCalcOverridable = $DefaultGlobalCalcOverridable;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableBranchCalcInfo()
    {
      return $this->EnableBranchCalcInfo;
    }

    /**
     * @param boolean $EnableBranchCalcInfo
     * @return \App\models\ATSFlight\UserCalculationData
     */
    public function setEnableBranchCalcInfo($EnableBranchCalcInfo)
    {
      $this->EnableBranchCalcInfo = $EnableBranchCalcInfo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableGlobalCalcInfo()
    {
      return $this->EnableGlobalCalcInfo;
    }

    /**
     * @param boolean $EnableGlobalCalcInfo
     * @return \App\models\ATSFlight\UserCalculationData
     */
    public function setEnableGlobalCalcInfo($EnableGlobalCalcInfo)
    {
      $this->EnableGlobalCalcInfo = $EnableGlobalCalcInfo;
      return $this;
    }

}
