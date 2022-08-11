<?php

namespace App\models\ATSFlight;

class GetMultiChannelQueryInformationResponse
{

    /**
     * @var ArrayOfQueryRuleData $GetMultiChannelQueryInformationResult
     */
    protected $GetMultiChannelQueryInformationResult = null;

    /**
     * @param ArrayOfQueryRuleData $GetMultiChannelQueryInformationResult
     */
    public function __construct($GetMultiChannelQueryInformationResult)
    {
      $this->GetMultiChannelQueryInformationResult = $GetMultiChannelQueryInformationResult;
    }

    /**
     * @return ArrayOfQueryRuleData
     */
    public function getGetMultiChannelQueryInformationResult()
    {
      return $this->GetMultiChannelQueryInformationResult;
    }

    /**
     * @param ArrayOfQueryRuleData $GetMultiChannelQueryInformationResult
     * @return \App\models\ATSFlight\GetMultiChannelQueryInformationResponse
     */
    public function setGetMultiChannelQueryInformationResult($GetMultiChannelQueryInformationResult)
    {
      $this->GetMultiChannelQueryInformationResult = $GetMultiChannelQueryInformationResult;
      return $this;
    }

}
