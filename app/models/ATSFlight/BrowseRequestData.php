<?php

namespace App\models\ATSFlight;

class BrowseRequestData
{

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var BrowseModeEnum $Mode
     */
    protected $Mode = null;

    /**
     * @var ArrayOfBrowseRequestQueueStruct $Queues
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
     * @param BrowseModeEnum $Mode
     * @param SourceModuleEnum $Source
     */
    public function __construct($Mode, $Source)
    {
      $this->Mode = $Mode;
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
     * @return \App\models\ATSFlight\BrowseRequestData
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
      return $this;
    }

    /**
     * @return BrowseModeEnum
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param BrowseModeEnum $Mode
     * @return \App\models\ATSFlight\BrowseRequestData
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return ArrayOfBrowseRequestQueueStruct
     */
    public function getQueues()
    {
      return $this->Queues;
    }

    /**
     * @param ArrayOfBrowseRequestQueueStruct $Queues
     * @return \App\models\ATSFlight\BrowseRequestData
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
     * @return \App\models\ATSFlight\BrowseRequestData
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
     * @return \App\models\ATSFlight\BrowseRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
