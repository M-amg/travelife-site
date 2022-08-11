<?php

namespace App\models\hotelAPI\Basket;

class PaxListItemService extends PaxListItem
{

    /**
     * @var int $serviceId
     */
    protected $serviceId = null;

    /**
     * @param int $serviceId
     */
    public function __construct($serviceId)
    {
      parent::__construct();
      $this->serviceId = $serviceId;
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
     * @return \App\models\hotelAPI\Basket\PaxListItemService
     */
    public function setServiceId($serviceId)
    {
      $this->serviceId = $serviceId;
      return $this;
    }

}
