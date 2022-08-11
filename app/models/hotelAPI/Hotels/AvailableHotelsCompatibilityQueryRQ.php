<?php

namespace App\models\hotelAPI\Hotels;

class AvailableHotelsCompatibilityQueryRQ
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
     * @var \DateTime $checkin
     */
    protected $checkin = null;

    /**
     * @var \DateTime $checkout
     */
    protected $checkout = null;

    /**
     * @var string[] $cityId
     */
    protected $cityId = null;

    /**
     * @var string $ipClient
     */
    protected $ipClient = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var string $usuario
     */
    protected $usuario = null;

    /**
     * @var string[] $zoneId
     */
    protected $zoneId = null;

    
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsCompatibilityQueryRQ
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsCompatibilityQueryRQ
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsCompatibilityQueryRQ
     */
    public function setPointOfSaleId($pointOfSaleId)
    {
      $this->pointOfSaleId = $pointOfSaleId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckin()
    {
      if ($this->checkin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->checkin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $checkin
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsCompatibilityQueryRQ
     */
    public function setCheckin(\DateTime $checkin = null)
    {
      if ($checkin == null) {
       $this->checkin = null;
      } else {
        $this->checkin = $checkin->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCheckout()
    {
      if ($this->checkout == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->checkout);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $checkout
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsCompatibilityQueryRQ
     */
    public function setCheckout(\DateTime $checkout = null)
    {
      if ($checkout == null) {
       $this->checkout = null;
      } else {
        $this->checkout = $checkout->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string[]
     */
    public function getCityId()
    {
      return $this->cityId;
    }

    /**
     * @param string[] $cityId
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsCompatibilityQueryRQ
     */
    public function setCityId(array $cityId = null)
    {
      $this->cityId = $cityId;
      return $this;
    }

    /**
     * @return string
     */
    public function getIpClient()
    {
      return $this->ipClient;
    }

    /**
     * @param string $ipClient
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsCompatibilityQueryRQ
     */
    public function setIpClient($ipClient)
    {
      $this->ipClient = $ipClient;
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
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsCompatibilityQueryRQ
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return string
     */
    public function getUsuario()
    {
      return $this->usuario;
    }

    /**
     * @param string $usuario
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsCompatibilityQueryRQ
     */
    public function setUsuario($usuario)
    {
      $this->usuario = $usuario;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getZoneId()
    {
      return $this->zoneId;
    }

    /**
     * @param string[] $zoneId
     * @return \App\models\hotelAPI\Hotels\AvailableHotelsCompatibilityQueryRQ
     */
    public function setZoneId(array $zoneId = null)
    {
      $this->zoneId = $zoneId;
      return $this;
    }

}
