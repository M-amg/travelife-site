<?php

namespace App\models\hotelAPI\Hotels;

class ValuationRQV22 extends ValuationRQV21
{

    /**
     * @var PaxNationalitiesRQ $paxNationalities
     */
    protected $paxNationalities = null;

    /**
     * @param boolean $onlyOnline
     */
    public function __construct($onlyOnline)
    {
      parent::__construct($onlyOnline);
    }

    /**
     * @return PaxNationalitiesRQ
     */
    public function getPaxNationalities()
    {
      return $this->paxNationalities;
    }

    /**
     * @param PaxNationalitiesRQ $paxNationalities
     * @return \App\models\hotelAPI\Hotels\ValuationRQV22
     */
    public function setPaxNationalities($paxNationalities)
    {
      $this->paxNationalities = $paxNationalities;
      return $this;
    }

}
