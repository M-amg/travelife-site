<?php

namespace App\models\ATSFlight;

class QuoteRequestNetData
{

    /**
     * @var int $CalculationGroupNo
     */
    protected $CalculationGroupNo = null;

    /**
     * @var string $ClientLink
     */
    protected $ClientLink = null;

    /**
     * @var string $DBCode
     */
    protected $DBCode = null;

    /**
     * @var ExportTypeEnum $ExportTypes
     */
    protected $ExportTypes = null;

    /**
     * @var ArrayOfstring $MatchCodes
     */
    protected $MatchCodes = null;

    /**
     * @var PercentageFareOptionEnum $PercentageFareOption
     */
    protected $PercentageFareOption = null;

    /**
     * @var NFQETypeEnum $QuoteType
     */
    protected $QuoteType = null;

    /**
     * @var string $SpecialConverterName
     */
    protected $SpecialConverterName = null;

    /**
     * @var boolean $UseDefaultTicketTemplate
     */
    protected $UseDefaultTicketTemplate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getCalculationGroupNo()
    {
      return $this->CalculationGroupNo;
    }

    /**
     * @param int $CalculationGroupNo
     * @return \App\models\ATSFlight\QuoteRequestNetData
     */
    public function setCalculationGroupNo($CalculationGroupNo)
    {
      $this->CalculationGroupNo = $CalculationGroupNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getClientLink()
    {
      return $this->ClientLink;
    }

    /**
     * @param string $ClientLink
     * @return \App\models\ATSFlight\QuoteRequestNetData
     */
    public function setClientLink($ClientLink)
    {
      $this->ClientLink = $ClientLink;
      return $this;
    }

    /**
     * @return string
     */
    public function getDBCode()
    {
      return $this->DBCode;
    }

    /**
     * @param string $DBCode
     * @return \App\models\ATSFlight\QuoteRequestNetData
     */
    public function setDBCode($DBCode)
    {
      $this->DBCode = $DBCode;
      return $this;
    }

    /**
     * @return ExportTypeEnum
     */
    public function getExportTypes()
    {
      return $this->ExportTypes;
    }

    /**
     * @param ExportTypeEnum $ExportTypes
     * @return \App\models\ATSFlight\QuoteRequestNetData
     */
    public function setExportTypes($ExportTypes)
    {
      $this->ExportTypes = $ExportTypes;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getMatchCodes()
    {
      return $this->MatchCodes;
    }

    /**
     * @param ArrayOfstring $MatchCodes
     * @return \App\models\ATSFlight\QuoteRequestNetData
     */
    public function setMatchCodes($MatchCodes)
    {
      $this->MatchCodes = $MatchCodes;
      return $this;
    }

    /**
     * @return PercentageFareOptionEnum
     */
    public function getPercentageFareOption()
    {
      return $this->PercentageFareOption;
    }

    /**
     * @param PercentageFareOptionEnum $PercentageFareOption
     * @return \App\models\ATSFlight\QuoteRequestNetData
     */
    public function setPercentageFareOption($PercentageFareOption)
    {
      $this->PercentageFareOption = $PercentageFareOption;
      return $this;
    }

    /**
     * @return NFQETypeEnum
     */
    public function getQuoteType()
    {
      return $this->QuoteType;
    }

    /**
     * @param NFQETypeEnum $QuoteType
     * @return \App\models\ATSFlight\QuoteRequestNetData
     */
    public function setQuoteType($QuoteType)
    {
      $this->QuoteType = $QuoteType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSpecialConverterName()
    {
      return $this->SpecialConverterName;
    }

    /**
     * @param string $SpecialConverterName
     * @return \App\models\ATSFlight\QuoteRequestNetData
     */
    public function setSpecialConverterName($SpecialConverterName)
    {
      $this->SpecialConverterName = $SpecialConverterName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseDefaultTicketTemplate()
    {
      return $this->UseDefaultTicketTemplate;
    }

    /**
     * @param boolean $UseDefaultTicketTemplate
     * @return \App\models\ATSFlight\QuoteRequestNetData
     */
    public function setUseDefaultTicketTemplate($UseDefaultTicketTemplate)
    {
      $this->UseDefaultTicketTemplate = $UseDefaultTicketTemplate;
      return $this;
    }

}
