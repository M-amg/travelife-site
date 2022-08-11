<?php

namespace App\models\hotelAPI\Hotels;

class CoordinatesRQ
{

    /**
     * @var string $latitude
     */
    protected $latitude = null;

    /**
     * @var string $longitude
     */
    protected $longitude = null;

    /**
     * @var string $radius
     */
    protected $radius = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
      return $this->latitude;
    }

    /**
     * @param string $latitude
     * @return \App\models\hotelAPI\Hotels\CoordinatesRQ
     */
    public function setLatitude($latitude)
    {
      $this->latitude = $latitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
      return $this->longitude;
    }

    /**
     * @param string $longitude
     * @return \App\models\hotelAPI\Hotels\CoordinatesRQ
     */
    public function setLongitude($longitude)
    {
      $this->longitude = $longitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getRadius()
    {
      return $this->radius;
    }

    /**
     * @param string $radius
     * @return \App\models\hotelAPI\Hotels\CoordinatesRQ
     */
    public function setRadius($radius)
    {
      $this->radius = $radius;
      return $this;
    }

}
