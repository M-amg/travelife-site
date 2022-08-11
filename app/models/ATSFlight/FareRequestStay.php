<?php

namespace App\models\ATSFlight;

class FareRequestStay
{

    /**
     * @var int $CheckDaysAhead
     */
    protected $CheckDaysAhead = null;

    /**
     * @var int $CheckDaysBack
     */
    protected $CheckDaysBack = null;

    /**
     * @param int $CheckDaysAhead
     * @param int $CheckDaysBack
     */
    public function __construct($CheckDaysAhead, $CheckDaysBack)
    {
      $this->CheckDaysAhead = $CheckDaysAhead;
      $this->CheckDaysBack = $CheckDaysBack;
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
     * @return \App\models\ATSFlight\FareRequestStay
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
     * @return \App\models\ATSFlight\FareRequestStay
     */
    public function setCheckDaysBack($CheckDaysBack)
    {
      $this->CheckDaysBack = $CheckDaysBack;
      return $this;
    }

}
