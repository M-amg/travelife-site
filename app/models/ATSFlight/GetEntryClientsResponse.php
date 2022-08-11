<?php

namespace App\models\ATSFlight;

class GetEntryClientsResponse
{

    /**
     * @var ArrayOfEntryClient $GetEntryClientsResult
     */
    protected $GetEntryClientsResult = null;

    /**
     * @param ArrayOfEntryClient $GetEntryClientsResult
     */
    public function __construct($GetEntryClientsResult)
    {
      $this->GetEntryClientsResult = $GetEntryClientsResult;
    }

    /**
     * @return ArrayOfEntryClient
     */
    public function getGetEntryClientsResult()
    {
      return $this->GetEntryClientsResult;
    }

    /**
     * @param ArrayOfEntryClient $GetEntryClientsResult
     * @return \App\models\ATSFlight\GetEntryClientsResponse
     */
    public function setGetEntryClientsResult($GetEntryClientsResult)
    {
      $this->GetEntryClientsResult = $GetEntryClientsResult;
      return $this;
    }

}
