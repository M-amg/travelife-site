<?php

namespace App\models\ATSFlight;

class RoutingRequestData
{

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var ArrayOfstring $RecordSets
     */
    protected $RecordSets = null;

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
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \App\models\ATSFlight\RoutingRequestData
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getRecordSets()
    {
      return $this->RecordSets;
    }

    /**
     * @param ArrayOfstring $RecordSets
     * @return \App\models\ATSFlight\RoutingRequestData
     */
    public function setRecordSets($RecordSets)
    {
      $this->RecordSets = $RecordSets;
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
     * @return \App\models\ATSFlight\RoutingRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
