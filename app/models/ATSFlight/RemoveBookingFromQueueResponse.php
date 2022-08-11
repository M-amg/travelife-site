<?php

namespace App\models\ATSFlight;

class RemoveBookingFromQueueResponse
{

    /**
     * @var RemoveResponseData $RemoveBookingFromQueueResult
     */
    protected $RemoveBookingFromQueueResult = null;

    /**
     * @param RemoveResponseData $RemoveBookingFromQueueResult
     */
    public function __construct($RemoveBookingFromQueueResult)
    {
      $this->RemoveBookingFromQueueResult = $RemoveBookingFromQueueResult;
    }

    /**
     * @return RemoveResponseData
     */
    public function getRemoveBookingFromQueueResult()
    {
      return $this->RemoveBookingFromQueueResult;
    }

    /**
     * @param RemoveResponseData $RemoveBookingFromQueueResult
     * @return \App\models\ATSFlight\RemoveBookingFromQueueResponse
     */
    public function setRemoveBookingFromQueueResult($RemoveBookingFromQueueResult)
    {
      $this->RemoveBookingFromQueueResult = $RemoveBookingFromQueueResult;
      return $this;
    }

}
