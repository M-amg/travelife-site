<?php

namespace App\models\hotelAPI\Hotels;

class EstablishmentSearchResult
{

    /**
     * @var string $categoryName
     */
    protected $categoryName = null;

    /**
     * @var string $cityName
     */
    protected $cityName = null;

    /**
     * @var string $countryName
     */
    protected $countryName = null;

    /**
     * @var string $establishmentId
     */
    protected $establishmentId = null;

    /**
     * @var string $establishmentName
     */
    protected $establishmentName = null;

    
    public function __construct()
    {
    
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentSearchResult
     */
    public function setCategoryName($categoryName)
    {
      $this->categoryName = $categoryName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
      return $this->cityName;
    }

    /**
     * @param string $cityName
     * @return \App\models\hotelAPI\Hotels\EstablishmentSearchResult
     */
    public function setCityName($cityName)
    {
      $this->cityName = $cityName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
      return $this->countryName;
    }

    /**
     * @param string $countryName
     * @return \App\models\hotelAPI\Hotels\EstablishmentSearchResult
     */
    public function setCountryName($countryName)
    {
      $this->countryName = $countryName;
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
     * @return \App\models\hotelAPI\Hotels\EstablishmentSearchResult
     */
    public function setEstablishmentId($establishmentId)
    {
      $this->establishmentId = $establishmentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getEstablishmentName()
    {
      return $this->establishmentName;
    }

    /**
     * @param string $establishmentName
     * @return \App\models\hotelAPI\Hotels\EstablishmentSearchResult
     */
    public function setEstablishmentName($establishmentName)
    {
      $this->establishmentName = $establishmentName;
      return $this;
    }

}
