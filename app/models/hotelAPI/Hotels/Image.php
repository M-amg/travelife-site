<?php

namespace App\models\hotelAPI\Hotels;

class Image
{

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var string $source
     */
    protected $source = null;

    /**
     * @var string $uri
     */
    protected $uri = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param string $date
     * @return \App\models\hotelAPI\Hotels\Image
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
      return $this->source;
    }

    /**
     * @param string $source
     * @return \App\models\hotelAPI\Hotels\Image
     */
    public function setSource($source)
    {
      $this->source = $source;
      return $this;
    }

    /**
     * @return string
     */
    public function getUri()
    {
      return $this->uri;
    }

    /**
     * @param string $uri
     * @return \App\models\hotelAPI\Hotels\Image
     */
    public function setUri($uri)
    {
      $this->uri = $uri;
      return $this;
    }

}
