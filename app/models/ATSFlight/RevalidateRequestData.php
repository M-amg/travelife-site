<?php

namespace App\models\ATSFlight;

class RevalidateRequestData
{

    /**
     * @var CRS $CRSConfig
     */
    protected $CRSConfig = null;

    /**
     * @var string $RecordLocator
     */
    protected $RecordLocator = null;

    /**
     * @var string $Session
     */
    protected $Session = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @var ArrayOfstring $TicketNumbers
     */
    protected $TicketNumbers = null;

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
     * @return \App\models\ATSFlight\RevalidateRequestData
     */
    public function setCRSConfig($CRSConfig)
    {
      $this->CRSConfig = $CRSConfig;
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
     * @return \App\models\ATSFlight\RevalidateRequestData
     */
    public function setRecordLocator($RecordLocator)
    {
      $this->RecordLocator = $RecordLocator;
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
     * @return \App\models\ATSFlight\RevalidateRequestData
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
     * @return \App\models\ATSFlight\RevalidateRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getTicketNumbers()
    {
      return $this->TicketNumbers;
    }

    /**
     * @param ArrayOfstring $TicketNumbers
     * @return \App\models\ATSFlight\RevalidateRequestData
     */
    public function setTicketNumbers($TicketNumbers)
    {
      $this->TicketNumbers = $TicketNumbers;
      return $this;
    }

}
