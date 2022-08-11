<?php

namespace App\models\ATSFlight;

class RequestCRSConfigData extends CRSData
{

    /**
     * @var string $CacheID
     */
    protected $CacheID = null;

    /**
     * @var CacheModeEnum $CacheMode
     */
    protected $CacheMode = null;

    /**
     * @param int $ID
     */
    public function __construct($ID)
    {
      parent::__construct($ID);
    }

    /**
     * @return string
     */
    public function getCacheID()
    {
      return $this->CacheID;
    }

    /**
     * @param string $CacheID
     * @return \App\models\ATSFlight\RequestCRSConfigData
     */
    public function setCacheID($CacheID)
    {
      $this->CacheID = $CacheID;
      return $this;
    }

    /**
     * @return CacheModeEnum
     */
    public function getCacheMode()
    {
      return $this->CacheMode;
    }

    /**
     * @param CacheModeEnum $CacheMode
     * @return \App\models\ATSFlight\RequestCRSConfigData
     */
    public function setCacheMode($CacheMode)
    {
      $this->CacheMode = $CacheMode;
      return $this;
    }

}
