<?php

namespace App\models\ATSFlight;

class XtremePricer
{

    /**
     * @var int $XPConcurrentAvails
     */
    protected $XPConcurrentAvails = null;

    /**
     * @var int $XPMaxConnections
     */
    protected $XPMaxConnections = null;

    /**
     * @var int $XPMaxMoveDowns
     */
    protected $XPMaxMoveDowns = null;

    /**
     * @var XPSearchModeEnum $XPSearchMode
     */
    protected $XPSearchMode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getXPConcurrentAvails()
    {
      return $this->XPConcurrentAvails;
    }

    /**
     * @param int $XPConcurrentAvails
     * @return \App\models\ATSFlight\XtremePricer
     */
    public function setXPConcurrentAvails($XPConcurrentAvails)
    {
      $this->XPConcurrentAvails = $XPConcurrentAvails;
      return $this;
    }

    /**
     * @return int
     */
    public function getXPMaxConnections()
    {
      return $this->XPMaxConnections;
    }

    /**
     * @param int $XPMaxConnections
     * @return \App\models\ATSFlight\XtremePricer
     */
    public function setXPMaxConnections($XPMaxConnections)
    {
      $this->XPMaxConnections = $XPMaxConnections;
      return $this;
    }

    /**
     * @return int
     */
    public function getXPMaxMoveDowns()
    {
      return $this->XPMaxMoveDowns;
    }

    /**
     * @param int $XPMaxMoveDowns
     * @return \App\models\ATSFlight\XtremePricer
     */
    public function setXPMaxMoveDowns($XPMaxMoveDowns)
    {
      $this->XPMaxMoveDowns = $XPMaxMoveDowns;
      return $this;
    }

    /**
     * @return XPSearchModeEnum
     */
    public function getXPSearchMode()
    {
      return $this->XPSearchMode;
    }

    /**
     * @param XPSearchModeEnum $XPSearchMode
     * @return \App\models\ATSFlight\XtremePricer
     */
    public function setXPSearchMode($XPSearchMode)
    {
      $this->XPSearchMode = $XPSearchMode;
      return $this;
    }

}
