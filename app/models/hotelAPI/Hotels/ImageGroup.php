<?php

namespace App\models\hotelAPI\Hotels;

class ImageGroup
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var Image[] $images
     */
    protected $images = null;

    /**
     * @var string $name
     */
    protected $name = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \App\models\hotelAPI\Hotels\ImageGroup
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return Image[]
     */
    public function getImages()
    {
      return $this->images;
    }

    /**
     * @param Image[] $images
     * @return \App\models\hotelAPI\Hotels\ImageGroup
     */
    public function setImages(array $images = null)
    {
      $this->images = $images;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \App\models\hotelAPI\Hotels\ImageGroup
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
