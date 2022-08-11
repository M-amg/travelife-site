<?php

namespace App\models\ATSFlight;

class TaxDetail
{

    /**
     * @var TaxOverrideAction $Action
     */
    protected $Action = null;

    /**
     * @var SharedPrice $Price
     */
    protected $Price = null;

    /**
     * @var string $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TaxOverrideAction
     */
    public function getAction()
    {
      return $this->Action;
    }

    /**
     * @param TaxOverrideAction $Action
     * @return \App\models\ATSFlight\TaxDetail
     */
    public function setAction($Action)
    {
      $this->Action = $Action;
      return $this;
    }

    /**
     * @return SharedPrice
     */
    public function getPrice()
    {
      return $this->Price;
    }

    /**
     * @param SharedPrice $Price
     * @return \App\models\ATSFlight\TaxDetail
     */
    public function setPrice($Price)
    {
      $this->Price = $Price;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param string $Type
     * @return \App\models\ATSFlight\TaxDetail
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
