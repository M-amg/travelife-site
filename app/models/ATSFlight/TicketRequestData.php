<?php

namespace App\models\ATSFlight;

class TicketRequestData
{

    /**
     * @var boolean $IsRoundTrip
     */
    protected $IsRoundTrip = null;

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
     * @return boolean
     */
    public function getIsRoundTrip()
    {
      return $this->IsRoundTrip;
    }

    /**
     * @param boolean $IsRoundTrip
     * @return \App\models\ATSFlight\TicketRequestData
     */
    public function setIsRoundTrip($IsRoundTrip)
    {
      $this->IsRoundTrip = $IsRoundTrip;
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
     * @return \App\models\ATSFlight\TicketRequestData
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
     * @return \App\models\ATSFlight\TicketRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
