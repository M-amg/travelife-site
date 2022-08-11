<?php

namespace App\models\hotelAPI\Basket;

class FlightInfo
{

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @var FlightNumber $flightNumber
     */
    protected $flightNumber = null;

    /**
     * @var string $from
     */
    protected $from = null;

    /**
     * @var string $localTime
     */
    protected $localTime = null;

    /**
     * @var string $to
     */
    protected $to = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      if ($this->date == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->date);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $date
     * @return \App\models\hotelAPI\Basket\FlightInfo
     */
    public function setDate(\DateTime $date = null)
    {
      if ($date == null) {
       $this->date = null;
      } else {
        $this->date = $date->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return FlightNumber
     */
    public function getFlightNumber()
    {
      return $this->flightNumber;
    }

    /**
     * @param FlightNumber $flightNumber
     * @return \App\models\hotelAPI\Basket\FlightInfo
     */
    public function setFlightNumber($flightNumber)
    {
      $this->flightNumber = $flightNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
      return $this->from;
    }

    /**
     * @param string $from
     * @return \App\models\hotelAPI\Basket\FlightInfo
     */
    public function setFrom($from)
    {
      $this->from = $from;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocalTime()
    {
      return $this->localTime;
    }

    /**
     * @param string $localTime
     * @return \App\models\hotelAPI\Basket\FlightInfo
     */
    public function setLocalTime($localTime)
    {
      $this->localTime = $localTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getTo()
    {
      return $this->to;
    }

    /**
     * @param string $to
     * @return \App\models\hotelAPI\Basket\FlightInfo
     */
    public function setTo($to)
    {
      $this->to = $to;
      return $this;
    }

}
