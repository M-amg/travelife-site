<?php

namespace App\models\hotelAPI\Basket;

class CheckDetails
{

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @var StationDetails $station
     */
    protected $station = null;

    
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
     * @return \App\models\hotelAPI\Basket\CheckDetails
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
     * @return StationDetails
     */
    public function getStation()
    {
      return $this->station;
    }

    /**
     * @param StationDetails $station
     * @return \App\models\hotelAPI\Basket\CheckDetails
     */
    public function setStation($station)
    {
      $this->station = $station;
      return $this;
    }

}
