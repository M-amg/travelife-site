<?php

namespace App\models\hotelAPI\Hotels;

class Basket
{

    /**
     * @var string $basketId
     */
    protected $basketId = null;

    /**
     * @var \DateTime $cancelled
     */
    protected $cancelled = null;

    /**
     * @var \DateTime $closed
     */
    protected $closed = null;

    /**
     * @var \DateTime $opened
     */
    protected $opened = null;

    /**
     * @var string $titular
     */
    protected $titular = null;

    
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
     * @return \App\models\hotelAPI\Hotels\Basket
     */
    public function setBasketId($basketId)
    {
      $this->basketId = $basketId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCancelled()
    {
      if ($this->cancelled == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->cancelled);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $cancelled
     * @return \App\models\hotelAPI\Hotels\Basket
     */
    public function setCancelled(\DateTime $cancelled = null)
    {
      if ($cancelled == null) {
       $this->cancelled = null;
      } else {
        $this->cancelled = $cancelled->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getClosed()
    {
      if ($this->closed == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->closed);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $closed
     * @return \App\models\hotelAPI\Hotels\Basket
     */
    public function setClosed(\DateTime $closed = null)
    {
      if ($closed == null) {
       $this->closed = null;
      } else {
        $this->closed = $closed->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOpened()
    {
      if ($this->opened == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->opened);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $opened
     * @return \App\models\hotelAPI\Hotels\Basket
     */
    public function setOpened(\DateTime $opened = null)
    {
      if ($opened == null) {
       $this->opened = null;
      } else {
        $this->opened = $opened->format(\DateTime::ATOM);
      }
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
     * @return \App\models\hotelAPI\Hotels\Basket
     */
    public function setTitular($titular)
    {
      $this->titular = $titular;
      return $this;
    }

}
