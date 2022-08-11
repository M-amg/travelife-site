<?php

namespace App\models\ATSFlight;

class GetRuleInformationTextResponse
{

    /**
     * @var RuleTextResponseData $GetRuleInformationTextResult
     */
    protected $GetRuleInformationTextResult = null;

    /**
     * @param RuleTextResponseData $GetRuleInformationTextResult
     */
    public function __construct($GetRuleInformationTextResult)
    {
      $this->GetRuleInformationTextResult = $GetRuleInformationTextResult;
    }

    /**
     * @return RuleTextResponseData
     */
    public function getGetRuleInformationTextResult()
    {
      return $this->GetRuleInformationTextResult;
    }

    /**
     * @param RuleTextResponseData $GetRuleInformationTextResult
     * @return \App\models\ATSFlight\GetRuleInformationTextResponse
     */
    public function setGetRuleInformationTextResult($GetRuleInformationTextResult)
    {
      $this->GetRuleInformationTextResult = $GetRuleInformationTextResult;
      return $this;
    }

}
