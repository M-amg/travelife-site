<?php

namespace App\models\ATSFlight;

class AllotmentRequest
{

    /**
     * @var AllotmentAccount $Account
     */
    protected $Account = null;

    /**
     * @var string $AffiliateCode
     */
    protected $AffiliateCode = null;

    /**
     * @var EnhancedAllotmentEnum $EnhancedSearch
     */
    protected $EnhancedSearch = null;

    /**
     * @var string $Identifier
     */
    protected $Identifier = null;

    /**
     * @var boolean $IgnoreAllDeadlines
     */
    protected $IgnoreAllDeadlines = null;

    /**
     * @var string $MatchCode
     */
    protected $MatchCode = null;

    /**
     * @var boolean $OnlyAllotments
     */
    protected $OnlyAllotments = null;

    /**
     * @var AllotmentPriorityEnum $Priority
     */
    protected $Priority = null;

    /**
     * @var ArrayOfstring $Programs
     */
    protected $Programs = null;

    /**
     * @var RefillmentTypeEnum $RefillmentType
     */
    protected $RefillmentType = null;

    /**
     * @var string $Supplier
     */
    protected $Supplier = null;

    /**
     * @var AllotmentTypeEnum $Type
     */
    protected $Type = null;

    /**
     * @param AllotmentPriorityEnum $Priority
     * @param AllotmentTypeEnum $Type
     */
    public function __construct($Priority, $Type)
    {
      $this->Priority = $Priority;
      $this->Type = $Type;
    }

    /**
     * @return AllotmentAccount
     */
    public function getAccount()
    {
      return $this->Account;
    }

    /**
     * @param AllotmentAccount $Account
     * @return \App\models\ATSFlight\AllotmentRequest
     */
    public function setAccount($Account)
    {
      $this->Account = $Account;
      return $this;
    }

    /**
     * @return string
     */
    public function getAffiliateCode()
    {
      return $this->AffiliateCode;
    }

    /**
     * @param string $AffiliateCode
     * @return \App\models\ATSFlight\AllotmentRequest
     */
    public function setAffiliateCode($AffiliateCode)
    {
      $this->AffiliateCode = $AffiliateCode;
      return $this;
    }

    /**
     * @return EnhancedAllotmentEnum
     */
    public function getEnhancedSearch()
    {
      return $this->EnhancedSearch;
    }

    /**
     * @param EnhancedAllotmentEnum $EnhancedSearch
     * @return \App\models\ATSFlight\AllotmentRequest
     */
    public function setEnhancedSearch($EnhancedSearch)
    {
      $this->EnhancedSearch = $EnhancedSearch;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
      return $this->Identifier;
    }

    /**
     * @param string $Identifier
     * @return \App\models\ATSFlight\AllotmentRequest
     */
    public function setIdentifier($Identifier)
    {
      $this->Identifier = $Identifier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIgnoreAllDeadlines()
    {
      return $this->IgnoreAllDeadlines;
    }

    /**
     * @param boolean $IgnoreAllDeadlines
     * @return \App\models\ATSFlight\AllotmentRequest
     */
    public function setIgnoreAllDeadlines($IgnoreAllDeadlines)
    {
      $this->IgnoreAllDeadlines = $IgnoreAllDeadlines;
      return $this;
    }

    /**
     * @return string
     */
    public function getMatchCode()
    {
      return $this->MatchCode;
    }

    /**
     * @param string $MatchCode
     * @return \App\models\ATSFlight\AllotmentRequest
     */
    public function setMatchCode($MatchCode)
    {
      $this->MatchCode = $MatchCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyAllotments()
    {
      return $this->OnlyAllotments;
    }

    /**
     * @param boolean $OnlyAllotments
     * @return \App\models\ATSFlight\AllotmentRequest
     */
    public function setOnlyAllotments($OnlyAllotments)
    {
      $this->OnlyAllotments = $OnlyAllotments;
      return $this;
    }

    /**
     * @return AllotmentPriorityEnum
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param AllotmentPriorityEnum $Priority
     * @return \App\models\ATSFlight\AllotmentRequest
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getPrograms()
    {
      return $this->Programs;
    }

    /**
     * @param ArrayOfstring $Programs
     * @return \App\models\ATSFlight\AllotmentRequest
     */
    public function setPrograms($Programs)
    {
      $this->Programs = $Programs;
      return $this;
    }

    /**
     * @return RefillmentTypeEnum
     */
    public function getRefillmentType()
    {
      return $this->RefillmentType;
    }

    /**
     * @param RefillmentTypeEnum $RefillmentType
     * @return \App\models\ATSFlight\AllotmentRequest
     */
    public function setRefillmentType($RefillmentType)
    {
      $this->RefillmentType = $RefillmentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplier()
    {
      return $this->Supplier;
    }

    /**
     * @param string $Supplier
     * @return \App\models\ATSFlight\AllotmentRequest
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

    /**
     * @return AllotmentTypeEnum
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param AllotmentTypeEnum $Type
     * @return \App\models\ATSFlight\AllotmentRequest
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
