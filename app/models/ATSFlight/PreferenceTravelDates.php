<?php

namespace App\models\ATSFlight;

class PreferenceTravelDates
{

    /**
     * @var \DateTime $FromDate
     */
    protected $FromDate = null;

    /**
     * @var boolean $TravelComplete
     */
    protected $TravelComplete = null;

    /**
     * @var \DateTime $UntilDate
     */
    protected $UntilDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getFromDate()
    {
      if ($this->FromDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FromDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FromDate
     * @return \App\models\ATSFlight\PreferenceTravelDates
     */
    public function setFromDate(\DateTime $FromDate = null)
    {
      if ($FromDate == null) {
       $this->FromDate = null;
      } else {
        $this->FromDate = $FromDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTravelComplete()
    {
      return $this->TravelComplete;
    }

    /**
     * @param boolean $TravelComplete
     * @return \App\models\ATSFlight\PreferenceTravelDates
     */
    public function setTravelComplete($TravelComplete)
    {
      $this->TravelComplete = $TravelComplete;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUntilDate()
    {
      if ($this->UntilDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UntilDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UntilDate
     * @return \App\models\ATSFlight\PreferenceTravelDates
     */
    public function setUntilDate(\DateTime $UntilDate = null)
    {
      if ($UntilDate == null) {
       $this->UntilDate = null;
      } else {
        $this->UntilDate = $UntilDate->format(\DateTime::ATOM);
      }
      return $this;
    }

}
