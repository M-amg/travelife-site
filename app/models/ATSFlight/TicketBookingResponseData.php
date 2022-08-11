<?php

namespace App\models\ATSFlight;

class TicketBookingResponseData
{

    /**
     * @var ArrayOfstring $Links
     */
    protected $Links = null;

    /**
     * @var ModuleResponseData $ModuleInfo
     */
    protected $ModuleInfo = null;

    /**
     * @var string $PDF
     */
    protected $PDF = null;

    /**
     * @var ArrayOfTicketBookingResponsePassenger $Passengers
     */
    protected $Passengers = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var SourceModuleEnum $Source
     */
    protected $Source = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfstring
     */
    public function getLinks()
    {
      return $this->Links;
    }

    /**
     * @param ArrayOfstring $Links
     * @return \App\models\ATSFlight\TicketBookingResponseData
     */
    public function setLinks($Links)
    {
      $this->Links = $Links;
      return $this;
    }

    /**
     * @return ModuleResponseData
     */
    public function getModuleInfo()
    {
      return $this->ModuleInfo;
    }

    /**
     * @param ModuleResponseData $ModuleInfo
     * @return \App\models\ATSFlight\TicketBookingResponseData
     */
    public function setModuleInfo($ModuleInfo)
    {
      $this->ModuleInfo = $ModuleInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPDF()
    {
      return $this->PDF;
    }

    /**
     * @param string $PDF
     * @return \App\models\ATSFlight\TicketBookingResponseData
     */
    public function setPDF($PDF)
    {
      $this->PDF = $PDF;
      return $this;
    }

    /**
     * @return ArrayOfTicketBookingResponsePassenger
     */
    public function getPassengers()
    {
      return $this->Passengers;
    }

    /**
     * @param ArrayOfTicketBookingResponsePassenger $Passengers
     * @return \App\models\ATSFlight\TicketBookingResponseData
     */
    public function setPassengers($Passengers)
    {
      $this->Passengers = $Passengers;
      return $this;
    }

    /**
     * @return ResponseInfoDetails
     */
    public function getResponseInfo()
    {
      return $this->ResponseInfo;
    }

    /**
     * @param ResponseInfoDetails $ResponseInfo
     * @return \App\models\ATSFlight\TicketBookingResponseData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

    /**
     * @return SourceModuleEnum
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param SourceModuleEnum $Source
     * @return \App\models\ATSFlight\TicketBookingResponseData
     */
    public function setSource($Source)
    {
      $this->Source = $Source;
      return $this;
    }

}
