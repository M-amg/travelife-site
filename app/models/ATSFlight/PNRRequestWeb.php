<?php

namespace App\models\ATSFlight;

class PNRRequestWeb
{

    /**
     * @var string $CarrierCode
     */
    protected $CarrierCode = null;

    /**
     * @var Contact $ContactPerson
     */
    protected $ContactPerson = null;

    /**
     * @var string $CurrencyCode
     */
    protected $CurrencyCode = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var string $FirstNameOfPassenger
     */
    protected $FirstNameOfPassenger = null;

    /**
     * @var string $LastNameOfPassenger
     */
    protected $LastNameOfPassenger = null;

    /**
     * @var Agent $WebAgent
     */
    protected $WebAgent = null;

    /**
     * @param \DateTime $DepartureDate
     */
    public function __construct(\DateTime $DepartureDate)
    {
      $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
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
     * @return \App\models\ATSFlight\PNRRequestWeb
     */
    public function setCarrierCode($CarrierCode)
    {
      $this->CarrierCode = $CarrierCode;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getContactPerson()
    {
      return $this->ContactPerson;
    }

    /**
     * @param Contact $ContactPerson
     * @return \App\models\ATSFlight\PNRRequestWeb
     */
    public function setContactPerson($ContactPerson)
    {
      $this->ContactPerson = $ContactPerson;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return \App\models\ATSFlight\PNRRequestWeb
     */
    public function setCurrencyCode($CurrencyCode)
    {
      $this->CurrencyCode = $CurrencyCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDate()
    {
      if ($this->DepartureDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DepartureDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DepartureDate
     * @return \App\models\ATSFlight\PNRRequestWeb
     */
    public function setDepartureDate(\DateTime $DepartureDate)
    {
      $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstNameOfPassenger()
    {
      return $this->FirstNameOfPassenger;
    }

    /**
     * @param string $FirstNameOfPassenger
     * @return \App\models\ATSFlight\PNRRequestWeb
     */
    public function setFirstNameOfPassenger($FirstNameOfPassenger)
    {
      $this->FirstNameOfPassenger = $FirstNameOfPassenger;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastNameOfPassenger()
    {
      return $this->LastNameOfPassenger;
    }

    /**
     * @param string $LastNameOfPassenger
     * @return \App\models\ATSFlight\PNRRequestWeb
     */
    public function setLastNameOfPassenger($LastNameOfPassenger)
    {
      $this->LastNameOfPassenger = $LastNameOfPassenger;
      return $this;
    }

    /**
     * @return Agent
     */
    public function getWebAgent()
    {
      return $this->WebAgent;
    }

    /**
     * @param Agent $WebAgent
     * @return \App\models\ATSFlight\PNRRequestWeb
     */
    public function setWebAgent($WebAgent)
    {
      $this->WebAgent = $WebAgent;
      return $this;
    }

}
