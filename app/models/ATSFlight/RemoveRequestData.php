<?php

namespace App\models\ATSFlight;

class RemoveRequestData
{

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var ArrayOfRemovePNRData $PNRs
     */
    protected $PNRs = null;

    /**
     * @var ArrayOfRemoveQueueData $Queues
     */
    protected $Queues = null;

    /**
     * @var string $Session
     */
    protected $Session = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @param SourceModuleEnum $Source
     */
    public function __construct($Source)
    {
      $this->Source = $Source;
    }

    /**
     * @return CRS
     */
    public function getCRSConfig()
    {
      return $this->CRSConfig;
    }

    /**
     * @param CRS $CRSConfig
     * @return \App\models\ATSFlight\RemoveRequestData
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return ArrayOfRemovePNRData
     */
    public function getPNRs()
    {
      return $this->PNRs;
    }

    /**
     * @param ArrayOfRemovePNRData $PNRs
     * @return \App\models\ATSFlight\RemoveRequestData
     */
    public function setPNRs($PNRs)
    {
      $this->PNRs = $PNRs;
      return $this;
    }

    /**
     * @return ArrayOfRemoveQueueData
     */
    public function getQueues()
    {
      return $this->Queues;
    }

    /**
     * @param ArrayOfRemoveQueueData $Queues
     * @return \App\models\ATSFlight\RemoveRequestData
     */
    public function setQueues($Queues)
    {
      $this->Queues = $Queues;
      return $this;
    }

    /**
     * @return string
     */
    public function getSession()
    {
      return $this->Session;
    }

    /**
     * @param string $Session
     * @return \App\models\ATSFlight\RemoveRequestData
     */
    public function setSession($Session)
    {
      $this->Session = $Session;
      return $this;
    }

    /**
     * @return SourceModuleEnum
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param SourceModuleEnum $Source
     * @return \App\models\ATSFlight\RemoveRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
