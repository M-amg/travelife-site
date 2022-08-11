<?php

namespace App\models\ATSFlight;

class DisplayRequestWeb
{

    /**
     * @var string $Country
     */
    protected $Country = null;

    /**
     * @var int $NumberOfWebFares
     */
    protected $NumberOfWebFares = null;

    /**
     * @var ArrayOfAgent $WebAgents
     */
    protected $WebAgents = null;

    /**
     * @var string $WebLanguageCode
     */
    protected $WebLanguageCode = null;

    /**
     * @param int $NumberOfWebFares
     */
    public function __construct($NumberOfWebFares)
    {
      $this->NumberOfWebFares = $NumberOfWebFares;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->Country;
    }

    /**
     * @param string $Country
     * @return \App\models\ATSFlight\DisplayRequestWeb
     */
    public function setCountry($Country)
    {
      $this->Country = $Country;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfWebFares()
    {
      return $this->NumberOfWebFares;
    }

    /**
     * @param int $NumberOfWebFares
     * @return \App\models\ATSFlight\DisplayRequestWeb
     */
    public function setNumberOfWebFares($NumberOfWebFares)
    {
      $this->NumberOfWebFares = $NumberOfWebFares;
      return $this;
    }

    /**
     * @return ArrayOfAgent
     */
    public function getWebAgents()
    {
      return $this->WebAgents;
    }

    /**
     * @param ArrayOfAgent $WebAgents
     * @return \App\models\ATSFlight\DisplayRequestWeb
     */
    public function setWebAgents($WebAgents)
    {
      $this->WebAgents = $WebAgents;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebLanguageCode()
    {
      return $this->WebLanguageCode;
    }

    /**
     * @param string $WebLanguageCode
     * @return \App\models\ATSFlight\DisplayRequestWeb
     */
    public function setWebLanguageCode($WebLanguageCode)
    {
      $this->WebLanguageCode = $WebLanguageCode;
      return $this;
    }

}
