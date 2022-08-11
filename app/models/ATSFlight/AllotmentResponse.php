<?php

namespace App\models\ATSFlight;

class AllotmentResponse
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
     * @var AllotmentTypeEnum $CategoryType
     */
    protected $CategoryType = null;

    /**
     * @var string $ID
     */
    protected $ID = null;

    /**
     * @var string $Identifier
     */
    protected $Identifier = null;

    /**
     * @var boolean $ManatoryPrograms
     */
    protected $ManatoryPrograms = null;

    /**
     * @var string $MatchCode
     */
    protected $MatchCode = null;

    /**
     * @var ArrayOfstring $Programs
     */
    protected $Programs = null;

    /**
     * @var string $Remark
     */
    protected $Remark = null;

    /**
     * @var string $Supplier
     */
    protected $Supplier = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\ATSFlight\AllotmentResponse
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
     * @return \App\models\ATSFlight\AllotmentResponse
     */
    public function setAffiliateCode($AffiliateCode)
    {
      $this->AffiliateCode = $AffiliateCode;
      return $this;
    }

    /**
     * @return AllotmentTypeEnum
     */
    public function getCategoryType()
    {
      return $this->CategoryType;
    }

    /**
     * @param AllotmentTypeEnum $CategoryType
     * @return \App\models\ATSFlight\AllotmentResponse
     */
    public function setCategoryType($CategoryType)
    {
      $this->CategoryType = $CategoryType;
      return $this;
    }

    /**
     * @return string
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param string $ID
     * @return \App\models\ATSFlight\AllotmentResponse
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \App\models\ATSFlight\AllotmentResponse
     */
    public function setIdentifier($Identifier)
    {
      $this->Identifier = $Identifier;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getManatoryPrograms()
    {
      return $this->ManatoryPrograms;
    }

    /**
     * @param boolean $ManatoryPrograms
     * @return \App\models\ATSFlight\AllotmentResponse
     */
    public function setManatoryPrograms($ManatoryPrograms)
    {
      $this->ManatoryPrograms = $ManatoryPrograms;
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
     * @return \App\models\ATSFlight\AllotmentResponse
     */
    public function setMatchCode($MatchCode)
    {
      $this->MatchCode = $MatchCode;
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
     * @return \App\models\ATSFlight\AllotmentResponse
     */
    public function setPrograms($Programs)
    {
      $this->Programs = $Programs;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
      return $this->Remark;
    }

    /**
     * @param string $Remark
     * @return \App\models\ATSFlight\AllotmentResponse
     */
    public function setRemark($Remark)
    {
      $this->Remark = $Remark;
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
     * @return \App\models\ATSFlight\AllotmentResponse
     */
    public function setSupplier($Supplier)
    {
      $this->Supplier = $Supplier;
      return $this;
    }

}
