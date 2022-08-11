<?php

namespace App\models\ATSFlight;

class UpdateUserListResponse
{

    /**
     * @var UpdateUserListResultEnum $UpdateUserListResult
     */
    protected $UpdateUserListResult = null;

    /**
     * @param UpdateUserListResultEnum $UpdateUserListResult
     */
    public function __construct($UpdateUserListResult)
    {
      $this->UpdateUserListResult = $UpdateUserListResult;
    }

    /**
     * @return UpdateUserListResultEnum
     */
    public function getUpdateUserListResult()
    {
      return $this->UpdateUserListResult;
    }

    /**
     * @param UpdateUserListResultEnum $UpdateUserListResult
     * @return \App\models\ATSFlight\UpdateUserListResponse
     */
    public function setUpdateUserListResult($UpdateUserListResult)
    {
      $this->UpdateUserListResult = $UpdateUserListResult;
      return $this;
    }

}
