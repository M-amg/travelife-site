<?php

namespace App\models\ATSFlight;

class ServiceData
{

    /**
     * @var string $BookingCode
     */
    protected $BookingCode = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @var string $Extensions
     */
    protected $Extensions = null;

    /**
     * @var string $ID
     */
    protected $ID = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var ServiceTypeEnum $Type
     */
    protected $Type = null;

    /**
     * @param ServiceTypeEnum $Type
     */
    public function __construct($Type)
    {
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getBookingCode()
    {
      return $this->BookingCode;
    }

    /**
     * @param string $BookingCode
     * @return \App\models\ATSFlight\ServiceData
     */
    public function setBookingCode($BookingCode)
    {
      $this->BookingCode = $BookingCode;
      return $this;
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
     * @return \App\models\ATSFlight\ServiceData
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtensions()
    {
      return $this->Extensions;
    }

    /**
     * @param string $Extensions
     * @return \App\models\ATSFlight\ServiceData
     */
    public function setExtensions($Extensions)
    {
      $this->Extensions = $Extensions;
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
     * @return \App\models\ATSFlight\ServiceData
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \App\models\ATSFlight\ServiceData
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return ServiceTypeEnum
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ServiceTypeEnum $Type
     * @return \App\models\ATSFlight\ServiceData
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
