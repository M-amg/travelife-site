<?php

namespace App\models\ATSFlight;

class GetVersionsResponse
{

    /**
     * @var ArrayOfVersionData $GetVersionsResult
     */
    protected $GetVersionsResult = null;

    /**
     * @param ArrayOfVersionData $GetVersionsResult
     */
    public function __construct($GetVersionsResult)
    {
      $this->GetVersionsResult = $GetVersionsResult;
    }

    /**
     * @return ArrayOfVersionData
     */
    public function getGetVersionsResult()
    {
      return $this->GetVersionsResult;
    }

    /**
     * @param ArrayOfVersionData $GetVersionsResult
     * @return \App\models\ATSFlight\GetVersionsResponse
     */
    public function setGetVersionsResult($GetVersionsResult)
    {
      $this->GetVersionsResult = $GetVersionsResult;
      return $this;
    }

}
