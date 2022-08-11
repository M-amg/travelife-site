<?php

namespace App\models\ATSFlight;

class PNRResponseLocation
{

    /**
     * @var string $BranchID
     */
    protected $BranchID = null;

    /**
     * @var string $Queue
     */
    protected $Queue = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBranchID()
    {
      return $this->BranchID;
    }

    /**
     * @param string $BranchID
     * @return \App\models\ATSFlight\PNRResponseLocation
     */
    public function setBranchID($BranchID)
    {
      $this->BranchID = $BranchID;
      return $this;
    }

    /**
     * @return string
     */
    public function getQueue()
    {
      return $this->Queue;
    }

    /**
     * @param string $Queue
     * @return \App\models\ATSFlight\PNRResponseLocation
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

}
