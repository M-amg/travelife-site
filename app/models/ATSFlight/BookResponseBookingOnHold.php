<?php

namespace App\models\ATSFlight;

class BookResponseBookingOnHold
{

    /**
     * @var SharedPrice $BookingOnHoldSurcharge
     */
    protected $BookingOnHoldSurcharge = null;

    /**
     * @var boolean $BookingOnHoldSurchargeDeducted
     */
    protected $BookingOnHoldSurchargeDeducted = null;

    /**
     * @var SharedPrice $EquivalentBookingOnHoldSurcharge
     */
    protected $EquivalentBookingOnHoldSurcharge = null;

    /**
     * @var duration $OnHoldTimeLimit
     */
    protected $OnHoldTimeLimit = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getBookingOnHoldSurcharge()
    {
      return $this->BookingOnHoldSurcharge;
    }

    /**
     * @param SharedPrice $BookingOnHoldSurcharge
     * @return \App\models\ATSFlight\BookResponseBookingOnHold
     */
    public function setBookingOnHoldSurcharge($BookingOnHoldSurcharge)
    {
      $this->BookingOnHoldSurcharge = $BookingOnHoldSurcharge;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBookingOnHoldSurchargeDeducted()
    {
      return $this->BookingOnHoldSurchargeDeducted;
    }

    /**
     * @param boolean $BookingOnHoldSurchargeDeducted
     * @return \App\models\ATSFlight\BookResponseBookingOnHold
     */
    public function setBookingOnHoldSurchargeDeducted($BookingOnHoldSurchargeDeducted)
    {
      $this->BookingOnHoldSurchargeDeducted = $BookingOnHoldSurchargeDeducted;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentBookingOnHoldSurcharge()
    {
      return $this->EquivalentBookingOnHoldSurcharge;
    }

    /**
     * @param SharedPrice $EquivalentBookingOnHoldSurcharge
     * @return \App\models\ATSFlight\BookResponseBookingOnHold
     */
    public function setEquivalentBookingOnHoldSurcharge($EquivalentBookingOnHoldSurcharge)
    {
      $this->EquivalentBookingOnHoldSurcharge = $EquivalentBookingOnHoldSurcharge;
      return $this;
    }

    /**
     * @return duration
     */
    public function getOnHoldTimeLimit()
    {
      return $this->OnHoldTimeLimit;
    }

    /**
     * @param duration $OnHoldTimeLimit
     * @return \App\models\ATSFlight\BookResponseBookingOnHold
     */
    public function setOnHoldTimeLimit($OnHoldTimeLimit)
    {
      $this->OnHoldTimeLimit = $OnHoldTimeLimit;
      return $this;
    }

}
