<?php

namespace App\models\ATSFlight;

class TicketBookingEMD
{

    /**
     * @var ServiceBookTypeEnum $BookingType
     */
    protected $BookingType = null;

    /**
     * @var string $BookingTypeCode
     */
    protected $BookingTypeCode = null;

    /**
     * @var string $BookingTypeText
     */
    protected $BookingTypeText = null;

    /**
     * @var boolean $OverwriteIfPaymentExists
     */
    protected $OverwriteIfPaymentExists = null;

    /**
     * @param ServiceBookTypeEnum $BookingType
     * @param boolean $OverwriteIfPaymentExists
     */
    public function __construct($BookingType, $OverwriteIfPaymentExists)
    {
      $this->BookingType = $BookingType;
      $this->OverwriteIfPaymentExists = $OverwriteIfPaymentExists;
    }

    /**
     * @return ServiceBookTypeEnum
     */
    public function getBookingType()
    {
      return $this->BookingType;
    }

    /**
     * @param ServiceBookTypeEnum $BookingType
     * @return \App\models\ATSFlight\TicketBookingEMD
     */
    public function setBookingType($BookingType)
    {
      $this->BookingType = $BookingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingTypeCode()
    {
      return $this->BookingTypeCode;
    }

    /**
     * @param string $BookingTypeCode
     * @return \App\models\ATSFlight\TicketBookingEMD
     */
    public function setBookingTypeCode($BookingTypeCode)
    {
      $this->BookingTypeCode = $BookingTypeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingTypeText()
    {
      return $this->BookingTypeText;
    }

    /**
     * @param string $BookingTypeText
     * @return \App\models\ATSFlight\TicketBookingEMD
     */
    public function setBookingTypeText($BookingTypeText)
    {
      $this->BookingTypeText = $BookingTypeText;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOverwriteIfPaymentExists()
    {
      return $this->OverwriteIfPaymentExists;
    }

    /**
     * @param boolean $OverwriteIfPaymentExists
     * @return \App\models\ATSFlight\TicketBookingEMD
     */
    public function setOverwriteIfPaymentExists($OverwriteIfPaymentExists)
    {
      $this->OverwriteIfPaymentExists = $OverwriteIfPaymentExists;
      return $this;
    }

}
