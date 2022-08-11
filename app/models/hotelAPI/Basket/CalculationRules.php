<?php

namespace App\models\hotelAPI\Basket;

class CalculationRules
{

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var string $duration
     */
    protected $duration = null;

    /**
     * @var float $maxImport
     */
    protected $maxImport = null;

    /**
     * @var int $maxNights
     */
    protected $maxNights = null;

    /**
     * @var string $scope
     */
    protected $scope = null;

    /**
     * @var boolean $taxIncluded
     */
    protected $taxIncluded = null;

    /**
     * @param float $maxImport
     * @param int $maxNights
     * @param boolean $taxIncluded
     */
    public function __construct($maxImport, $maxNights, $taxIncluded)
    {
      $this->maxImport = $maxImport;
      $this->maxNights = $maxNights;
      $this->taxIncluded = $taxIncluded;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param string $currency
     * @return \App\models\hotelAPI\Basket\CalculationRules
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
      return $this->duration;
    }

    /**
     * @param string $duration
     * @return \App\models\hotelAPI\Basket\CalculationRules
     */
    public function setDuration($duration)
    {
      $this->duration = $duration;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaxImport()
    {
      return $this->maxImport;
    }

    /**
     * @param float $maxImport
     * @return \App\models\hotelAPI\Basket\CalculationRules
     */
    public function setMaxImport($maxImport)
    {
      $this->maxImport = $maxImport;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNights()
    {
      return $this->maxNights;
    }

    /**
     * @param int $maxNights
     * @return \App\models\hotelAPI\Basket\CalculationRules
     */
    public function setMaxNights($maxNights)
    {
      $this->maxNights = $maxNights;
      return $this;
    }

    /**
     * @return string
     */
    public function getScope()
    {
      return $this->scope;
    }

    /**
     * @param string $scope
     * @return \App\models\hotelAPI\Basket\CalculationRules
     */
    public function setScope($scope)
    {
      $this->scope = $scope;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTaxIncluded()
    {
      return $this->taxIncluded;
    }

    /**
     * @param boolean $taxIncluded
     * @return \App\models\hotelAPI\Basket\CalculationRules
     */
    public function setTaxIncluded($taxIncluded)
    {
      $this->taxIncluded = $taxIncluded;
      return $this;
    }

}
