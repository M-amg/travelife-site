<?php

namespace App\models\ATSFlight;

class RemoveQueueData
{

    /**
     * @var string $Category
     */
    protected $Category = null;

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
     * @return \App\models\ATSFlight\RemoveQueueData
     */
    public function setCategory($Category)
    {
      $this->Category = $Category;
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
     * @return \App\models\ATSFlight\RemoveQueueData
     */
    public function setQueue($Queue)
    {
      $this->Queue = $Queue;
      return $this;
    }

}
