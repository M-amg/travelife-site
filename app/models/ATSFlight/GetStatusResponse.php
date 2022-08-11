<?php

namespace App\models\ATSFlight;

class GetStatusResponse
{

    /**
     * @var ArrayOfStatusData $GetStatusResult
     */
    protected $GetStatusResult = null;

    /**
     * @param ArrayOfStatusData $GetStatusResult
     */
    public function __construct($GetStatusResult)
    {
      $this->GetStatusResult = $GetStatusResult;
    }

    /**
     * @return ArrayOfStatusData
     */
    public function getGetStatusResult()
    {
      return $this->GetStatusResult;
    }

    /**
     * @param ArrayOfStatusData $GetStatusResult
     * @return \App\models\ATSFlight\GetStatusResponse
     */
    public function setGetStatusResult($GetStatusResult)
    {
      $this->GetStatusResult = $GetStatusResult;
      return $this;
    }

}
