<?php

namespace App\models\ATSFlight;

class CancelTicketResponse
{

    /**
     * @var CancelTicketResponseData $CancelTicketResult
     */
    protected $CancelTicketResult = null;

    /**
     * @param CancelTicketResponseData $CancelTicketResult
     */
    public function __construct($CancelTicketResult)
    {
      $this->CancelTicketResult = $CancelTicketResult;
    }

    /**
     * @return CancelTicketResponseData
     */
    public function getCancelTicketResult()
    {
      return $this->CancelTicketResult;
    }

    /**
     * @param CancelTicketResponseData $CancelTicketResult
     * @return \App\models\ATSFlight\CancelTicketResponse
     */
    public function setCancelTicketResult($CancelTicketResult)
    {
      $this->CancelTicketResult = $CancelTicketResult;
      return $this;
    }

}
