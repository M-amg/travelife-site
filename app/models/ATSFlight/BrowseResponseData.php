<?php

namespace App\models\ATSFlight;

class BrowseResponseData
{

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var ArrayOfBrowseResponseQueueItem $QueueItems
     */
    protected $QueueItems = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ModuleResponseData
     */
    public function getModuleInfo()
    {
      return $this->ModuleInfo;
    }

    /**
     * @param ModuleResponseData $ModuleInfo
     * @return \App\models\ATSFlight\BrowseResponseData
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
      return $this;
    }

    /**
     * @return ArrayOfBrowseResponseQueueItem
     */
    public function getQueueItems()
    {
      return $this->QueueItems;
    }

    /**
     * @param ArrayOfBrowseResponseQueueItem $QueueItems
     * @return \App\models\ATSFlight\BrowseResponseData
     */
    public function setQueueItems($QueueItems)
    {
      $this->QueueItems = $QueueItems;
      return $this;
    }

    /**
     * @return ResponseInfoDetails
     */
    public function getResponseInfo()
    {
      return $this->ResponseInfo;
    }

    /**
     * @param ResponseInfoDetails $ResponseInfo
     * @return \App\models\ATSFlight\BrowseResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
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
     * @return \App\models\ATSFlight\BrowseResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
