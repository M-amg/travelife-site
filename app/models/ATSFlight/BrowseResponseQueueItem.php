<?php

namespace App\models\ATSFlight;

class BrowseResponseQueueItem
{

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var int $ErrorCode
     */
    protected $ErrorCode = null;

    /**
     * @var string $ErrorText
     */
    protected $ErrorText = null;

    /**
     * @var int $NumberOfPNRs
     */
    protected $NumberOfPNRs = null;

    /**
     * @var string $Queue
     */
    protected $Queue = null;

    /**
     * @var ArrayOfBrowseResponseRecordLocatorItem $RecordLocators
     */
    protected $RecordLocators = null;

    
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
     * @return \App\models\ATSFlight\BrowseResponseQueueItem
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return int
     */
    public function getErrorCode()
    {
      return $this->ErrorCode;
    }

    /**
     * @param int $ErrorCode
     * @return \App\models\ATSFlight\BrowseResponseQueueItem
     */
    public function setErrorCode($ErrorCode)
    {
      $this->ErrorCode = $ErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorText()
    {
      return $this->ErrorText;
    }

    /**
     * @param string $ErrorText
     * @return \App\models\ATSFlight\BrowseResponseQueueItem
     */
    public function setErrorText($ErrorText)
    {
      $this->ErrorText = $ErrorText;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfPNRs()
    {
      return $this->NumberOfPNRs;
    }

    /**
     * @param int $NumberOfPNRs
     * @return \App\models\ATSFlight\BrowseResponseQueueItem
     */
    public function setNumberOfPNRs($NumberOfPNRs)
    {
      $this->NumberOfPNRs = $NumberOfPNRs;
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
     * @return \App\models\ATSFlight\BrowseResponseQueueItem
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

    /**
     * @return ArrayOfBrowseResponseRecordLocatorItem
     */
    public function getRecordLocators()
    {
      return $this->RecordLocators;
    }

    /**
     * @param ArrayOfBrowseResponseRecordLocatorItem $RecordLocators
     * @return \App\models\ATSFlight\BrowseResponseQueueItem
     */
    public function setRecordLocators($RecordLocators)
    {
      $this->RecordLocators = $RecordLocators;
      return $this;
    }

}
