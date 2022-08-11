<?php

namespace App\models\ATSFlight;

class GetPreferenceSearchResponse
{

    /**
     * @var PreferenceResponseData $GetPreferenceSearchResult
     */
    protected $GetPreferenceSearchResult = null;

    /**
     * @param PreferenceResponseData $GetPreferenceSearchResult
     */
    public function __construct($GetPreferenceSearchResult)
    {
      $this->GetPreferenceSearchResult = $GetPreferenceSearchResult;
    }

    /**
     * @return PreferenceResponseData
     */
    public function getGetPreferenceSearchResult()
    {
      return $this->GetPreferenceSearchResult;
    }

    /**
     * @param PreferenceResponseData $GetPreferenceSearchResult
     * @return \App\models\ATSFlight\GetPreferenceSearchResponse
     */
    public function setGetPreferenceSearchResult($GetPreferenceSearchResult)
    {
      $this->GetPreferenceSearchResult = $GetPreferenceSearchResult;
      return $this;
    }

}
