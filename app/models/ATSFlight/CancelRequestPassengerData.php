<?php

namespace App\models\ATSFlight;

class CancelRequestPassengerData
{

    /**
     * @var int $PassengerSelection
     */
    protected $PassengerSelection = null;

    /**
     * @var boolean $RemoveFromGroupBookingOnly
     */
    protected $RemoveFromGroupBookingOnly = null;

    /**
     * @param int $PassengerSelection
     * @param boolean $RemoveFromGroupBookingOnly
     */
    public function __construct($PassengerSelection, $RemoveFromGroupBookingOnly)
    {
      $this->PassengerSelection = $PassengerSelection;
      $this->RemoveFromGroupBookingOnly = $RemoveFromGroupBookingOnly;
    }

    /**
     * @return int
     */
    public function getPassengerSelection()
    {
      return $this->PassengerSelection;
    }

    /**
     * @param int $PassengerSelection
     * @return \App\models\ATSFlight\CancelRequestPassengerData
     */
    public function setPassengerSelection($PassengerSelection)
    {
      $this->PassengerSelection = $PassengerSelection;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoveFromGroupBookingOnly()
    {
      return $this->RemoveFromGroupBookingOnly;
    }

    /**
     * @param boolean $RemoveFromGroupBookingOnly
     * @return \App\models\ATSFlight\CancelRequestPassengerData
     */
    public function setRemoveFromGroupBookingOnly($RemoveFromGroupBookingOnly)
    {
      $this->RemoveFromGroupBookingOnly = $RemoveFromGroupBookingOnly;
      return $this;
    }

}
