<?php

namespace App\models\hotelAPI\Hotels;

class EstablishmentDataRS
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
     * @var Comment[] $comments
     */
    protected $comments = null;

    /**
     * @var \DateTime $date
     */
    protected $date = null;

    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var ImageGroup[] $imageGroups
     */
    protected $imageGroups = null;

    /**
     * @var string $latitude
     */
    protected $latitude = null;

    /**
     * @var string $longDescription
     */
    protected $longDescription = null;

    /**
     * @var string $longitude
     */
    protected $longitude = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var PropertiesGroup[] $propertiesGroups
     */
    protected $propertiesGroups = null;

    /**
     * @var string $shortDescription
     */
    protected $shortDescription = null;

    /**
     * @var string $typeCode
     */
    protected $typeCode = null;

    /**
     * @var string $typeName
     */
    protected $typeName = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
     */
    public function setCategoryName($categoryName)
    {
      $this->categoryName = $categoryName;
      return $this;
    }

    /**
     * @return Comment[]
     */
    public function getComments()
    {
      return $this->comments;
    }

    /**
     * @param Comment[] $comments
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
     */
    public function setComments(array $comments = null)
    {
      $this->comments = $comments;
      return $this;
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
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
     * @return string
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param string $id
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return ImageGroup[]
     */
    public function getImageGroups()
    {
      return $this->imageGroups;
    }

    /**
     * @param ImageGroup[] $imageGroups
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
     */
    public function setImageGroups(array $imageGroups = null)
    {
      $this->imageGroups = $imageGroups;
      return $this;
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
     */
    public function setLatitude($latitude)
    {
      $this->latitude = $latitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongDescription()
    {
      return $this->longDescription;
    }

    /**
     * @param string $longDescription
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
     */
    public function setLongDescription($longDescription)
    {
      $this->longDescription = $longDescription;
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return PropertiesGroup[]
     */
    public function getPropertiesGroups()
    {
      return $this->propertiesGroups;
    }

    /**
     * @param PropertiesGroup[] $propertiesGroups
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
     */
    public function setPropertiesGroups(array $propertiesGroups = null)
    {
      $this->propertiesGroups = $propertiesGroups;
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
     */
    public function setShortDescription($shortDescription)
    {
      $this->shortDescription = $shortDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeCode()
    {
      return $this->typeCode;
    }

    /**
     * @param string $typeCode
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
     */
    public function setTypeCode($typeCode)
    {
      $this->typeCode = $typeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeName()
    {
      return $this->typeName;
    }

    /**
     * @param string $typeName
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRS
     */
    public function setTypeName($typeName)
    {
      $this->typeName = $typeName;
      return $this;
    }

}
