<?php

namespace App\models\ATSFlight;

class RemoveResponsePNRData
{

    /**
     * @var RemovePNRData $PNR
     */
    protected $PNR = null;

    /**
     * @var ArrayOfRemoveResponseQueueData $Queues
     */
    protected $Queues = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RemovePNRData
     */
    public function getPNR()
    {
      return $this->PNR;
    }

    /**
     * @param RemovePNRData $PNR
     * @return \App\models\ATSFlight\RemoveResponsePNRData
     */
    public function setPNR($PNR)
    {
      $this->PNR = $PNR;
      return $this;
    }

    /**
     * @return ArrayOfRemoveResponseQueueData
     */
    public function getQueues()
    {
      return $this->Queues;
    }

    /**
     * @param ArrayOfRemoveResponseQueueData $Queues
     * @return \App\models\ATSFlight\RemoveResponsePNRData
     */
    public function setQueues($Queues)
    {
      $this->Queues = $Queues;
      return $this;
    }

}
