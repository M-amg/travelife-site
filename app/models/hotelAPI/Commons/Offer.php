<?php

namespace App\models\hotelAPI\Commons;

class Offer
{

    /**
     * @var string $category
     */
    protected $category = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $establishmentId
     */
    protected $establishmentId = null;

    /**
     * @var string $imageUrl
     */
    protected $imageUrl = null;

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
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param string $category
     * @return \App\models\hotelAPI\Commons\Offer
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \App\models\hotelAPI\Commons\Offer
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstablishmentId()
    {
      return $this->establishmentId;
    }

    /**
     * @param string $establishmentId
     * @return \App\models\hotelAPI\Commons\Offer
     */
    public function setEstablishmentId($establishmentId)
    {
      $this->establishmentId = $establishmentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
      return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return \App\models\hotelAPI\Commons\Offer
     */
    public function setImageUrl($imageUrl)
    {
      $this->imageUrl = $imageUrl;
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
     * @return \App\models\hotelAPI\Commons\Offer
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
