<?php

namespace App\models\ATSFlight;

class RequestToleranceData
{

    /**
     * @var int $CheckDaysAhead
     */
    protected $CheckDaysAhead = null;

    /**
     * @var int $CheckDaysBack
     */
    protected $CheckDaysBack = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCheckDaysAhead()
    {
      return $this->CheckDaysAhead;
    }

    /**
     * @param int $CheckDaysAhead
     * @return \App\models\ATSFlight\RequestToleranceData
     */
    public function setCheckDaysAhead($CheckDaysAhead)
    {
      $this->CheckDaysAhead = $CheckDaysAhead;
      return $this;
    }

    /**
     * @return int
     */
    public function getCheckDaysBack()
    {
      return $this->CheckDaysBack;
    }

    /**
     * @param int $CheckDaysBack
     * @return \App\models\ATSFlight\RequestToleranceData
     */
    public function setCheckDaysBack($CheckDaysBack)
    {
      $this->CheckDaysBack = $CheckDaysBack;
      return $this;
    }

}
