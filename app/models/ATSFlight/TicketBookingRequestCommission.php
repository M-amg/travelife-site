<?php

namespace App\models\ATSFlight;

class TicketBookingRequestCommission
{

    /**
     * @var float $Amount
     */
    protected $Amount = null;

    /**
     * @var boolean $OverwriteIfElementsExist
     */
    protected $OverwriteIfElementsExist = null;

    /**
     * @var CommissionTypeEnum $Type
     */
    protected $Type = null;

    /**
     * @param float $Amount
     */
    public function __construct($Amount)
    {
      $this->Amount = $Amount;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return \App\models\ATSFlight\TicketBookingRequestCommission
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverwriteIfElementsExist()
    {
      return $this->OverwriteIfElementsExist;
    }

    /**
     * @param boolean $OverwriteIfElementsExist
     * @return \App\models\ATSFlight\TicketBookingRequestCommission
     */
    public function setOverwriteIfElementsExist($OverwriteIfElementsExist)
    {
      $this->OverwriteIfElementsExist = $OverwriteIfElementsExist;
      return $this;
    }

    /**
     * @return CommissionTypeEnum
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param CommissionTypeEnum $Type
     * @return \App\models\ATSFlight\TicketBookingRequestCommission
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
