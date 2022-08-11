<?php

namespace App\models\ATSFlight;

class CalculationRequestData
{

    /**
     * @var string $BranchName
     */
    protected $BranchName = null;

    /**
     * @var boolean $IncludeQSurcharge
     */
    protected $IncludeQSurcharge = null;

    /**
     * @var string $ModelName
     */
    protected $ModelName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBranchName()
    {
      return $this->BranchName;
    }

    /**
     * @param string $BranchName
     * @return \App\models\ATSFlight\CalculationRequestData
     */
    public function setBranchName($BranchName)
    {
      $this->BranchName = $BranchName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeQSurcharge()
    {
      return $this->IncludeQSurcharge;
    }

    /**
     * @param boolean $IncludeQSurcharge
     * @return \App\models\ATSFlight\CalculationRequestData
     */
    public function setIncludeQSurcharge($IncludeQSurcharge)
    {
      $this->IncludeQSurcharge = $IncludeQSurcharge;
      return $this;
    }

    /**
     * @return string
     */
    public function getModelName()
    {
      return $this->ModelName;
    }

    /**
     * @param string $ModelName
     * @return \App\models\ATSFlight\CalculationRequestData
     */
    public function setModelName($ModelName)
    {
      $this->ModelName = $ModelName;
      return $this;
    }

}
