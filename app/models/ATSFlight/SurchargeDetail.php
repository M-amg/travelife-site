<?php

namespace App\models\ATSFlight;

class SurchargeDetail
{

    /**
     * @var SharedPrice $Amount
     */
    protected $Amount = null;

    /**
     * @var SharedPrice $EquivalentAmount
     */
    protected $EquivalentAmount = null;

    /**
     * @var string $SurchargeName
     */
    protected $SurchargeName = null;

    /**
     * @var string $SurchargeRemark
     */
    protected $SurchargeRemark = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getAmount()
    {
      return $this->Amount;
    }

    /**
     * @param SharedPrice $Amount
     * @return \App\models\ATSFlight\SurchargeDetail
     */
    public function setAmount($Amount)
    {
      $this->Amount = $Amount;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentAmount()
    {
      return $this->EquivalentAmount;
    }

    /**
     * @param SharedPrice $EquivalentAmount
     * @return \App\models\ATSFlight\SurchargeDetail
     */
    public function setEquivalentAmount($EquivalentAmount)
    {
      $this->EquivalentAmount = $EquivalentAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getSurchargeName()
    {
      return $this->SurchargeName;
    }

    /**
     * @param string $SurchargeName
     * @return \App\models\ATSFlight\SurchargeDetail
     */
    public function setSurchargeName($SurchargeName)
    {
      $this->SurchargeName = $SurchargeName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSurchargeRemark()
    {
      return $this->SurchargeRemark;
    }

    /**
     * @param string $SurchargeRemark
     * @return \App\models\ATSFlight\SurchargeDetail
     */
    public function setSurchargeRemark($SurchargeRemark)
    {
      $this->SurchargeRemark = $SurchargeRemark;
      return $this;
    }

}
