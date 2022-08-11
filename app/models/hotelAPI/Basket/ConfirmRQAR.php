<?php

namespace App\models\hotelAPI\Basket;

class ConfirmRQAR extends ConfirmRQ
{

    /**
     * @var string $agencyReference
     */
    protected $agencyReference = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAgencyReference()
    {
      return $this->agencyReference;
    }

    /**
     * @param string $agencyReference
     * @return \App\models\hotelAPI\Basket\ConfirmRQAR
     */
    public function setAgencyReference($agencyReference)
    {
      $this->agencyReference = $agencyReference;
      return $this;
    }

}
