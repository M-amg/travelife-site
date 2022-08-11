<?php

namespace App\models\ATSFlight;

class RuleResponseInformation
{

    /**
     * @var string $EquivCurrency
     */
    protected $EquivCurrency = null;

    /**
     * @var string $RecordSet
     */
    protected $RecordSet = null;

    /**
     * @var ArrayOfRuleResponseRule $Rule
     */
    protected $Rule = null;

    /**
     * @var string $Supplier
     */
    protected $Supplier = null;

    /**
     * @var string $SupplierCode
     */
    protected $SupplierCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getEquivCurrency()
    {
      return $this->EquivCurrency;
    }

    /**
     * @param string $EquivCurrency
     * @return \App\models\ATSFlight\RuleResponseInformation
     */
    public function setEquivCurrency($EquivCurrency)
    {
      $this->EquivCurrency = $EquivCurrency;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordSet()
    {
      return $this->RecordSet;
    }

    /**
     * @param string $RecordSet
     * @return \App\models\ATSFlight\RuleResponseInformation
     */
    public function setRecordSet($RecordSet)
    {
      $this->RecordSet = $RecordSet;
      return $this;
    }

    /**
     * @return ArrayOfRuleResponseRule
     */
    public function getRule()
    {
      return $this->Rule;
    }

    /**
     * @param ArrayOfRuleResponseRule $Rule
     * @return \App\models\ATSFlight\RuleResponseInformation
     */
    public function setRule($Rule)
    {
      $this->Rule = $Rule;
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
     * @return \App\models\ATSFlight\RuleResponseInformation
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

    /**
     * @return string
     */
    public function getSupplierCode()
    {
      return $this->SupplierCode;
    }

    /**
     * @param string $SupplierCode
     * @return \App\models\ATSFlight\RuleResponseInformation
     */
    public function setSupplierCode($SupplierCode)
    {
      $this->SupplierCode = $SupplierCode;
      return $this;
    }

}
