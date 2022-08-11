<?php

namespace App\models\ATSFlight;

class RetrievePassengerNameRecordResponse
{

    /**
     * @var PNRResponseData $RetrievePassengerNameRecordResult
     */
    protected $RetrievePassengerNameRecordResult = null;

    /**
     * @param PNRResponseData $RetrievePassengerNameRecordResult
     */
    public function __construct($RetrievePassengerNameRecordResult)
    {
      $this->RetrievePassengerNameRecordResult = $RetrievePassengerNameRecordResult;
    }

    /**
     * @return PNRResponseData
     */
    public function getRetrievePassengerNameRecordResult()
    {
      return $this->RetrievePassengerNameRecordResult;
    }

    /**
     * @param PNRResponseData $RetrievePassengerNameRecordResult
     * @return \App\models\ATSFlight\RetrievePassengerNameRecordResponse
     */
    public function setRetrievePassengerNameRecordResult($RetrievePassengerNameRecordResult)
    {
      $this->RetrievePassengerNameRecordResult = $RetrievePassengerNameRecordResult;
      return $this;
    }

}
