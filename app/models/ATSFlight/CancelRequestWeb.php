<?php

namespace App\models\ATSFlight;

class CancelRequestWeb
{

    /**
     * @var Contact $Delivery
     */
    protected $Delivery = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var string $FirstNameOfPassenger
     */
    protected $FirstNameOfPassenger = null;

    /**
     * @var Contact $Invoice
     */
    protected $Invoice = null;

    /**
     * @var string $LastNameOfPassenger
     */
    protected $LastNameOfPassenger = null;

    /**
     * @var Agent $WebAgent
     */
    protected $WebAgent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Contact
     */
    public function getDelivery()
    {
      return $this->Delivery;
    }

    /**
     * @param Contact $Delivery
     * @return \App\models\ATSFlight\CancelRequestWeb
     */
    public function setDelivery($Delivery)
    {
      $this->Delivery = $Delivery;
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
     * @return \App\models\ATSFlight\CancelRequestWeb
     */
    public function setDepartureDate(\DateTime $DepartureDate = null)
    {
      if ($DepartureDate == null) {
       $this->DepartureDate = null;
      } else {
        $this->DepartureDate = $DepartureDate->format(\DateTime::ATOM);
      }
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
     * @return \App\models\ATSFlight\CancelRequestWeb
     */
    public function setFirstNameOfPassenger($FirstNameOfPassenger)
    {
      $this->FirstNameOfPassenger = $FirstNameOfPassenger;
      return $this;
    }

    /**
     * @return Contact
     */
    public function getInvoice()
    {
      return $this->Invoice;
    }

    /**
     * @param Contact $Invoice
     * @return \App\models\ATSFlight\CancelRequestWeb
     */
    public function setInvoice($Invoice)
    {
      $this->Invoice = $Invoice;
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
     * @return \App\models\ATSFlight\CancelRequestWeb
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
     * @return \App\models\ATSFlight\CancelRequestWeb
     */
    public function setWebAgent($WebAgent)
    {
      $this->WebAgent = $WebAgent;
      return $this;
    }

}
