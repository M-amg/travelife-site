<?php

namespace App\models\ATSFlight;

class CancelResponsePassenger extends CancelRequestPassengerData
{

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var int $Status
     */
    protected $Status = null;

    /**
     * @param int $PassengerSelection
     * @param boolean $RemoveFromGroupBookingOnly
     */
    public function __construct($PassengerSelection, $RemoveFromGroupBookingOnly)
    {
      parent::__construct($PassengerSelection, $RemoveFromGroupBookingOnly);
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
     * @return \App\models\ATSFlight\CancelResponsePassenger
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \App\models\ATSFlight\CancelResponsePassenger
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \App\models\ATSFlight\CancelResponsePassenger
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
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
     * @return \App\models\ATSFlight\CancelResponsePassenger
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
