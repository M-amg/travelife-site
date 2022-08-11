<?php

namespace App\models\ATSFlight;

class BookingOnHoldData
{

    /**
     * @var SurchargeData $BookingOnHoldSurcharge
     */
    protected $BookingOnHoldSurcharge = null;

    /**
     * @var duration $MaxHoldTime
     */
    protected $MaxHoldTime = null;

    /**
     * @var boolean $WillSurchargeBeDeducted
     */
    protected $WillSurchargeBeDeducted = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SurchargeData
     */
    public function getBookingOnHoldSurcharge()
    {
      return $this->BookingOnHoldSurcharge;
    }

    /**
     * @param SurchargeData $BookingOnHoldSurcharge
     * @return \App\models\ATSFlight\BookingOnHoldData
     */
    public function setBookingOnHoldSurcharge($BookingOnHoldSurcharge)
    {
      $this->BookingOnHoldSurcharge = $BookingOnHoldSurcharge;
      return $this;
    }

    /**
     * @return duration
     */
    public function getMaxHoldTime()
    {
      return $this->MaxHoldTime;
    }

    /**
     * @param duration $MaxHoldTime
     * @return \App\models\ATSFlight\BookingOnHoldData
     */
    public function setMaxHoldTime($MaxHoldTime)
    {
      $this->MaxHoldTime = $MaxHoldTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWillSurchargeBeDeducted()
    {
      return $this->WillSurchargeBeDeducted;
    }

    /**
     * @param boolean $WillSurchargeBeDeducted
     * @return \App\models\ATSFlight\BookingOnHoldData
     */
    public function setWillSurchargeBeDeducted($WillSurchargeBeDeducted)
    {
      $this->WillSurchargeBeDeducted = $WillSurchargeBeDeducted;
      return $this;
    }

}
