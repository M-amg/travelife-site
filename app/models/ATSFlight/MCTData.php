<?php

namespace App\models\ATSFlight;

class MCTData
{

    /**
     * @var string $MCTDatabase
     */
    protected $MCTDatabase = null;

    /**
     * @var MCTHadlingEnum $MCTHandling
     */
    protected $MCTHandling = null;

    /**
     * @var MCTSourceEnum $MCTSource
     */
    protected $MCTSource = null;

    /**
     * @var ArrayOfAirportMCT $MCTValues
     */
    protected $MCTValues = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getMCTDatabase()
    {
      return $this->MCTDatabase;
    }

    /**
     * @param string $MCTDatabase
     * @return \App\models\ATSFlight\MCTData
     */
    public function setMCTDatabase($MCTDatabase)
    {
      $this->MCTDatabase = $MCTDatabase;
      return $this;
    }

    /**
     * @return MCTHadlingEnum
     */
    public function getMCTHandling()
    {
      return $this->MCTHandling;
    }

    /**
     * @param MCTHadlingEnum $MCTHandling
     * @return \App\models\ATSFlight\MCTData
     */
    public function setMCTHandling($MCTHandling)
    {
      $this->MCTHandling = $MCTHandling;
      return $this;
    }

    /**
     * @return MCTSourceEnum
     */
    public function getMCTSource()
    {
      return $this->MCTSource;
    }

    /**
     * @param MCTSourceEnum $MCTSource
     * @return \App\models\ATSFlight\MCTData
     */
    public function setMCTSource($MCTSource)
    {
      $this->MCTSource = $MCTSource;
      return $this;
    }

    /**
     * @return ArrayOfAirportMCT
     */
    public function getMCTValues()
    {
      return $this->MCTValues;
    }

    /**
     * @param ArrayOfAirportMCT $MCTValues
     * @return \App\models\ATSFlight\MCTData
     */
    public function setMCTValues($MCTValues)
    {
      $this->MCTValues = $MCTValues;
      return $this;
    }

}
