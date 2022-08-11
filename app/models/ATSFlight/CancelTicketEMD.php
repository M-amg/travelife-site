<?php

namespace App\models\ATSFlight;

class CancelTicketEMD
{

    /**
     * @var string $EMDNumber
     */
    protected $EMDNumber = null;

    /**
     * @var SharedPrice $EquivalentRefundAmount
     */
    protected $EquivalentRefundAmount = null;

    /**
     * @var SharedPrice $RefundAmount
     */
    protected $RefundAmount = null;

    /**
     * @var RefundCancelModeEnum $RefundMode
     */
    protected $RefundMode = null;

    /**
     * @var string $RefundRemark
     */
    protected $RefundRemark = null;

    /**
     * @param RefundCancelModeEnum $RefundMode
     */
    public function __construct($RefundMode)
    {
      $this->RefundMode = $RefundMode;
    }

    /**
     * @return string
     */
    public function getEMDNumber()
    {
      return $this->EMDNumber;
    }

    /**
     * @param string $EMDNumber
     * @return \App\models\ATSFlight\CancelTicketEMD
     */
    public function setEMDNumber($EMDNumber)
    {
      $this->EMDNumber = $EMDNumber;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentRefundAmount()
    {
      return $this->EquivalentRefundAmount;
    }

    /**
     * @param SharedPrice $EquivalentRefundAmount
     * @return \App\models\ATSFlight\CancelTicketEMD
     */
    public function setEquivalentRefundAmount($EquivalentRefundAmount)
    {
      $this->EquivalentRefundAmount = $EquivalentRefundAmount;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getRefundAmount()
    {
      return $this->RefundAmount;
    }

    /**
     * @param SharedPrice $RefundAmount
     * @return \App\models\ATSFlight\CancelTicketEMD
     */
    public function setRefundAmount($RefundAmount)
    {
      $this->RefundAmount = $RefundAmount;
      return $this;
    }

    /**
     * @return RefundCancelModeEnum
     */
    public function getRefundMode()
    {
      return $this->RefundMode;
    }

    /**
     * @param RefundCancelModeEnum $RefundMode
     * @return \App\models\ATSFlight\CancelTicketEMD
     */
    public function setRefundMode($RefundMode)
    {
      $this->RefundMode = $RefundMode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefundRemark()
    {
      return $this->RefundRemark;
    }

    /**
     * @param string $RefundRemark
     * @return \App\models\ATSFlight\CancelTicketEMD
     */
    public function setRefundRemark($RefundRemark)
    {
      $this->RefundRemark = $RefundRemark;
      return $this;
    }

}
