<?php

namespace App\models\ATSFlight;

class BrowseRequestQueueStruct
{

    /**
     * @var string $Category
     */
    protected $Category = null;

    /**
     * @var int $NumberOfElements
     */
    protected $NumberOfElements = null;

    /**
     * @var string $Queue
     */
    protected $Queue = null;

    /**
     * @var int $StartWithElement
     */
    protected $StartWithElement = null;

    
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
     * @return \App\models\ATSFlight\BrowseRequestQueueStruct
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfElements()
    {
      return $this->NumberOfElements;
    }

    /**
     * @param int $NumberOfElements
     * @return \App\models\ATSFlight\BrowseRequestQueueStruct
     */
    public function setNumberOfElements($NumberOfElements)
    {
      $this->NumberOfElements = $NumberOfElements;
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
     * @return \App\models\ATSFlight\BrowseRequestQueueStruct
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartWithElement()
    {
      return $this->StartWithElement;
    }

    /**
     * @param int $StartWithElement
     * @return \App\models\ATSFlight\BrowseRequestQueueStruct
     */
    public function setStartWithElement($StartWithElement)
    {
      $this->StartWithElement = $StartWithElement;
      return $this;
    }

}
