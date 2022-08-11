<?php

namespace App\models\ATSFlight;

class QuoteRequestPasType
{

    /**
     * @var \DateTime $DOB
     */
    protected $DOB = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var boolean $ForcePassengerType
     */
    protected $ForcePassengerType = null;

    /**
     * @var string $FreePassengerType
     */
    protected $FreePassengerType = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var SharedPrice $NetFare
     */
    protected $NetFare = null;

    /**
     * @var PassengerTypeEnum $PasType
     */
    protected $PasType = null;

    /**
     * @var SharedPrice $PublishedFare
     */
    protected $PublishedFare = null;

    /**
     * @var string $QuoteLink
     */
    protected $QuoteLink = null;

    /**
     * @var ArrayOfQuoteTax $Taxes
     */
    protected $Taxes = null;

    /**
     * @param PassengerTypeEnum $PasType
     */
    public function __construct($PasType)
    {
      $this->PasType = $PasType;
    }

    /**
     * @return \DateTime
     */
    public function getDOB()
    {
      if ($this->DOB == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DOB);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DOB
     * @return \App\models\ATSFlight\QuoteRequestPasType
     */
    public function setDOB(\DateTime $DOB = null)
    {
      if ($DOB == null) {
       $this->DOB = null;
      } else {
        $this->DOB = $DOB->format(\DateTime::ATOM);
      }
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
     * @return \App\models\ATSFlight\QuoteRequestPasType
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getForcePassengerType()
    {
      return $this->ForcePassengerType;
    }

    /**
     * @param boolean $ForcePassengerType
     * @return \App\models\ATSFlight\QuoteRequestPasType
     */
    public function setForcePassengerType($ForcePassengerType)
    {
      $this->ForcePassengerType = $ForcePassengerType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreePassengerType()
    {
      return $this->FreePassengerType;
    }

    /**
     * @param string $FreePassengerType
     * @return \App\models\ATSFlight\QuoteRequestPasType
     */
    public function setFreePassengerType($FreePassengerType)
    {
      $this->FreePassengerType = $FreePassengerType;
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
     * @return \App\models\ATSFlight\QuoteRequestPasType
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getNetFare()
    {
      return $this->NetFare;
    }

    /**
     * @param SharedPrice $NetFare
     * @return \App\models\ATSFlight\QuoteRequestPasType
     */
    public function setNetFare($NetFare)
    {
      $this->NetFare = $NetFare;
      return $this;
    }

    /**
     * @return PassengerTypeEnum
     */
    public function getPasType()
    {
      return $this->PasType;
    }

    /**
     * @param PassengerTypeEnum $PasType
     * @return \App\models\ATSFlight\QuoteRequestPasType
     */
    public function setPasType($PasType)
    {
      $this->PasType = $PasType;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPublishedFare()
    {
      return $this->PublishedFare;
    }

    /**
     * @param SharedPrice $PublishedFare
     * @return \App\models\ATSFlight\QuoteRequestPasType
     */
    public function setPublishedFare($PublishedFare)
    {
      $this->PublishedFare = $PublishedFare;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuoteLink()
    {
      return $this->QuoteLink;
    }

    /**
     * @param string $QuoteLink
     * @return \App\models\ATSFlight\QuoteRequestPasType
     */
    public function setQuoteLink($QuoteLink)
    {
      $this->QuoteLink = $QuoteLink;
      return $this;
    }

    /**
     * @return ArrayOfQuoteTax
     */
    public function getTaxes()
    {
      return $this->Taxes;
    }

    /**
     * @param ArrayOfQuoteTax $Taxes
     * @return \App\models\ATSFlight\QuoteRequestPasType
     */
    public function setTaxes($Taxes)
    {
      $this->Taxes = $Taxes;
      return $this;
    }

}
