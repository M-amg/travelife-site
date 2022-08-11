<?php

namespace App\models\ATSFlight;

class TicketResponseData
{

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var ArrayOfTicketResponseInformation $TicketInformation
     */
    protected $TicketInformation = null;

    
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
     * @return \App\models\ATSFlight\TicketResponseData
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
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
     * @return \App\models\ATSFlight\TicketResponseData
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
     * @return \App\models\ATSFlight\TicketResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return ArrayOfTicketResponseInformation
     */
    public function getTicketInformation()
    {
      return $this->TicketInformation;
    }

    /**
     * @param ArrayOfTicketResponseInformation $TicketInformation
     * @return \App\models\ATSFlight\TicketResponseData
     */
    public function setTicketInformation($TicketInformation)
    {
      $this->TicketInformation = $TicketInformation;
      return $this;
    }

}
