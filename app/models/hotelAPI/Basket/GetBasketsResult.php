<?php

namespace App\models\hotelAPI\Basket;

class GetBasketsResult
{

    /**
     * @var string $basketId
     */
    protected $basketId = null;

    /**
     * @var string $confirmDate
     */
    protected $confirmDate = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $pointOfSaleId
     */
    protected $pointOfSaleId = null;

    /**
     * @var string $resort
     */
    protected $resort = null;

    /**
     * @var string $servicesEnd
     */
    protected $servicesEnd = null;

    /**
     * @var string $servicesStart
     */
    protected $servicesStart = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $titular
     */
    protected $titular = null;

    /**
     * @var Amount $total
     */
    protected $total = null;

    /**
     * @var string $userId
     */
    protected $userId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBasketId()
    {
      return $this->basketId;
    }

    /**
     * @param string $basketId
     * @return \App\models\hotelAPI\Basket\GetBasketsResult
     */
    public function setBasketId($basketId)
    {
      $this->basketId = $basketId;
      return $this;
    }

    /**
     * @return string
     */
    public function getConfirmDate()
    {
      return $this->confirmDate;
    }

    /**
     * @param string $confirmDate
     * @return \App\models\hotelAPI\Basket\GetBasketsResult
     */
    public function setConfirmDate($confirmDate)
    {
      $this->confirmDate = $confirmDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \App\models\hotelAPI\Basket\GetBasketsResult
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \App\models\hotelAPI\Basket\GetBasketsResult
     */
    public function setPointOfSaleId($pointOfSaleId)
    {
      $this->pointOfSaleId = $pointOfSaleId;
      return $this;
    }

    /**
     * @return string
     */
    public function getResort()
    {
      return $this->resort;
    }

    /**
     * @param string $resort
     * @return \App\models\hotelAPI\Basket\GetBasketsResult
     */
    public function setResort($resort)
    {
      $this->resort = $resort;
      return $this;
    }

    /**
     * @return string
     */
    public function getServicesEnd()
    {
      return $this->servicesEnd;
    }

    /**
     * @param string $servicesEnd
     * @return \App\models\hotelAPI\Basket\GetBasketsResult
     */
    public function setServicesEnd($servicesEnd)
    {
      $this->servicesEnd = $servicesEnd;
      return $this;
    }

    /**
     * @return string
     */
    public function getServicesStart()
    {
      return $this->servicesStart;
    }

    /**
     * @param string $servicesStart
     * @return \App\models\hotelAPI\Basket\GetBasketsResult
     */
    public function setServicesStart($servicesStart)
    {
      $this->servicesStart = $servicesStart;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \App\models\hotelAPI\Basket\GetBasketsResult
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitular()
    {
      return $this->titular;
    }

    /**
     * @param string $titular
     * @return \App\models\hotelAPI\Basket\GetBasketsResult
     */
    public function setTitular($titular)
    {
      $this->titular = $titular;
      return $this;
    }

    /**
     * @return Amount
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param Amount $total
     * @return \App\models\hotelAPI\Basket\GetBasketsResult
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param string $userId
     * @return \App\models\hotelAPI\Basket\GetBasketsResult
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

}
