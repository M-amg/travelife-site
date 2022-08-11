<?php

namespace App\models\ATSFlight;

class BrowseQueueResponse
{

    /**
     * @var BrowseResponseData $BrowseQueueResult
     */
    protected $BrowseQueueResult = null;

    /**
     * @param BrowseResponseData $BrowseQueueResult
     */
    public function __construct($BrowseQueueResult)
    {
      $this->BrowseQueueResult = $BrowseQueueResult;
    }

    /**
     * @return BrowseResponseData
     */
    public function getBrowseQueueResult()
    {
      return $this->BrowseQueueResult;
    }

    /**
     * @param BrowseResponseData $BrowseQueueResult
     * @return \App\models\ATSFlight\BrowseQueueResponse
     */
    public function setBrowseQueueResult($BrowseQueueResult)
    {
      $this->BrowseQueueResult = $BrowseQueueResult;
      return $this;
    }

}
