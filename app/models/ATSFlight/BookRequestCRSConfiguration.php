<?php

namespace App\models\ATSFlight;

class BookRequestCRSConfiguration extends CRS
{

    /**
     * @var boolean $AllowBranchAccess
     */
    protected $AllowBranchAccess = null;

    /**
     * @var boolean $AllowWaitList
     */
    protected $AllowWaitList = null;

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var string $DestinationPCC
     */
    protected $DestinationPCC = null;

    /**
     * @var string $Queue
     */
    protected $Queue = null;

    /**
     * @var int $ReturnStatus
     */
    protected $ReturnStatus = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getAllowBranchAccess()
    {
      return $this->AllowBranchAccess;
    }

    /**
     * @param boolean $AllowBranchAccess
     * @return \App\models\ATSFlight\BookRequestCRSConfiguration
     */
    public function setAllowBranchAccess($AllowBranchAccess)
    {
      $this->AllowBranchAccess = $AllowBranchAccess;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowWaitList()
    {
      return $this->AllowWaitList;
    }

    /**
     * @param boolean $AllowWaitList
     * @return \App\models\ATSFlight\BookRequestCRSConfiguration
     */
    public function setAllowWaitList($AllowWaitList)
    {
      $this->AllowWaitList = $AllowWaitList;
      return $this;
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
     * @return \App\models\ATSFlight\BookRequestCRSConfiguration
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
     * @return \App\models\ATSFlight\BookRequestCRSConfiguration
     */
    public function setDestinationPCC($DestinationPCC)
    {
      $this->DestinationPCC = $DestinationPCC;
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
     * @return \App\models\ATSFlight\BookRequestCRSConfiguration
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

    /**
     * @return int
     */
    public function getReturnStatus()
    {
      return $this->ReturnStatus;
    }

    /**
     * @param int $ReturnStatus
     * @return \App\models\ATSFlight\BookRequestCRSConfiguration
     */
    public function setReturnStatus($ReturnStatus)
    {
      $this->ReturnStatus = $ReturnStatus;
      return $this;
    }

}
