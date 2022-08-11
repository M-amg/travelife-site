<?php

namespace App\models\ATSFlight;

class ModifyResponseSSR
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var ArrayOfint $SegmentNumber
     */
    protected $SegmentNumber = null;

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
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \App\models\ATSFlight\ModifyResponseSSR
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
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
     * @return \App\models\ATSFlight\ModifyResponseSSR
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegmentNumber()
    {
      return $this->SegmentNumber;
    }

    /**
     * @param ArrayOfint $SegmentNumber
     * @return \App\models\ATSFlight\ModifyResponseSSR
     */
    public function setSegmentNumber($SegmentNumber)
    {
      $this->SegmentNumber = $SegmentNumber;
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
     * @return \App\models\ATSFlight\ModifyResponseSSR
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
