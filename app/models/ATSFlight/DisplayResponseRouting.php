<?php

namespace App\models\ATSFlight;

class DisplayResponseRouting
{

    /**
     * @var DisplayResponseCodeValuePair $Addon
     */
    protected $Addon = null;

    /**
     * @var string $AddonBookingClass
     */
    protected $AddonBookingClass = null;

    /**
     * @var DisplayResponseCodeValuePair $Arrival
     */
    protected $Arrival = null;

    /**
     * @var string $BookingClass
     */
    protected $BookingClass = null;

    /**
     * @var DisplayResponseCodeValuePair $Carrier
     */
    protected $Carrier = null;

    /**
     * @var DisplayResponseCodeValuePair $Departure
     */
    protected $Departure = null;

    /**
     * @var \DateTime $DepartureDate
     */
    protected $DepartureDate = null;

    /**
     * @var DisplayResponseCodeValuePair $Feeder
     */
    protected $Feeder = null;

    /**
     * @var string $FeederBookingClass
     */
    protected $FeederBookingClass = null;

    /**
     * @var string $Stop
     */
    protected $Stop = null;

    /**
     * @var ArrayOfDisplayResponseCodeValuePair $VIA
     */
    protected $VIA = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DisplayResponseCodeValuePair
     */
    public function getAddon()
    {
      return $this->Addon;
    }

    /**
     * @param DisplayResponseCodeValuePair $Addon
     * @return \App\models\ATSFlight\DisplayResponseRouting
     */
    public function setAddon($Addon)
    {
      $this->Addon = $Addon;
      return $this;
    }

    /**
     * @return string
     */
    public function getAddonBookingClass()
    {
      return $this->AddonBookingClass;
    }

    /**
     * @param string $AddonBookingClass
     * @return \App\models\ATSFlight\DisplayResponseRouting
     */
    public function setAddonBookingClass($AddonBookingClass)
    {
      $this->AddonBookingClass = $AddonBookingClass;
      return $this;
    }

    /**
     * @return DisplayResponseCodeValuePair
     */
    public function getArrival()
    {
      return $this->Arrival;
    }

    /**
     * @param DisplayResponseCodeValuePair $Arrival
     * @return \App\models\ATSFlight\DisplayResponseRouting
     */
    public function setArrival($Arrival)
    {
      $this->Arrival = $Arrival;
      return $this;
    }

    /**
     * @return string
     */
    public function getBookingClass()
    {
      return $this->BookingClass;
    }

    /**
     * @param string $BookingClass
     * @return \App\models\ATSFlight\DisplayResponseRouting
     */
    public function setBookingClass($BookingClass)
    {
      $this->BookingClass = $BookingClass;
      return $this;
    }

    /**
     * @return DisplayResponseCodeValuePair
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param DisplayResponseCodeValuePair $Carrier
     * @return \App\models\ATSFlight\DisplayResponseRouting
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return DisplayResponseCodeValuePair
     */
    public function getDeparture()
    {
      return $this->Departure;
    }

    /**
     * @param DisplayResponseCodeValuePair $Departure
     * @return \App\models\ATSFlight\DisplayResponseRouting
     */
    public function setDeparture($Departure)
    {
      $this->Departure = $Departure;
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
     * @return \App\models\ATSFlight\DisplayResponseRouting
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
     * @return DisplayResponseCodeValuePair
     */
    public function getFeeder()
    {
      return $this->Feeder;
    }

    /**
     * @param DisplayResponseCodeValuePair $Feeder
     * @return \App\models\ATSFlight\DisplayResponseRouting
     */
    public function setFeeder($Feeder)
    {
      $this->Feeder = $Feeder;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeederBookingClass()
    {
      return $this->FeederBookingClass;
    }

    /**
     * @param string $FeederBookingClass
     * @return \App\models\ATSFlight\DisplayResponseRouting
     */
    public function setFeederBookingClass($FeederBookingClass)
    {
      $this->FeederBookingClass = $FeederBookingClass;
      return $this;
    }

    /**
     * @return string
     */
    public function getStop()
    {
      return $this->Stop;
    }

    /**
     * @param string $Stop
     * @return \App\models\ATSFlight\DisplayResponseRouting
     */
    public function setStop($Stop)
    {
      $this->Stop = $Stop;
      return $this;
    }

    /**
     * @return ArrayOfDisplayResponseCodeValuePair
     */
    public function getVIA()
    {
      return $this->VIA;
    }

    /**
     * @param ArrayOfDisplayResponseCodeValuePair $VIA
     * @return \App\models\ATSFlight\DisplayResponseRouting
     */
    public function setVIA($VIA)
    {
      $this->VIA = $VIA;
      return $this;
    }

}
