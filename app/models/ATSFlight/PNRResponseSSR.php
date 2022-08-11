<?php

namespace App\models\ATSFlight;

class PNRResponseSSR
{

    /**
     * @var boolean $Chargeable
     */
    protected $Chargeable = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var ArrayOfint $SegmentNumbers
     */
    protected $SegmentNumbers = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getChargeable()
    {
      return $this->Chargeable;
    }

    /**
     * @param boolean $Chargeable
     * @return \App\models\ATSFlight\PNRResponseSSR
     */
    public function setChargeable($Chargeable)
    {
      $this->Chargeable = $Chargeable;
      return $this;
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
     * @return \App\models\ATSFlight\PNRResponseSSR
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegmentNumbers()
    {
      return $this->SegmentNumbers;
    }

    /**
     * @param ArrayOfint $SegmentNumbers
     * @return \App\models\ATSFlight\PNRResponseSSR
     */
    public function setSegmentNumbers($SegmentNumbers)
    {
      $this->SegmentNumbers = $SegmentNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \App\models\ATSFlight\PNRResponseSSR
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \App\models\ATSFlight\PNRResponseSSR
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
