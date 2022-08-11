<?php

namespace App\models\ATSFlight;

class BookResponseLeg
{

    /**
     * @var boolean $SeatPreferences
     */
    protected $SeatPreferences = null;

    /**
     * @var ArrayOfBookResponseSegment $Segments
     */
    protected $Segments = null;

    /**
     * @var string $TariffMatchCode
     */
    protected $TariffMatchCode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getSeatPreferences()
    {
      return $this->SeatPreferences;
    }

    /**
     * @param boolean $SeatPreferences
     * @return \App\models\ATSFlight\BookResponseLeg
     */
    public function setSeatPreferences($SeatPreferences)
    {
      $this->SeatPreferences = $SeatPreferences;
      return $this;
    }

    /**
     * @return ArrayOfBookResponseSegment
     */
    public function getSegments()
    {
      return $this->Segments;
    }

    /**
     * @param ArrayOfBookResponseSegment $Segments
     * @return \App\models\ATSFlight\BookResponseLeg
     */
    public function setSegments($Segments)
    {
      $this->Segments = $Segments;
      return $this;
    }

    /**
     * @return string
     */
    public function getTariffMatchCode()
    {
      return $this->TariffMatchCode;
    }

    /**
     * @param string $TariffMatchCode
     * @return \App\models\ATSFlight\BookResponseLeg
     */
    public function setTariffMatchCode($TariffMatchCode)
    {
      $this->TariffMatchCode = $TariffMatchCode;
      return $this;
    }

}
