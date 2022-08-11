<?php

namespace App\models\ATSFlight;

class QuoteRequestWebFareData
{

    /**
     * @var Agent $WebAgent
     */
    protected $WebAgent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Agent
     */
    public function getWebAgent()
    {
      return $this->WebAgent;
    }

    /**
     * @param Agent $WebAgent
     * @return \App\models\ATSFlight\QuoteRequestWebFareData
     */
    public function setWebAgent($WebAgent)
    {
      $this->WebAgent = $WebAgent;
      return $this;
    }

}
