<?php

namespace App\models\ATSFlight;

class NativeCommandResponse
{

    /**
     * @var NativeResponseData $NativeCommandResult
     */
    protected $NativeCommandResult = null;

    /**
     * @param NativeResponseData $NativeCommandResult
     */
    public function __construct($NativeCommandResult)
    {
      $this->NativeCommandResult = $NativeCommandResult;
    }

    /**
     * @return NativeResponseData
     */
    public function getNativeCommandResult()
    {
      return $this->NativeCommandResult;
    }

    /**
     * @param NativeResponseData $NativeCommandResult
     * @return \App\models\ATSFlight\NativeCommandResponse
     */
    public function setNativeCommandResult($NativeCommandResult)
    {
      $this->NativeCommandResult = $NativeCommandResult;
      return $this;
    }

}
