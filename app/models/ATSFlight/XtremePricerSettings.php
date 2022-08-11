<?php

namespace App\models\ATSFlight;

class XtremePricerSettings
{

    /**
     * @var boolean $IsAllowed
     */
    protected $IsAllowed = null;

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
     * @var TmpXPSearchModeEnum $XPSearchMode
     */
    protected $XPSearchMode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getIsAllowed()
    {
      return $this->IsAllowed;
    }

    /**
     * @param boolean $IsAllowed
     * @return \App\models\ATSFlight\XtremePricerSettings
     */
    public function setIsAllowed($IsAllowed)
    {
      $this->IsAllowed = $IsAllowed;
      return $this;
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
     * @return \App\models\ATSFlight\XtremePricerSettings
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
     * @return \App\models\ATSFlight\XtremePricerSettings
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
     * @return \App\models\ATSFlight\XtremePricerSettings
     */
    public function setXPMaxMoveDowns($XPMaxMoveDowns)
    {
      $this->XPMaxMoveDowns = $XPMaxMoveDowns;
      return $this;
    }

    /**
     * @return TmpXPSearchModeEnum
     */
    public function getXPSearchMode()
    {
      return $this->XPSearchMode;
    }

    /**
     * @param TmpXPSearchModeEnum $XPSearchMode
     * @return \App\models\ATSFlight\XtremePricerSettings
     */
    public function setXPSearchMode($XPSearchMode)
    {
      $this->XPSearchMode = $XPSearchMode;
      return $this;
    }

}
