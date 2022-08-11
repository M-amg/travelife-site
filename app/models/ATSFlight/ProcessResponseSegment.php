<?php

namespace App\models\ATSFlight;

class ProcessResponseSegment
{

    /**
     * @var ProcessResponseSegmentDetails $Details
     */
    protected $Details = null;

    /**
     * @var ProcessResponseStatus $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ProcessResponseSegmentDetails
     */
    public function getDetails()
    {
      return $this->Details;
    }

    /**
     * @param ProcessResponseSegmentDetails $Details
     * @return \App\models\ATSFlight\ProcessResponseSegment
     */
    public function setDetails($Details)
    {
      $this->Details = $Details;
      return $this;
    }

    /**
     * @return ProcessResponseStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param ProcessResponseStatus $Status
     * @return \App\models\ATSFlight\ProcessResponseSegment
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
