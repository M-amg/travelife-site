<?php

namespace App\models\ATSFlight;

class ModifyResponseRemark
{

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var string $Remark
     */
    protected $Remark = null;

    /**
     * @var int $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getErrorText()
    {
      return $this->ErrorText;
    }

    /**
     * @param string $ErrorText
     * @return \App\models\ATSFlight\ModifyResponseRemark
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param string $Remark
     * @return \App\models\ATSFlight\ModifyResponseRemark
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
      return $this;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param int $Status
     * @return \App\models\ATSFlight\ModifyResponseRemark
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
