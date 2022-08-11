<?php

namespace App\models\ATSFlight;

class PNRProcessingResponse
{

    /**
     * @var ProcessingResponseData $PNRProcessingResult
     */
    protected $PNRProcessingResult = null;

    /**
     * @param ProcessingResponseData $PNRProcessingResult
     */
    public function __construct($PNRProcessingResult)
    {
      $this->PNRProcessingResult = $PNRProcessingResult;
    }

    /**
     * @return ProcessingResponseData
     */
    public function getPNRProcessingResult()
    {
      return $this->PNRProcessingResult;
    }

    /**
     * @param ProcessingResponseData $PNRProcessingResult
     * @return \App\models\ATSFlight\PNRProcessingResponse
     */
    public function setPNRProcessingResult($PNRProcessingResult)
    {
      $this->PNRProcessingResult = $PNRProcessingResult;
      return $this;
    }

}
