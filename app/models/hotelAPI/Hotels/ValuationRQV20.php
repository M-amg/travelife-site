<?php

namespace App\models\hotelAPI\Hotels;

class ValuationRQV20
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
     * @var string $establishmentId
     */
    protected $establishmentId = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var RoomOccupancyRQV20[] $occupancies
     */
    protected $occupancies = null;

    /**
     * @var boolean $onlyOnline
     */
    protected $onlyOnline = null;

    /**
     * @var string[] $optionalSupplements
     */
    protected $optionalSupplements = null;

    /**
     * @param boolean $onlyOnline
     */
    public function __construct($onlyOnline)
    {
      $this->onlyOnline = $onlyOnline;
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
     * @return \App\models\hotelAPI\Hotels\ValuationRQV20
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
     * @return \App\models\hotelAPI\Hotels\ValuationRQV20
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
     * @return \App\models\hotelAPI\Hotels\ValuationRQV20
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
     * @return \App\models\hotelAPI\Hotels\ValuationRQV20
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
     * @return \App\models\hotelAPI\Hotels\ValuationRQV20
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
     * @return string
     */
    public function getEstablishmentId()
    {
      return $this->establishmentId;
    }

    /**
     * @param string $establishmentId
     * @return \App\models\hotelAPI\Hotels\ValuationRQV20
     */
    public function setEstablishmentId($establishmentId)
    {
      $this->establishmentId = $establishmentId;
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
     * @return \App\models\hotelAPI\Hotels\ValuationRQV20
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return RoomOccupancyRQV20[]
     */
    public function getOccupancies()
    {
      return $this->occupancies;
    }

    /**
     * @param RoomOccupancyRQV20[] $occupancies
     * @return \App\models\hotelAPI\Hotels\ValuationRQV20
     */
    public function setOccupancies(array $occupancies = null)
    {
      $this->occupancies = $occupancies;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyOnline()
    {
      return $this->onlyOnline;
    }

    /**
     * @param boolean $onlyOnline
     * @return \App\models\hotelAPI\Hotels\ValuationRQV20
     */
    public function setOnlyOnline($onlyOnline)
    {
      $this->onlyOnline = $onlyOnline;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getOptionalSupplements()
    {
      return $this->optionalSupplements;
    }

    /**
     * @param string[] $optionalSupplements
     * @return \App\models\hotelAPI\Hotels\ValuationRQV20
     */
    public function setOptionalSupplements(array $optionalSupplements = null)
    {
      $this->optionalSupplements = $optionalSupplements;
      return $this;
    }

}
