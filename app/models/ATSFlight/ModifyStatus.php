<?php

namespace App\models\ATSFlight;

class ModifyStatus
{

    /**
     * @var string $NewSegmentStatus
     */
    protected $NewSegmentStatus = null;

    /**
     * @var int $SegmentIndex
     */
    protected $SegmentIndex = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getNewSegmentStatus()
    {
      return $this->NewSegmentStatus;
    }

    /**
     * @param string $NewSegmentStatus
     * @return \App\models\ATSFlight\ModifyStatus
     */
    public function setNewSegmentStatus($NewSegmentStatus)
    {
      $this->NewSegmentStatus = $NewSegmentStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getSegmentIndex()
    {
      return $this->SegmentIndex;
    }

    /**
     * @param int $SegmentIndex
     * @return \App\models\ATSFlight\ModifyStatus
     */
    public function setSegmentIndex($SegmentIndex)
    {
      $this->SegmentIndex = $SegmentIndex;
      return $this;
    }

}
