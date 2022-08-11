<?php

namespace App\models\ATSFlight;

class LoadAirlinesResponse
{

    /**
     * @var ArrayOfAirline $LoadAirlinesResult
     */
    protected $LoadAirlinesResult = null;

    /**
     * @param ArrayOfAirline $LoadAirlinesResult
     */
    public function __construct($LoadAirlinesResult)
    {
      $this->LoadAirlinesResult = $LoadAirlinesResult;
    }

    /**
     * @return ArrayOfAirline
     */
    public function getLoadAirlinesResult()
    {
      return $this->LoadAirlinesResult;
    }

    /**
     * @param ArrayOfAirline $LoadAirlinesResult
     * @return \App\models\ATSFlight\LoadAirlinesResponse
     */
    public function setLoadAirlinesResult($LoadAirlinesResult)
    {
      $this->LoadAirlinesResult = $LoadAirlinesResult;
      return $this;
    }

}
