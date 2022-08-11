<?php

namespace App\models\ATSFlight;

class PhoneDetails
{

    /**
     * @var string $Area
     */
    protected $Area = null;

    /**
     * @var string $CountryCode
     */
    protected $CountryCode = null;

    /**
     * @var int $ID
     */
    protected $ID = null;

    /**
     * @var string $Number
     */
    protected $Number = null;

    /**
     * @var ContactTypeEnum $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getArea()
    {
      return $this->Area;
    }

    /**
     * @param string $Area
     * @return \App\models\ATSFlight\PhoneDetails
     */
    public function setArea($Area)
    {
      $this->Area = $Area;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return \App\models\ATSFlight\PhoneDetails
     */
    public function setCountryCode($CountryCode)
    {
      $this->CountryCode = $CountryCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param int $ID
     * @return \App\models\ATSFlight\PhoneDetails
     */
    public function setID($ID)
    {
      $this->ID = $ID;
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
     * @return \App\models\ATSFlight\PhoneDetails
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

    /**
     * @return ContactTypeEnum
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ContactTypeEnum $Type
     * @return \App\models\ATSFlight\PhoneDetails
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
