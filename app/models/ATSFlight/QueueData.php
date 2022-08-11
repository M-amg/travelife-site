<?php

namespace App\models\ATSFlight;

class QueueData
{

    /**
     * @var string $Queue
     */
    protected $Queue = null;

    /**
     * @var string $QueueCategory
     */
    protected $QueueCategory = null;

    /**
     * @var eQueueFunctionType $QueueFunctionType
     */
    protected $QueueFunctionType = null;

    /**
     * @var QueueMainTypeEnum $QueueMainType
     */
    protected $QueueMainType = null;

    /**
     * @var QueueSubTypeEnum $QueueSubType
     */
    protected $QueueSubType = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\QueueData
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

    /**
     * @return string
     */
    public function getQueueCategory()
    {
      return $this->QueueCategory;
    }

    /**
     * @param string $QueueCategory
     * @return \App\models\ATSFlight\QueueData
     */
    public function setQueueCategory($QueueCategory)
    {
      $this->QueueCategory = $QueueCategory;
      return $this;
    }

    /**
     * @return eQueueFunctionType
     */
    public function getQueueFunctionType()
    {
      return $this->QueueFunctionType;
    }

    /**
     * @param eQueueFunctionType $QueueFunctionType
     * @return \App\models\ATSFlight\QueueData
     */
    public function setQueueFunctionType($QueueFunctionType)
    {
      $this->QueueFunctionType = $QueueFunctionType;
      return $this;
    }

    /**
     * @return QueueMainTypeEnum
     */
    public function getQueueMainType()
    {
      return $this->QueueMainType;
    }

    /**
     * @param QueueMainTypeEnum $QueueMainType
     * @return \App\models\ATSFlight\QueueData
     */
    public function setQueueMainType($QueueMainType)
    {
      $this->QueueMainType = $QueueMainType;
      return $this;
    }

    /**
     * @return QueueSubTypeEnum
     */
    public function getQueueSubType()
    {
      return $this->QueueSubType;
    }

    /**
     * @param QueueSubTypeEnum $QueueSubType
     * @return \App\models\ATSFlight\QueueData
     */
    public function setQueueSubType($QueueSubType)
    {
      $this->QueueSubType = $QueueSubType;
      return $this;
    }

}
