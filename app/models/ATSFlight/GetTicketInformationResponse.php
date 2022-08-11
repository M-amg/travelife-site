<?php

namespace App\models\ATSFlight;

class GetTicketInformationResponse
{

    /**
     * @var TicketResponseData $GetTicketInformationResult
     */
    protected $GetTicketInformationResult = null;

    /**
     * @param TicketResponseData $GetTicketInformationResult
     */
    public function __construct($GetTicketInformationResult)
    {
      $this->GetTicketInformationResult = $GetTicketInformationResult;
    }

    /**
     * @return TicketResponseData
     */
    public function getGetTicketInformationResult()
    {
      return $this->GetTicketInformationResult;
    }

    /**
     * @param TicketResponseData $GetTicketInformationResult
     * @return \App\models\ATSFlight\GetTicketInformationResponse
     */
    public function setGetTicketInformationResult($GetTicketInformationResult)
    {
      $this->GetTicketInformationResult = $GetTicketInformationResult;
      return $this;
    }

}
