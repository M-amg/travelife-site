<?php

namespace App\models\ATSFlight;

class RevalidateTicketResponse
{

    /**
     * @var RevalidateResponseData $RevalidateTicketResult
     */
    protected $RevalidateTicketResult = null;

    /**
     * @param RevalidateResponseData $RevalidateTicketResult
     */
    public function __construct($RevalidateTicketResult)
    {
      $this->RevalidateTicketResult = $RevalidateTicketResult;
    }

    /**
     * @return RevalidateResponseData
     */
    public function getRevalidateTicketResult()
    {
      return $this->RevalidateTicketResult;
    }

    /**
     * @param RevalidateResponseData $RevalidateTicketResult
     * @return \App\models\ATSFlight\RevalidateTicketResponse
     */
    public function setRevalidateTicketResult($RevalidateTicketResult)
    {
      $this->RevalidateTicketResult = $RevalidateTicketResult;
      return $this;
    }

}
