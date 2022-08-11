<?php

namespace App\models\ATSFlight;

class PNRResponseSK
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var ArrayOfint $SegmentNumbers
     */
    protected $SegmentNumbers = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    
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
     * @return \App\models\ATSFlight\PNRResponseSK
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
     * @return \App\models\ATSFlight\PNRResponseSK
     */
    public function setSegmentNumbers($SegmentNumbers)
    {
      $this->SegmentNumbers = $SegmentNumbers;
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
     * @return \App\models\ATSFlight\PNRResponseSK
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
