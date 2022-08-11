<?php

namespace App\models\ATSFlight;

class BookRequestCorporate
{

    /**
     * @var string $CorpFareAccessCode
     */
    protected $CorpFareAccessCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCorpFareAccessCode()
    {
      return $this->CorpFareAccessCode;
    }

    /**
     * @param string $CorpFareAccessCode
     * @return \App\models\ATSFlight\BookRequestCorporate
     */
    public function setCorpFareAccessCode($CorpFareAccessCode)
    {
      $this->CorpFareAccessCode = $CorpFareAccessCode;
      return $this;
    }

}
