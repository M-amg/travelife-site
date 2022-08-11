<?php

namespace App\models\ATSFlight;

class GetCalendarDisplayResponse
{

    /**
     * @var CalendarResponseData $GetCalendarDisplayResult
     */
    protected $GetCalendarDisplayResult = null;

    /**
     * @param CalendarResponseData $GetCalendarDisplayResult
     */
    public function __construct($GetCalendarDisplayResult)
    {
      $this->GetCalendarDisplayResult = $GetCalendarDisplayResult;
    }

    /**
     * @return CalendarResponseData
     */
    public function getGetCalendarDisplayResult()
    {
      return $this->GetCalendarDisplayResult;
    }

    /**
     * @param CalendarResponseData $GetCalendarDisplayResult
     * @return \App\models\ATSFlight\GetCalendarDisplayResponse
     */
    public function setGetCalendarDisplayResult($GetCalendarDisplayResult)
    {
      $this->GetCalendarDisplayResult = $GetCalendarDisplayResult;
      return $this;
    }

}
