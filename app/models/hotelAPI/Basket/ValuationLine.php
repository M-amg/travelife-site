<?php

namespace App\models\hotelAPI\Basket;

class ValuationLine
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var \DateTime $from
     */
    protected $from = null;

    /**
     * @var Amount $price
     */
    protected $price = null;

    /**
     * @var string $priceType
     */
    protected $priceType = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \DateTime $to
     */
    protected $to = null;

    /**
     * @var Amount $total
     */
    protected $total = null;

    /**
     * @param float $quantity
     */
    public function __construct($quantity)
    {
      $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \App\models\hotelAPI\Basket\ValuationLine
     */
    public function setCode($code)
    {
      $this->code = $code;
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
     * @return \App\models\hotelAPI\Basket\ValuationLine
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \App\models\hotelAPI\Basket\ValuationLine
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
     * @return Amount
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param Amount $price
     * @return \App\models\hotelAPI\Basket\ValuationLine
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceType()
    {
      return $this->priceType;
    }

    /**
     * @param string $priceType
     * @return \App\models\hotelAPI\Basket\ValuationLine
     */
    public function setPriceType($priceType)
    {
      $this->priceType = $priceType;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return \App\models\hotelAPI\Basket\ValuationLine
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
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
     * @return \App\models\hotelAPI\Basket\ValuationLine
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \App\models\hotelAPI\Basket\ValuationLine
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

    /**
     * @return Amount
     */
    public function getTotal()
    {
      return $this->total;
    }

    /**
     * @param Amount $total
     * @return \App\models\hotelAPI\Basket\ValuationLine
     */
    public function setTotal($total)
    {
      $this->total = $total;
      return $this;
    }

}
