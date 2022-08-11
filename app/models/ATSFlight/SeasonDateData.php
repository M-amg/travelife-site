<?php

namespace App\models\ATSFlight;

class SeasonDateData
{

    /**
     * @var \DateTime $From
     */
    protected $From = null;

    /**
     * @var \DateTime $LastReturn
     */
    protected $LastReturn = null;

    /**
     * @var SeasonStyle $Style
     */
    protected $Style = null;

    /**
     * @var \DateTime $Until
     */
    protected $Until = null;

    /**
     * @var boolean $UseAsTravelCompleteDate
     */
    protected $UseAsTravelCompleteDate = null;

    
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
     * @return \App\models\ATSFlight\SeasonDateData
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
    public function getLastReturn()
    {
      if ($this->LastReturn == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastReturn);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastReturn
     * @return \App\models\ATSFlight\SeasonDateData
     */
    public function setLastReturn(\DateTime $LastReturn = null)
    {
      if ($LastReturn == null) {
       $this->LastReturn = null;
      } else {
        $this->LastReturn = $LastReturn->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return SeasonStyle
     */
    public function getStyle()
    {
      return $this->Style;
    }

    /**
     * @param SeasonStyle $Style
     * @return \App\models\ATSFlight\SeasonDateData
     */
    public function setStyle($Style)
    {
      $this->Style = $Style;
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
     * @return \App\models\ATSFlight\SeasonDateData
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

    /**
     * @return boolean
     */
    public function getUseAsTravelCompleteDate()
    {
      return $this->UseAsTravelCompleteDate;
    }

    /**
     * @param boolean $UseAsTravelCompleteDate
     * @return \App\models\ATSFlight\SeasonDateData
     */
    public function setUseAsTravelCompleteDate($UseAsTravelCompleteDate)
    {
      $this->UseAsTravelCompleteDate = $UseAsTravelCompleteDate;
      return $this;
    }

}
