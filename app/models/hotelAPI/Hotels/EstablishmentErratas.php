<?php

namespace App\models\hotelAPI\Hotels;

class EstablishmentErratas
{

    /**
     * @var Address $address
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
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $imageUrl
     */
    protected $imageUrl = null;

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
     * @var ErrataRS[] $erratas
     */
    protected $erratas = null;

    /**
     * @param int $weight
     */
    public function __construct($weight)
    {
      $this->weight = $weight;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param Address $address
     * @return \App\models\hotelAPI\Hotels\EstablishmentErratas
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentErratas
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentErratas
     */
    public function setCategoryName($categoryName)
    {
      $this->categoryName = $categoryName;
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentErratas
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentErratas
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentErratas
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentErratas
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentErratas
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return ErrataRS[]
     */
    public function getErratas()
    {
      return $this->erratas;
    }

    /**
     * @param ErrataRS[] $erratas
     * @return \App\models\hotelAPI\Hotels\EstablishmentErratas
     */
    public function setErratas(array $erratas = null)
    {
      $this->erratas = $erratas;
      return $this;
    }

}
