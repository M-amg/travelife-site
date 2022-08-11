<?php

namespace App\models\ATSFlight;

class UpdateUserAgreementListResponse
{

    /**
     * @var UpdateUserListResultEnum $UpdateUserAgreementListResult
     */
    protected $UpdateUserAgreementListResult = null;

    /**
     * @param UpdateUserListResultEnum $UpdateUserAgreementListResult
     */
    public function __construct($UpdateUserAgreementListResult)
    {
      $this->UpdateUserAgreementListResult = $UpdateUserAgreementListResult;
    }

    /**
     * @return UpdateUserListResultEnum
     */
    public function getUpdateUserAgreementListResult()
    {
      return $this->UpdateUserAgreementListResult;
    }

    /**
     * @param UpdateUserListResultEnum $UpdateUserAgreementListResult
     * @return \App\models\ATSFlight\UpdateUserAgreementListResponse
     */
    public function setUpdateUserAgreementListResult($UpdateUserAgreementListResult)
    {
      $this->UpdateUserAgreementListResult = $UpdateUserAgreementListResult;
      return $this;
    }

}
