<?php

namespace App\models\ATSFlight;

class ChangeFlightSurcharge
{

    /**
     * @var string $Currency
     */
    protected $Currency = null;

    /**
     * @var float $Level
     */
    protected $Level = null;

    /**
     * @var SurchargeRelationEnum $Relation
     */
    protected $Relation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return \App\models\ATSFlight\ChangeFlightSurcharge
     */
    public function setCurrency($Currency)
    {
      $this->Currency = $Currency;
      return $this;
    }

    /**
     * @return float
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param float $Level
     * @return \App\models\ATSFlight\ChangeFlightSurcharge
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return SurchargeRelationEnum
     */
    public function getRelation()
    {
      return $this->Relation;
    }

    /**
     * @param SurchargeRelationEnum $Relation
     * @return \App\models\ATSFlight\ChangeFlightSurcharge
     */
    public function setRelation($Relation)
    {
      $this->Relation = $Relation;
      return $this;
    }

}
