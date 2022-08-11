<?php

namespace App\models\hotelAPI\Commons;

class GetEventsByCityRQ
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
     * @var string $cityId
     */
    protected $cityId = null;

    /**
     * @var \DateTime $from
     */
    protected $from = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var \DateTime $to
     */
    protected $to = null;

    
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
     * @return \App\models\hotelAPI\Commons\GetEventsByCityRQ
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
     * @return \App\models\hotelAPI\Commons\GetEventsByCityRQ
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
     * @return \App\models\hotelAPI\Commons\GetEventsByCityRQ
     */
    public function setPointOfSaleId($pointOfSaleId)
    {
      $this->pointOfSaleId = $pointOfSaleId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityId()
    {
      return $this->cityId;
    }

    /**
     * @param string $cityId
     * @return \App\models\hotelAPI\Commons\GetEventsByCityRQ
     */
    public function setCityId($cityId)
    {
      $this->cityId = $cityId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
      if ($this->from == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->from);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $from
     * @return \App\models\hotelAPI\Commons\GetEventsByCityRQ
     */
    public function setFrom(\DateTime $from = null)
    {
      if ($from == null) {
       $this->from = null;
      } else {
        $this->from = $from->format(\DateTime::ATOM);
      }
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
     * @return \App\models\hotelAPI\Commons\GetEventsByCityRQ
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTo()
    {
      if ($this->to == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->to);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $to
     * @return \App\models\hotelAPI\Commons\GetEventsByCityRQ
     */
    public function setTo(\DateTime $to = null)
    {
      if ($to == null) {
       $this->to = null;
      } else {
        $this->to = $to->format(\DateTime::ATOM);
      }
      return $this;
    }

}
