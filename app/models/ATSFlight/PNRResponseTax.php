<?php

namespace App\models\ATSFlight;

class PNRResponseTax extends TaxDetail
{

    /**
     * @var string $Status
     */
    protected $Status = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \App\models\ATSFlight\PNRResponseTax
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

}
