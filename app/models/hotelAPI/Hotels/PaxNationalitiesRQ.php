<?php

namespace App\models\hotelAPI\Hotels;

class PaxNationalitiesRQ
{

    /**
     * @var string[] $nationality
     */
    protected $nationality = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getNationality()
    {
      return $this->nationality;
    }

    /**
     * @param string[] $nationality
     * @return \App\models\hotelAPI\Hotels\PaxNationalitiesRQ
     */
    public function setNationality(array $nationality = null)
    {
      $this->nationality = $nationality;
      return $this;
    }

}
