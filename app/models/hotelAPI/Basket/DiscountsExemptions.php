<?php

namespace App\models\hotelAPI\Basket;

class DiscountsExemptions
{

    /**
     * @var float $discAmount
     */
    protected $discAmount = null;

    /**
     * @var string $discType
     */
    protected $discType = null;

    /**
     * @var string $discountFrom
     */
    protected $discountFrom = null;

    /**
     * @var string $discountTo
     */
    protected $discountTo = null;

    /**
     * @var int $maxAge
     */
    protected $maxAge = null;

    /**
     * @var int $maxStay
     */
    protected $maxStay = null;

    /**
     * @var int $minAge
     */
    protected $minAge = null;

    /**
     * @var int $minStay
     */
    protected $minStay = null;

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @var boolean $resident
     */
    protected $resident = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @param float $discAmount
     * @param int $maxAge
     * @param int $maxStay
     * @param int $minAge
     * @param int $minStay
     * @param boolean $resident
     */
    public function __construct($discAmount, $maxAge, $maxStay, $minAge, $minStay, $resident)
    {
      $this->discAmount = $discAmount;
      $this->maxAge = $maxAge;
      $this->maxStay = $maxStay;
      $this->minAge = $minAge;
      $this->minStay = $minStay;
      $this->resident = $resident;
    }

    /**
     * @return float
     */
    public function getDiscAmount()
    {
      return $this->discAmount;
    }

    /**
     * @param float $discAmount
     * @return \App\models\hotelAPI\Basket\DiscountsExemptions
     */
    public function setDiscAmount($discAmount)
    {
      $this->discAmount = $discAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscType()
    {
      return $this->discType;
    }

    /**
     * @param string $discType
     * @return \App\models\hotelAPI\Basket\DiscountsExemptions
     */
    public function setDiscType($discType)
    {
      $this->discType = $discType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountFrom()
    {
      return $this->discountFrom;
    }

    /**
     * @param string $discountFrom
     * @return \App\models\hotelAPI\Basket\DiscountsExemptions
     */
    public function setDiscountFrom($discountFrom)
    {
      $this->discountFrom = $discountFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountTo()
    {
      return $this->discountTo;
    }

    /**
     * @param string $discountTo
     * @return \App\models\hotelAPI\Basket\DiscountsExemptions
     */
    public function setDiscountTo($discountTo)
    {
      $this->discountTo = $discountTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxAge()
    {
      return $this->maxAge;
    }

    /**
     * @param int $maxAge
     * @return \App\models\hotelAPI\Basket\DiscountsExemptions
     */
    public function setMaxAge($maxAge)
    {
      $this->maxAge = $maxAge;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxStay()
    {
      return $this->maxStay;
    }

    /**
     * @param int $maxStay
     * @return \App\models\hotelAPI\Basket\DiscountsExemptions
     */
    public function setMaxStay($maxStay)
    {
      $this->maxStay = $maxStay;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinAge()
    {
      return $this->minAge;
    }

    /**
     * @param int $minAge
     * @return \App\models\hotelAPI\Basket\DiscountsExemptions
     */
    public function setMinAge($minAge)
    {
      $this->minAge = $minAge;
      return $this;
    }

    /**
     * @return int
     */
    public function getMinStay()
    {
      return $this->minStay;
    }

    /**
     * @param int $minStay
     * @return \App\models\hotelAPI\Basket\DiscountsExemptions
     */
    public function setMinStay($minStay)
    {
      $this->minStay = $minStay;
      return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->reason;
    }

    /**
     * @param string $reason
     * @return \App\models\hotelAPI\Basket\DiscountsExemptions
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getResident()
    {
      return $this->resident;
    }

    /**
     * @param boolean $resident
     * @return \App\models\hotelAPI\Basket\DiscountsExemptions
     */
    public function setResident($resident)
    {
      $this->resident = $resident;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \App\models\hotelAPI\Basket\DiscountsExemptions
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
