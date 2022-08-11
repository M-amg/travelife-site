<?php

namespace App\models\ATSFlight;

class DisplayRequestGDSFares extends GDSFares
{

    /**
     * @var int $ConcurrentFareDisplays
     */
    protected $ConcurrentFareDisplays = null;

    /**
     * @var boolean $ExcludeSpecialFares
     */
    protected $ExcludeSpecialFares = null;

    /**
     * @param GDSTypeEnum $GDSTypes
     * @param int $NumberOfFares
     */
    public function __construct($GDSTypes, $NumberOfFares)
    {
      parent::__construct($GDSTypes, $NumberOfFares);
    }

    /**
     * @return int
     */
    public function getConcurrentFareDisplays()
    {
      return $this->ConcurrentFareDisplays;
    }

    /**
     * @param int $ConcurrentFareDisplays
     * @return \App\models\ATSFlight\DisplayRequestGDSFares
     */
    public function setConcurrentFareDisplays($ConcurrentFareDisplays)
    {
      $this->ConcurrentFareDisplays = $ConcurrentFareDisplays;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExcludeSpecialFares()
    {
      return $this->ExcludeSpecialFares;
    }

    /**
     * @param boolean $ExcludeSpecialFares
     * @return \App\models\ATSFlight\DisplayRequestGDSFares
     */
    public function setExcludeSpecialFares($ExcludeSpecialFares)
    {
      $this->ExcludeSpecialFares = $ExcludeSpecialFares;
      return $this;
    }

}
