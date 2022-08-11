<?php

namespace App\models\hotelAPI\Hotels;

class EstablishmentDataRSV2 extends EstablishmentDataRS
{

    /**
     * @var Failure $failure
     */
    protected $failure = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return Failure
     */
    public function getFailure()
    {
      return $this->failure;
    }

    /**
     * @param Failure $failure
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRSV2
     */
    public function setFailure($failure)
    {
      $this->failure = $failure;
      return $this;
    }

}
