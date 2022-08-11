<?php

namespace App\models\ATSFlight;

class ValidateFlightDateRequestData
{

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var \DateTime $DepartureDateInbound
     */
    protected $DepartureDateInbound = null;

    /**
     * @var \DateTime $DepartureDateOutbound
     */
    protected $DepartureDateOutbound = null;

    /**
     * @var \DateTime $EarliestTicketingDate
     */
    protected $EarliestTicketingDate = null;

    /**
     * @var string $RecordSet
     */
    protected $RecordSet = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \App\models\ATSFlight\ValidateFlightDateRequestData
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDateInbound()
    {
      if ($this->DepartureDateInbound == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DepartureDateInbound);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DepartureDateInbound
     * @return \App\models\ATSFlight\ValidateFlightDateRequestData
     */
    public function setDepartureDateInbound(\DateTime $DepartureDateInbound = null)
    {
      if ($DepartureDateInbound == null) {
       $this->DepartureDateInbound = null;
      } else {
        $this->DepartureDateInbound = $DepartureDateInbound->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDepartureDateOutbound()
    {
      if ($this->DepartureDateOutbound == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DepartureDateOutbound);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DepartureDateOutbound
     * @return \App\models\ATSFlight\ValidateFlightDateRequestData
     */
    public function setDepartureDateOutbound(\DateTime $DepartureDateOutbound = null)
    {
      if ($DepartureDateOutbound == null) {
       $this->DepartureDateOutbound = null;
      } else {
        $this->DepartureDateOutbound = $DepartureDateOutbound->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEarliestTicketingDate()
    {
      if ($this->EarliestTicketingDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EarliestTicketingDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EarliestTicketingDate
     * @return \App\models\ATSFlight\ValidateFlightDateRequestData
     */
    public function setEarliestTicketingDate(\DateTime $EarliestTicketingDate = null)
    {
      if ($EarliestTicketingDate == null) {
       $this->EarliestTicketingDate = null;
      } else {
        $this->EarliestTicketingDate = $EarliestTicketingDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getRecordSet()
    {
      return $this->RecordSet;
    }

    /**
     * @param string $RecordSet
     * @return \App\models\ATSFlight\ValidateFlightDateRequestData
     */
    public function setRecordSet($RecordSet)
    {
      $this->RecordSet = $RecordSet;
      return $this;
    }

    /**
     * @return SourceModuleEnum
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param SourceModuleEnum $Source
     * @return \App\models\ATSFlight\ValidateFlightDateRequestData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
