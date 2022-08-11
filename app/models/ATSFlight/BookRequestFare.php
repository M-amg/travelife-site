<?php

namespace App\models\ATSFlight;

class BookRequestFare
{

    /**
     * @var BookRequestCorporate $Corporate
     */
    protected $Corporate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BookRequestCorporate
     */
    public function getCorporate()
    {
      return $this->Corporate;
    }

    /**
     * @param BookRequestCorporate $Corporate
     * @return \App\models\ATSFlight\BookRequestFare
     */
    public function setCorporate($Corporate)
    {
      $this->Corporate = $Corporate;
      return $this;
    }

}
