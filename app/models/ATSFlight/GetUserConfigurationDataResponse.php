<?php

namespace App\models\ATSFlight;

class GetUserConfigurationDataResponse
{

    /**
     * @var UserAccessData $GetUserConfigurationDataResult
     */
    protected $GetUserConfigurationDataResult = null;

    /**
     * @param UserAccessData $GetUserConfigurationDataResult
     */
    public function __construct($GetUserConfigurationDataResult)
    {
      $this->GetUserConfigurationDataResult = $GetUserConfigurationDataResult;
    }

    /**
     * @return UserAccessData
     */
    public function getGetUserConfigurationDataResult()
    {
      return $this->GetUserConfigurationDataResult;
    }

    /**
     * @param UserAccessData $GetUserConfigurationDataResult
     * @return \App\models\ATSFlight\GetUserConfigurationDataResponse
     */
    public function setGetUserConfigurationDataResult($GetUserConfigurationDataResult)
    {
      $this->GetUserConfigurationDataResult = $GetUserConfigurationDataResult;
      return $this;
    }

}
