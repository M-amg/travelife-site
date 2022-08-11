<?php

namespace App\models\ATSFlight;

class FareComplexFare extends FareRequestFare
{

    /**
     * @var int $FareID
     */
    protected $FareID = null;

    /**
     * @var string $FareName
     */
    protected $FareName = null;

    /**
     * @param int $FareID
     */
    public function __construct($FareID)
    {
      parent::__construct();
      $this->FareID = $FareID;
    }

    /**
     * @return int
     */
    public function getFareID()
    {
      return $this->FareID;
    }

    /**
     * @param int $FareID
     * @return \App\models\ATSFlight\FareComplexFare
     */
    public function setFareID($FareID)
    {
      $this->FareID = $FareID;
      return $this;
    }

    /**
     * @return string
     */
    public function getFareName()
    {
      return $this->FareName;
    }

    /**
     * @param string $FareName
     * @return \App\models\ATSFlight\FareComplexFare
     */
    public function setFareName($FareName)
    {
      $this->FareName = $FareName;
      return $this;
    }

}
