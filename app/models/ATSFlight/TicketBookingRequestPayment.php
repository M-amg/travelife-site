<?php

namespace App\models\ATSFlight;

class TicketBookingRequestPayment extends PaymentDefinitionData
{

    /**
     * @var string $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @var boolean $OverwriteIfElementsExist
     */
    protected $OverwriteIfElementsExist = null;

    /**
     * @var int $PaymentNumber
     */
    protected $PaymentNumber = null;

    /**
     * @param int $ID
     * @param PaymentTypeEnum $PaymentType
     */
    public function __construct($ID, $PaymentType)
    {
      parent::__construct($ID, $PaymentType);
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param string $AccountCode
     * @return \App\models\ATSFlight\TicketBookingRequestPayment
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
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
     * @return \App\models\ATSFlight\TicketBookingRequestPayment
     */
    public function setOverwriteIfElementsExist($OverwriteIfElementsExist)
    {
      $this->OverwriteIfElementsExist = $OverwriteIfElementsExist;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentNumber()
    {
      return $this->PaymentNumber;
    }

    /**
     * @param int $PaymentNumber
     * @return \App\models\ATSFlight\TicketBookingRequestPayment
     */
    public function setPaymentNumber($PaymentNumber)
    {
      $this->PaymentNumber = $PaymentNumber;
      return $this;
    }

}
