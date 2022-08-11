<?php

namespace App\models\hotelAPI\Hotels;

class EstablishmentV20
{

    /**
     * @var AddressV16 $address
     */
    protected $address = null;

    /**
     * @var string $categoryCode
     */
    protected $categoryCode = null;

    /**
     * @var string $categoryName
     */
    protected $categoryName = null;

    /**
     * @var CommentsRSV2[] $comments
     */
    protected $comments = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $imageUrl
     */
    protected $imageUrl = null;

    /**
     * @var float $latitude
     */
    protected $latitude = null;

    /**
     * @var float $longitude
     */
    protected $longitude = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $shortDescription
     */
    protected $shortDescription = null;

    /**
     * @var int $weight
     */
    protected $weight = null;

    /**
     * @param float $latitude
     * @param float $longitude
     * @param int $weight
     */
    public function __construct($latitude, $longitude, $weight)
    {
      $this->latitude = $latitude;
      $this->longitude = $longitude;
      $this->weight = $weight;
    }

    /**
     * @return AddressV16
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param AddressV16 $address
     * @return \App\models\hotelAPI\Hotels\EstablishmentV20
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryCode()
    {
      return $this->categoryCode;
    }

    /**
     * @param string $categoryCode
     * @return \App\models\hotelAPI\Hotels\EstablishmentV20
     */
    public function setCategoryCode($categoryCode)
    {
      $this->categoryCode = $categoryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName()
    {
      return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return \App\models\hotelAPI\Hotels\EstablishmentV20
     */
    public function setCategoryName($categoryName)
    {
      $this->categoryName = $categoryName;
      return $this;
    }

    /**
     * @return CommentsRSV2[]
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param CommentsRSV2[] $comments
     * @return \App\models\hotelAPI\Hotels\EstablishmentV20
     */
    public function setComments(array $comments = null)
    {
      $this->comments = $comments;
      return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \App\models\hotelAPI\Hotels\EstablishmentV20
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentV20
     */
    public function setImageUrl($imageUrl)
    {
      $this->imageUrl = $imageUrl;
      return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
      return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return \App\models\hotelAPI\Hotels\EstablishmentV20
     */
    public function setLatitude($latitude)
    {
      $this->latitude = $latitude;
      return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
      return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return \App\models\hotelAPI\Hotels\EstablishmentV20
     */
    public function setLongitude($longitude)
    {
      $this->longitude = $longitude;
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentV20
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
      return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     * @return \App\models\hotelAPI\Hotels\EstablishmentV20
     */
    public function setShortDescription($shortDescription)
    {
      $this->shortDescription = $shortDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param int $weight
     * @return \App\models\hotelAPI\Hotels\EstablishmentV20
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

}
