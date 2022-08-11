<?php

namespace App\models\ATSFlight;

class RuleRequestData
{

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var boolean $IsRoundtrip
     */
    protected $IsRoundtrip = null;

    /**
     * @var ArrayOfstring $RecordSets
     */
    protected $RecordSets = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    /**
     * @param boolean $IsRoundtrip
     * @param SourceModuleEnum $Source
     */
    public function __construct($IsRoundtrip, $Source)
    {
      $this->IsRoundtrip = $IsRoundtrip;
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
     * @return \App\models\ATSFlight\RuleRequestData
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRoundtrip()
    {
      return $this->IsRoundtrip;
    }

    /**
     * @param boolean $IsRoundtrip
     * @return \App\models\ATSFlight\RuleRequestData
     */
    public function setIsRoundtrip($IsRoundtrip)
    {
      $this->IsRoundtrip = $IsRoundtrip;
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
     * @return \App\models\ATSFlight\RuleRequestData
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
     * @return \App\models\ATSFlight\RuleRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
