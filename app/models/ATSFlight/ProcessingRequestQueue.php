<?php

namespace App\models\ATSFlight;

class ProcessingRequestQueue
{

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var string $DestinationPCC
     */
    protected $DestinationPCC = null;

    /**
     * @var boolean $EnableBranchAccess
     */
    protected $EnableBranchAccess = null;

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
    public function getCategory()
    {
      return $this->Category;
    }

    /**
     * @param string $Category
     * @return \App\models\ATSFlight\ProcessingRequestQueue
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return string
     */
    public function getDestinationPCC()
    {
      return $this->DestinationPCC;
    }

    /**
     * @param string $DestinationPCC
     * @return \App\models\ATSFlight\ProcessingRequestQueue
     */
    public function setDestinationPCC($DestinationPCC)
    {
      $this->DestinationPCC = $DestinationPCC;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableBranchAccess()
    {
      return $this->EnableBranchAccess;
    }

    /**
     * @param boolean $EnableBranchAccess
     * @return \App\models\ATSFlight\ProcessingRequestQueue
     */
    public function setEnableBranchAccess($EnableBranchAccess)
    {
      $this->EnableBranchAccess = $EnableBranchAccess;
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
     * @return \App\models\ATSFlight\ProcessingRequestQueue
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

}
