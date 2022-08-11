<?php

namespace App\models\hotelAPI\Commons;

class PingRSV21 extends PingRS
{

    /**
     * @var string $agencyCode
     */
    protected $agencyCode = null;

    /**
     * @var string $agencyName
     */
    protected $agencyName = null;

    /**
     * @var string $brandCode
     */
    protected $brandCode = null;

    /**
     * @var string $market
     */
    protected $market = null;

    /**
     * @var string $pointOfSale
     */
    protected $pointOfSale = null;

    /**
     * @var string $pricingAgencyCode
     */
    protected $pricingAgencyCode = null;

    /**
     * @var string $pricingAgencyName
     */
    protected $pricingAgencyName = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \App\models\hotelAPI\Commons\PingRSV21
     */
    public function setAgencyCode($agencyCode)
    {
      $this->agencyCode = $agencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAgencyName()
    {
      return $this->agencyName;
    }

    /**
     * @param string $agencyName
     * @return \App\models\hotelAPI\Commons\PingRSV21
     */
    public function setAgencyName($agencyName)
    {
      $this->agencyName = $agencyName;
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
     * @return \App\models\hotelAPI\Commons\PingRSV21
     */
    public function setBrandCode($brandCode)
    {
      $this->brandCode = $brandCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarket()
    {
      return $this->market;
    }

    /**
     * @param string $market
     * @return \App\models\hotelAPI\Commons\PingRSV21
     */
    public function setMarket($market)
    {
      $this->market = $market;
      return $this;
    }

    /**
     * @return string
     */
    public function getPointOfSale()
    {
      return $this->pointOfSale;
    }

    /**
     * @param string $pointOfSale
     * @return \App\models\hotelAPI\Commons\PingRSV21
     */
    public function setPointOfSale($pointOfSale)
    {
      $this->pointOfSale = $pointOfSale;
      return $this;
    }

    /**
     * @return string
     */
    public function getPricingAgencyCode()
    {
      return $this->pricingAgencyCode;
    }

    /**
     * @param string $pricingAgencyCode
     * @return \App\models\hotelAPI\Commons\PingRSV21
     */
    public function setPricingAgencyCode($pricingAgencyCode)
    {
      $this->pricingAgencyCode = $pricingAgencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPricingAgencyName()
    {
      return $this->pricingAgencyName;
    }

    /**
     * @param string $pricingAgencyName
     * @return \App\models\hotelAPI\Commons\PingRSV21
     */
    public function setPricingAgencyName($pricingAgencyName)
    {
      $this->pricingAgencyName = $pricingAgencyName;
      return $this;
    }

}
