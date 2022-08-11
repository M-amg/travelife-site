<?php

namespace App\models\hotelAPI\Commons;

class GetDistrictsRQ
{

    /**
     * @var string $agencyCode
     */
    protected $agencyCode = null;

    /**
     * @var string $brandCode
     */
    protected $brandCode = null;

    /**
     * @var string $pointOfSaleId
     */
    protected $pointOfSaleId = null;

    /**
     * @var string[] $cityCode
     */
    protected $cityCode = null;

    /**
     * @var string[] $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string[] $districtCode
     */
    protected $districtCode = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var string[] $stateCode
     */
    protected $stateCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getAgencyCode()
    {
      return $this->agencyCode;
    }

    /**
     * @param string $agencyCode
     * @return \App\models\hotelAPI\Commons\GetDistrictsRQ
     */
    public function setAgencyCode($agencyCode)
    {
      $this->agencyCode = $agencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrandCode()
    {
      return $this->brandCode;
    }

    /**
     * @param string $brandCode
     * @return \App\models\hotelAPI\Commons\GetDistrictsRQ
     */
    public function setBrandCode($brandCode)
    {
      $this->brandCode = $brandCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointOfSaleId()
    {
      return $this->pointOfSaleId;
    }

    /**
     * @param string $pointOfSaleId
     * @return \App\models\hotelAPI\Commons\GetDistrictsRQ
     */
    public function setPointOfSaleId($pointOfSaleId)
    {
      $this->pointOfSaleId = $pointOfSaleId;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getCityCode()
    {
      return $this->cityCode;
    }

    /**
     * @param string[] $cityCode
     * @return \App\models\hotelAPI\Commons\GetDistrictsRQ
     */
    public function setCityCode(array $cityCode = null)
    {
      $this->cityCode = $cityCode;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param string[] $countryCode
     * @return \App\models\hotelAPI\Commons\GetDistrictsRQ
     */
    public function setCountryCode(array $countryCode = null)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getDistrictCode()
    {
      return $this->districtCode;
    }

    /**
     * @param string[] $districtCode
     * @return \App\models\hotelAPI\Commons\GetDistrictsRQ
     */
    public function setDistrictCode(array $districtCode = null)
    {
      $this->districtCode = $districtCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \App\models\hotelAPI\Commons\GetDistrictsRQ
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getStateCode()
    {
      return $this->stateCode;
    }

    /**
     * @param string[] $stateCode
     * @return \App\models\hotelAPI\Commons\GetDistrictsRQ
     */
    public function setStateCode(array $stateCode = null)
    {
      $this->stateCode = $stateCode;
      return $this;
    }

}
