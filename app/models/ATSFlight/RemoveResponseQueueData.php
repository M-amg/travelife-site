<?php

namespace App\models\ATSFlight;

class RemoveResponseQueueData extends RemoveQueueData
{

    /**
     * @var string $ErrorCode
     */
    protected $ErrorCode = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param string $ErrorCode
     * @return \App\models\ATSFlight\RemoveResponseQueueData
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

}
