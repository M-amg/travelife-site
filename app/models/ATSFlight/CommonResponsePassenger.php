<?php

namespace App\models\ATSFlight;

class CommonResponsePassenger
{

    /**
     * @var SharedPrice $EquivalentPassengerPrice
     */
    protected $EquivalentPassengerPrice = null;

    /**
     * @var SharedPrice $EquivalentTotalTax
     */
    protected $EquivalentTotalTax = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var SharedPrice $PassengerFare
     */
    protected $PassengerFare = null;

    /**
     * @var PassengerTypeEnum $PassengerType
     */
    protected $PassengerType = null;

    /**
     * @var SharedPrice $TotalTax
     */
    protected $TotalTax = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentPassengerPrice()
    {
      return $this->EquivalentPassengerPrice;
    }

    /**
     * @param SharedPrice $EquivalentPassengerPrice
     * @return \App\models\ATSFlight\CommonResponsePassenger
     */
    public function setEquivalentPassengerPrice($EquivalentPassengerPrice)
    {
      $this->EquivalentPassengerPrice = $EquivalentPassengerPrice;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getEquivalentTotalTax()
    {
      return $this->EquivalentTotalTax;
    }

    /**
     * @param SharedPrice $EquivalentTotalTax
     * @return \App\models\ATSFlight\CommonResponsePassenger
     */
    public function setEquivalentTotalTax($EquivalentTotalTax)
    {
      $this->EquivalentTotalTax = $EquivalentTotalTax;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \App\models\ATSFlight\CommonResponsePassenger
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \App\models\ATSFlight\CommonResponsePassenger
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPassengerFare()
    {
      return $this->PassengerFare;
    }

    /**
     * @param SharedPrice $PassengerFare
     * @return \App\models\ATSFlight\CommonResponsePassenger
     */
    public function setPassengerFare($PassengerFare)
    {
      $this->PassengerFare = $PassengerFare;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getPassengerType()
    {
      return $this->PassengerType;
    }

    /**
     * @param PassengerTypeEnum $PassengerType
     * @return \App\models\ATSFlight\CommonResponsePassenger
     */
    public function setPassengerType($PassengerType)
    {
      $this->PassengerType = $PassengerType;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getTotalTax()
    {
      return $this->TotalTax;
    }

    /**
     * @param SharedPrice $TotalTax
     * @return \App\models\ATSFlight\CommonResponsePassenger
     */
    public function setTotalTax($TotalTax)
    {
      $this->TotalTax = $TotalTax;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \App\models\ATSFlight\CommonResponsePassenger
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
