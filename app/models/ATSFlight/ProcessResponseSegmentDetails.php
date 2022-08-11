<?php

namespace App\models\ATSFlight;

class ProcessResponseSegmentDetails extends PNRResponseSegment
{

    /**
     * @var string $GUID
     */
    protected $GUID = null;

    /**
     * @var \DateTime $PreviousArrivalDateTime
     */
    protected $PreviousArrivalDateTime = null;

    /**
     * @var \DateTime $PreviousDepartureDateTime
     */
    protected $PreviousDepartureDateTime = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getGUID()
    {
      return $this->GUID;
    }

    /**
     * @param string $GUID
     * @return \App\models\ATSFlight\ProcessResponseSegmentDetails
     */
    public function setGUID($GUID)
    {
      $this->GUID = $GUID;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPreviousArrivalDateTime()
    {
      if ($this->PreviousArrivalDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PreviousArrivalDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PreviousArrivalDateTime
     * @return \App\models\ATSFlight\ProcessResponseSegmentDetails
     */
    public function setPreviousArrivalDateTime(\DateTime $PreviousArrivalDateTime = null)
    {
      if ($PreviousArrivalDateTime == null) {
       $this->PreviousArrivalDateTime = null;
      } else {
        $this->PreviousArrivalDateTime = $PreviousArrivalDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPreviousDepartureDateTime()
    {
      if ($this->PreviousDepartureDateTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->PreviousDepartureDateTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $PreviousDepartureDateTime
     * @return \App\models\ATSFlight\ProcessResponseSegmentDetails
     */
    public function setPreviousDepartureDateTime(\DateTime $PreviousDepartureDateTime = null)
    {
      if ($PreviousDepartureDateTime == null) {
       $this->PreviousDepartureDateTime = null;
      } else {
        $this->PreviousDepartureDateTime = $PreviousDepartureDateTime->format(\DateTime::ATOM);
      }
      return $this;
    }

}
