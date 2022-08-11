<?php

namespace App\models\ATSFlight;

class RequestFareData
{

    /**
     * @var RequestCharterData $Charter
     */
    protected $Charter = null;

    /**
     * @var RequestGDSData $GDSFares
     */
    protected $GDSFares = null;

    /**
     * @var RequestNetData $Net
     */
    protected $Net = null;

    /**
     * @var RequestVayantData $VayantFares
     */
    protected $VayantFares = null;

    /**
     * @var RequestWebData $Web
     */
    protected $Web = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RequestCharterData
     */
    public function getCharter()
    {
      return $this->Charter;
    }

    /**
     * @param RequestCharterData $Charter
     * @return \App\models\ATSFlight\RequestFareData
     */
    public function setCharter($Charter)
    {
      $this->Charter = $Charter;
      return $this;
    }

    /**
     * @return RequestGDSData
     */
    public function getGDSFares()
    {
      return $this->GDSFares;
    }

    /**
     * @param RequestGDSData $GDSFares
     * @return \App\models\ATSFlight\RequestFareData
     */
    public function setGDSFares($GDSFares)
    {
      $this->GDSFares = $GDSFares;
      return $this;
    }

    /**
     * @return RequestNetData
     */
    public function getNet()
    {
      return $this->Net;
    }

    /**
     * @param RequestNetData $Net
     * @return \App\models\ATSFlight\RequestFareData
     */
    public function setNet($Net)
    {
      $this->Net = $Net;
      return $this;
    }

    /**
     * @return RequestVayantData
     */
    public function getVayantFares()
    {
      return $this->VayantFares;
    }

    /**
     * @param RequestVayantData $VayantFares
     * @return \App\models\ATSFlight\RequestFareData
     */
    public function setVayantFares($VayantFares)
    {
      $this->VayantFares = $VayantFares;
      return $this;
    }

    /**
     * @return RequestWebData
     */
    public function getWeb()
    {
      return $this->Web;
    }

    /**
     * @param RequestWebData $Web
     * @return \App\models\ATSFlight\RequestFareData
     */
    public function setWeb($Web)
    {
      $this->Web = $Web;
      return $this;
    }

}
