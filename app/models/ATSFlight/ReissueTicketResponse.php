<?php

namespace App\models\ATSFlight;

class ReissueTicketResponse
{

    /**
     * @var ReissueResponseData $ReissueTicketResult
     */
    protected $ReissueTicketResult = null;

    /**
     * @param ReissueResponseData $ReissueTicketResult
     */
    public function __construct($ReissueTicketResult)
    {
      $this->ReissueTicketResult = $ReissueTicketResult;
    }

    /**
     * @return ReissueResponseData
     */
    public function getReissueTicketResult()
    {
      return $this->ReissueTicketResult;
    }

    /**
     * @param ReissueResponseData $ReissueTicketResult
     * @return \App\models\ATSFlight\ReissueTicketResponse
     */
    public function setReissueTicketResult($ReissueTicketResult)
    {
      $this->ReissueTicketResult = $ReissueTicketResult;
      return $this;
    }

}
