<?php

namespace App\models\ATSFlight;

class BlackoutDateData
{

    /**
     * @var \DateTime $From
     */
    protected $From = null;

    /**
     * @var \DateTime $Until
     */
    protected $Until = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
      if ($this->From == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->From);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $From
     * @return \App\models\ATSFlight\BlackoutDateData
     */
    public function setFrom(\DateTime $From = null)
    {
      if ($From == null) {
       $this->From = null;
      } else {
        $this->From = $From->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUntil()
    {
      if ($this->Until == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Until);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Until
     * @return \App\models\ATSFlight\BlackoutDateData
     */
    public function setUntil(\DateTime $Until = null)
    {
      if ($Until == null) {
       $this->Until = null;
      } else {
        $this->Until = $Until->format(\DateTime::ATOM);
      }
      return $this;
    }

}
