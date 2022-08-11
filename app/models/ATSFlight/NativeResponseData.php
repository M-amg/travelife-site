<?php

namespace App\models\ATSFlight;

class NativeResponseData
{

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var ArrayOfstring $NativeResponse
     */
    protected $NativeResponse = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var string $Session
     */
    protected $Session = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModuleResponseData
     */
    public function getModuleInfo()
    {
      return $this->ModuleInfo;
    }

    /**
     * @param ModuleResponseData $ModuleInfo
     * @return \App\models\ATSFlight\NativeResponseData
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getNativeResponse()
    {
      return $this->NativeResponse;
    }

    /**
     * @param ArrayOfstring $NativeResponse
     * @return \App\models\ATSFlight\NativeResponseData
     */
    public function setNativeResponse($NativeResponse)
    {
      $this->NativeResponse = $NativeResponse;
      return $this;
    }

    /**
     * @return ResponseInfoDetails
     */
    public function getResponseInfo()
    {
      return $this->ResponseInfo;
    }

    /**
     * @param ResponseInfoDetails $ResponseInfo
     * @return \App\models\ATSFlight\NativeResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getSession()
    {
      return $this->Session;
    }

    /**
     * @param string $Session
     * @return \App\models\ATSFlight\NativeResponseData
     */
    public function setSession($Session)
    {
      $this->Session = $Session;
      return $this;
    }

}
