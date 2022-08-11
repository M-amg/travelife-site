<?php

namespace App\models\ATSFlight;

class ModifyBookingClass
{

    /**
     * @var string $NewBookingClass
     */
    protected $NewBookingClass = null;

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
    public function getNewBookingClass()
    {
      return $this->NewBookingClass;
    }

    /**
     * @param string $NewBookingClass
     * @return \App\models\ATSFlight\ModifyBookingClass
     */
    public function setNewBookingClass($NewBookingClass)
    {
      $this->NewBookingClass = $NewBookingClass;
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
     * @return \App\models\ATSFlight\ModifyBookingClass
     */
    public function setSegmentIndex($SegmentIndex)
    {
      $this->SegmentIndex = $SegmentIndex;
      return $this;
    }

}
