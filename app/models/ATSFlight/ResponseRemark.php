<?php

namespace App\models\ATSFlight;

class ResponseRemark
{

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var ArrayOfint $PassengerSelection
     */
    protected $PassengerSelection = null;

    /**
     * @var RemarkTypeEnum $RemarkType
     */
    protected $RemarkType = null;

    /**
     * @var ArrayOfint $SegmentSelection
     */
    protected $SegmentSelection = null;

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
    public function getErrorText()
    {
      return $this->ErrorText;
    }

    /**
     * @param string $ErrorText
     * @return \App\models\ATSFlight\ResponseRemark
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
     * @return \App\models\ATSFlight\ResponseRemark
     */
    public function setPassengerSelection($PassengerSelection)
    {
      $this->PassengerSelection = $PassengerSelection;
      return $this;
    }

    /**
     * @return RemarkTypeEnum
     */
    public function getRemarkType()
    {
      return $this->RemarkType;
    }

    /**
     * @param RemarkTypeEnum $RemarkType
     * @return \App\models\ATSFlight\ResponseRemark
     */
    public function setRemarkType($RemarkType)
    {
      $this->RemarkType = $RemarkType;
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
     * @return \App\models\ATSFlight\ResponseRemark
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
     * @return \App\models\ATSFlight\ResponseRemark
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
     * @return \App\models\ATSFlight\ResponseRemark
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
