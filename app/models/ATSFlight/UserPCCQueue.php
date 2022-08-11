<?php

namespace App\models\ATSFlight;

class UserPCCQueue
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
     * @var string $QueueMainType
     */
    protected $QueueMainType = null;

    /**
     * @var string $QueueSubType
     */
    protected $QueueSubType = null;

    /**
     * @var string $TerminalPCC
     */
    protected $TerminalPCC = null;

    /**
     * @var string $TicketPCC
     */
    protected $TicketPCC = null;

    
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
     * @return \App\models\ATSFlight\UserPCCQueue
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
     * @return \App\models\ATSFlight\UserPCCQueue
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
     * @return \App\models\ATSFlight\UserPCCQueue
     */
    public function setQueueFunctionType($QueueFunctionType)
    {
      $this->QueueFunctionType = $QueueFunctionType;
      return $this;
    }

    /**
     * @return string
     */
    public function getQueueMainType()
    {
      return $this->QueueMainType;
    }

    /**
     * @param string $QueueMainType
     * @return \App\models\ATSFlight\UserPCCQueue
     */
    public function setQueueMainType($QueueMainType)
    {
      $this->QueueMainType = $QueueMainType;
      return $this;
    }

    /**
     * @return string
     */
    public function getQueueSubType()
    {
      return $this->QueueSubType;
    }

    /**
     * @param string $QueueSubType
     * @return \App\models\ATSFlight\UserPCCQueue
     */
    public function setQueueSubType($QueueSubType)
    {
      $this->QueueSubType = $QueueSubType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTerminalPCC()
    {
      return $this->TerminalPCC;
    }

    /**
     * @param string $TerminalPCC
     * @return \App\models\ATSFlight\UserPCCQueue
     */
    public function setTerminalPCC($TerminalPCC)
    {
      $this->TerminalPCC = $TerminalPCC;
      return $this;
    }

    /**
     * @return string
     */
    public function getTicketPCC()
    {
      return $this->TicketPCC;
    }

    /**
     * @param string $TicketPCC
     * @return \App\models\ATSFlight\UserPCCQueue
     */
    public function setTicketPCC($TicketPCC)
    {
      $this->TicketPCC = $TicketPCC;
      return $this;
    }

}
