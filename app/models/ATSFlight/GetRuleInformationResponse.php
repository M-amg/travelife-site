<?php

namespace App\models\ATSFlight;

class GetRuleInformationResponse
{

    /**
     * @var RuleResponseData $GetRuleInformationResult
     */
    protected $GetRuleInformationResult = null;

    /**
     * @param RuleResponseData $GetRuleInformationResult
     */
    public function __construct($GetRuleInformationResult)
    {
      $this->GetRuleInformationResult = $GetRuleInformationResult;
    }

    /**
     * @return RuleResponseData
     */
    public function getGetRuleInformationResult()
    {
      return $this->GetRuleInformationResult;
    }

    /**
     * @param RuleResponseData $GetRuleInformationResult
     * @return \App\models\ATSFlight\GetRuleInformationResponse
     */
    public function setGetRuleInformationResult($GetRuleInformationResult)
    {
      $this->GetRuleInformationResult = $GetRuleInformationResult;
      return $this;
    }

}
