<?php

namespace App\models\ATSFlight;

class ProcessingResponseData
{

    /**
     * @var PNRResponseData $PNR
     */
    protected $PNR = null;

    /**
     * @var ArrayOfProcessingResponseProcess $Processes
     */
    protected $Processes = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

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
     * @return PNRResponseData
     */
    public function getPNR()
    {
      return $this->PNR;
    }

    /**
     * @param PNRResponseData $PNR
     * @return \App\models\ATSFlight\ProcessingResponseData
     */
    public function setPNR($PNR)
    {
      $this->PNR = $PNR;
      return $this;
    }

    /**
     * @return ArrayOfProcessingResponseProcess
     */
    public function getProcesses()
    {
      return $this->Processes;
    }

    /**
     * @param ArrayOfProcessingResponseProcess $Processes
     * @return \App\models\ATSFlight\ProcessingResponseData
     */
    public function setProcesses($Processes)
    {
      $this->Processes = $Processes;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordLocator()
    {
      return $this->RecordLocator;
    }

    /**
     * @param string $RecordLocator
     * @return \App\models\ATSFlight\ProcessingResponseData
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
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
     * @return \App\models\ATSFlight\ProcessingResponseData
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
     * @return \App\models\ATSFlight\ProcessingResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
