<?php

namespace App\models\ATSFlight;

class ResponseSSR
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
     * @var ArrayOfint $PassengerSelection
     */
    protected $PassengerSelection = null;

    /**
     * @var ArrayOfint $SegmentSelection
     */
    protected $SegmentSelection = null;

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
     * @return \App\models\ATSFlight\ResponseSSR
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
     * @return \App\models\ATSFlight\ResponseSSR
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getPassengerSelection()
    {
      return $this->PassengerSelection;
    }

    /**
     * @param ArrayOfint $PassengerSelection
     * @return \App\models\ATSFlight\ResponseSSR
     */
    public function setPassengerSelection($PassengerSelection)
    {
      $this->PassengerSelection = $PassengerSelection;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegmentSelection()
    {
      return $this->SegmentSelection;
    }

    /**
     * @param ArrayOfint $SegmentSelection
     * @return \App\models\ATSFlight\ResponseSSR
     */
    public function setSegmentSelection($SegmentSelection)
    {
      $this->SegmentSelection = $SegmentSelection;
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
     * @return \App\models\ATSFlight\ResponseSSR
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
