<?php

namespace App\models\ATSFlight;

class DiscountData
{

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Community
     */
    protected $Community = null;

    /**
     * @var string $FamilyCertificateNumber
     */
    protected $FamilyCertificateNumber = null;

    /**
     * @var string $FirstLastname
     */
    protected $FirstLastname = null;

    /**
     * @var string $FullFirstname
     */
    protected $FullFirstname = null;

    /**
     * @var string $IDCardNumber
     */
    protected $IDCardNumber = null;

    /**
     * @var string $IDCardType
     */
    protected $IDCardType = null;

    /**
     * @var string $Municipality
     */
    protected $Municipality = null;

    /**
     * @var int $PassengerSelection
     */
    protected $PassengerSelection = null;

    /**
     * @var string $SecondLastname
     */
    protected $SecondLastname = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \App\models\ATSFlight\DiscountData
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getCommunity()
    {
      return $this->Community;
    }

    /**
     * @param string $Community
     * @return \App\models\ATSFlight\DiscountData
     */
    public function setCommunity($Community)
    {
      $this->Community = $Community;
      return $this;
    }

    /**
     * @return string
     */
    public function getFamilyCertificateNumber()
    {
      return $this->FamilyCertificateNumber;
    }

    /**
     * @param string $FamilyCertificateNumber
     * @return \App\models\ATSFlight\DiscountData
     */
    public function setFamilyCertificateNumber($FamilyCertificateNumber)
    {
      $this->FamilyCertificateNumber = $FamilyCertificateNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstLastname()
    {
      return $this->FirstLastname;
    }

    /**
     * @param string $FirstLastname
     * @return \App\models\ATSFlight\DiscountData
     */
    public function setFirstLastname($FirstLastname)
    {
      $this->FirstLastname = $FirstLastname;
      return $this;
    }

    /**
     * @return string
     */
    public function getFullFirstname()
    {
      return $this->FullFirstname;
    }

    /**
     * @param string $FullFirstname
     * @return \App\models\ATSFlight\DiscountData
     */
    public function setFullFirstname($FullFirstname)
    {
      $this->FullFirstname = $FullFirstname;
      return $this;
    }

    /**
     * @return string
     */
    public function getIDCardNumber()
    {
      return $this->IDCardNumber;
    }

    /**
     * @param string $IDCardNumber
     * @return \App\models\ATSFlight\DiscountData
     */
    public function setIDCardNumber($IDCardNumber)
    {
      $this->IDCardNumber = $IDCardNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getIDCardType()
    {
      return $this->IDCardType;
    }

    /**
     * @param string $IDCardType
     * @return \App\models\ATSFlight\DiscountData
     */
    public function setIDCardType($IDCardType)
    {
      $this->IDCardType = $IDCardType;
      return $this;
    }

    /**
     * @return string
     */
    public function getMunicipality()
    {
      return $this->Municipality;
    }

    /**
     * @param string $Municipality
     * @return \App\models\ATSFlight\DiscountData
     */
    public function setMunicipality($Municipality)
    {
      $this->Municipality = $Municipality;
      return $this;
    }

    /**
     * @return int
     */
    public function getPassengerSelection()
    {
      return $this->PassengerSelection;
    }

    /**
     * @param int $PassengerSelection
     * @return \App\models\ATSFlight\DiscountData
     */
    public function setPassengerSelection($PassengerSelection)
    {
      $this->PassengerSelection = $PassengerSelection;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecondLastname()
    {
      return $this->SecondLastname;
    }

    /**
     * @param string $SecondLastname
     * @return \App\models\ATSFlight\DiscountData
     */
    public function setSecondLastname($SecondLastname)
    {
      $this->SecondLastname = $SecondLastname;
      return $this;
    }

}
