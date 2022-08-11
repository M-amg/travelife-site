<?php

namespace App\models\ATSFlight;

class FormOfIdentification
{

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var string $Issuer
     */
    protected $Issuer = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var FOIDTypeEnum $Type
     */
    protected $Type = null;

    /**
     * @param FOIDTypeEnum $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getCarrierCode()
    {
      return $this->CarrierCode;
    }

    /**
     * @param string $CarrierCode
     * @return \App\models\ATSFlight\FormOfIdentification
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getIssuer()
    {
      return $this->Issuer;
    }

    /**
     * @param string $Issuer
     * @return \App\models\ATSFlight\FormOfIdentification
     */
    public function setIssuer($Issuer)
    {
      $this->Issuer = $Issuer;
      return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param string $Number
     * @return \App\models\ATSFlight\FormOfIdentification
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return FOIDTypeEnum
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param FOIDTypeEnum $Type
     * @return \App\models\ATSFlight\FormOfIdentification
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
