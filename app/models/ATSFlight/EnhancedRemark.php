<?php

namespace App\models\ATSFlight;

class EnhancedRemark
{

    /**
     * @var ArrayOfint $PassengerSelection
     */
    protected $PassengerSelection = null;

    /**
     * @var string $Remark
     */
    protected $Remark = null;

    /**
     * @var RemarkTypeEnum $RemarkType
     */
    protected $RemarkType = null;

    /**
     * @var ArrayOfint $SegmentSelection
     */
    protected $SegmentSelection = null;

    /**
     * @var string $TypeCode
     */
    protected $TypeCode = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\EnhancedRemark
     */
    public function setPassengerSelection($PassengerSelection)
    {
      $this->PassengerSelection = $PassengerSelection;
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
     * @return \App\models\ATSFlight\EnhancedRemark
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
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
     * @return \App\models\ATSFlight\EnhancedRemark
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
     * @return \App\models\ATSFlight\EnhancedRemark
     */
    public function setSegmentSelection($SegmentSelection)
    {
      $this->SegmentSelection = $SegmentSelection;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeCode()
    {
      return $this->TypeCode;
    }

    /**
     * @param string $TypeCode
     * @return \App\models\ATSFlight\EnhancedRemark
     */
    public function setTypeCode($TypeCode)
    {
      $this->TypeCode = $TypeCode;
      return $this;
    }

}
