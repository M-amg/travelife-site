<?php

namespace App\models\ATSFlight;

class RuleResponseBlackoutDate
{

    /**
     * @var \DateTime $ValidFrom
     */
    protected $ValidFrom = null;

    /**
     * @var \DateTime $ValidUntil
     */
    protected $ValidUntil = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getValidFrom()
    {
      if ($this->ValidFrom == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ValidFrom);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ValidFrom
     * @return \App\models\ATSFlight\RuleResponseBlackoutDate
     */
    public function setValidFrom(\DateTime $ValidFrom = null)
    {
      if ($ValidFrom == null) {
       $this->ValidFrom = null;
      } else {
        $this->ValidFrom = $ValidFrom->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidUntil()
    {
      if ($this->ValidUntil == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ValidUntil);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ValidUntil
     * @return \App\models\ATSFlight\RuleResponseBlackoutDate
     */
    public function setValidUntil(\DateTime $ValidUntil = null)
    {
      if ($ValidUntil == null) {
       $this->ValidUntil = null;
      } else {
        $this->ValidUntil = $ValidUntil->format(\DateTime::ATOM);
      }
      return $this;
    }

}
