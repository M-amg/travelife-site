<?php

namespace App\models\hotelAPI\Commons;

class GetCitiesByAreaRQ
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
     * @var string $areaCode
     */
    protected $areaCode = null;

    /**
     * @var string $language
     */
    protected $language = null;

    
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
     * @return \App\models\hotelAPI\Commons\GetCitiesByAreaRQ
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
     * @return \App\models\hotelAPI\Commons\GetCitiesByAreaRQ
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
     * @return \App\models\hotelAPI\Commons\GetCitiesByAreaRQ
     */
    public function setPointOfSaleId($pointOfSaleId)
    {
      $this->pointOfSaleId = $pointOfSaleId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAreaCode()
    {
      return $this->areaCode;
    }

    /**
     * @param string $areaCode
     * @return \App\models\hotelAPI\Commons\GetCitiesByAreaRQ
     */
    public function setAreaCode($areaCode)
    {
      $this->areaCode = $areaCode;
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
     * @return \App\models\hotelAPI\Commons\GetCitiesByAreaRQ
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

}
