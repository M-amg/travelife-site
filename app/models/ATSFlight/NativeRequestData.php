<?php

namespace App\models\ATSFlight;

class NativeRequestData
{

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var boolean $CloseSessionAfterProcessing
     */
    protected $CloseSessionAfterProcessing = null;

    /**
     * @var string $NativeRequest
     */
    protected $NativeRequest = null;

    /**
     * @var string $Session
     */
    protected $Session = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CRS
     */
    public function getCRSConfig()
    {
      return $this->CRSConfig;
    }

    /**
     * @param CRS $CRSConfig
     * @return \App\models\ATSFlight\NativeRequestData
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCloseSessionAfterProcessing()
    {
      return $this->CloseSessionAfterProcessing;
    }

    /**
     * @param boolean $CloseSessionAfterProcessing
     * @return \App\models\ATSFlight\NativeRequestData
     */
    public function setCloseSessionAfterProcessing($CloseSessionAfterProcessing)
    {
      $this->CloseSessionAfterProcessing = $CloseSessionAfterProcessing;
      return $this;
    }

    /**
     * @return string
     */
    public function getNativeRequest()
    {
      return $this->NativeRequest;
    }

    /**
     * @param string $NativeRequest
     * @return \App\models\ATSFlight\NativeRequestData
     */
    public function setNativeRequest($NativeRequest)
    {
      $this->NativeRequest = $NativeRequest;
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
     * @return \App\models\ATSFlight\NativeRequestData
     */
    public function setSession($Session)
    {
      $this->Session = $Session;
      return $this;
    }

}
