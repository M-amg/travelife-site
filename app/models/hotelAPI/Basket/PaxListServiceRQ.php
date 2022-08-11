<?php

namespace App\models\hotelAPI\Basket;

class PaxListServiceRQ
{

    /**
     * @var PaxRQ[] $pax
     */
    protected $pax = null;

    /**
     * @var string $roomTypeCode
     */
    protected $roomTypeCode = null;

    /**
     * @var int $serviceId
     */
    protected $serviceId = null;

    /**
     * @param int $serviceId
     */
    public function __construct($serviceId)
    {
      $this->serviceId = $serviceId;
    }

    /**
     * @return PaxRQ[]
     */
    public function getPax()
    {
      return $this->pax;
    }

    /**
     * @param PaxRQ[] $pax
     * @return \App\models\hotelAPI\Basket\PaxListServiceRQ
     */
    public function setPax(array $pax = null)
    {
      $this->pax = $pax;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomTypeCode()
    {
      return $this->roomTypeCode;
    }

    /**
     * @param string $roomTypeCode
     * @return \App\models\hotelAPI\Basket\PaxListServiceRQ
     */
    public function setRoomTypeCode($roomTypeCode)
    {
      $this->roomTypeCode = $roomTypeCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getServiceId()
    {
      return $this->serviceId;
    }

    /**
     * @param int $serviceId
     * @return \App\models\hotelAPI\Basket\PaxListServiceRQ
     */
    public function setServiceId($serviceId)
    {
      $this->serviceId = $serviceId;
      return $this;
    }

}
