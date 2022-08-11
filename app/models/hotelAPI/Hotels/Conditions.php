<?php

namespace App\models\hotelAPI\Hotels;

class Conditions
{

    /**
     * @var CalculationRules $calculationRules
     */
    protected $calculationRules = null;

    /**
     * @var DiscountsExemptions[] $discountsExemptions
     */
    protected $discountsExemptions = null;

    /**
     * @var Tax[] $tax
     */
    protected $tax = null;

    /**
     * @var string $version
     */
    protected $version = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return CalculationRules
     */
    public function getCalculationRules()
    {
      return $this->calculationRules;
    }

    /**
     * @param CalculationRules $calculationRules
     * @return \App\models\hotelAPI\Hotels\Conditions
     */
    public function setCalculationRules($calculationRules)
    {
      $this->calculationRules = $calculationRules;
      return $this;
    }

    /**
     * @return DiscountsExemptions[]
     */
    public function getDiscountsExemptions()
    {
      return $this->discountsExemptions;
    }

    /**
     * @param DiscountsExemptions[] $discountsExemptions
     * @return \App\models\hotelAPI\Hotels\Conditions
     */
    public function setDiscountsExemptions(array $discountsExemptions = null)
    {
      $this->discountsExemptions = $discountsExemptions;
      return $this;
    }

    /**
     * @return Tax[]
     */
    public function getTax()
    {
      return $this->tax;
    }

    /**
     * @param Tax[] $tax
     * @return \App\models\hotelAPI\Hotels\Conditions
     */
    public function setTax(array $tax = null)
    {
      $this->tax = $tax;
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->version;
    }

    /**
     * @param string $version
     * @return \App\models\hotelAPI\Hotels\Conditions
     */
    public function setVersion($version)
    {
      $this->version = $version;
      return $this;
    }

}
