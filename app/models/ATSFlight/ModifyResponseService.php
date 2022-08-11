<?php

namespace App\models\ATSFlight;

class ModifyResponseService
{

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var ArrayOfint $PassengerSelections
     */
    protected $PassengerSelections = null;

    /**
     * @var ArrayOfint $SegmentSelections
     */
    protected $SegmentSelections = null;

    /**
     * @var int $Status
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
     * @return string
     */
    public function getCarrierCode()
    {
      return $this->CarrierCode;
    }

    /**
     * @param string $CarrierCode
     * @return \App\models\ATSFlight\ModifyResponseService
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
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
     * @return \App\models\ATSFlight\ModifyResponseService
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getPassengerSelections()
    {
      return $this->PassengerSelections;
    }

    /**
     * @param ArrayOfint $PassengerSelections
     * @return \App\models\ATSFlight\ModifyResponseService
     */
    public function setPassengerSelections($PassengerSelections)
    {
      $this->PassengerSelections = $PassengerSelections;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegmentSelections()
    {
      return $this->SegmentSelections;
    }

    /**
     * @param ArrayOfint $SegmentSelections
     * @return \App\models\ATSFlight\ModifyResponseService
     */
    public function setSegmentSelections($SegmentSelections)
    {
      $this->SegmentSelections = $SegmentSelections;
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
     * @return \App\models\ATSFlight\ModifyResponseService
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
     * @return \App\models\ATSFlight\ModifyResponseService
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
