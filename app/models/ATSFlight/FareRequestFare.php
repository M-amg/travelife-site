<?php

namespace App\models\ATSFlight;

class FareRequestFare
{

    /**
     * @var FareRequestCharter $Charter
     */
    protected $Charter = null;

    /**
     * @var RequestGDSData $GDSFares
     */
    protected $GDSFares = null;

    /**
     * @var FareRequestNet $Net
     */
    protected $Net = null;

    /**
     * @var FareRequestVayant $Vayant
     */
    protected $Vayant = null;

    /**
     * @var FareRequestWeb $Web
     */
    protected $Web = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FareRequestCharter
     */
    public function getCharter()
    {
      return $this->Charter;
    }

    /**
     * @param FareRequestCharter $Charter
     * @return \App\models\ATSFlight\FareRequestFare
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
     * @return \App\models\ATSFlight\FareRequestFare
     */
    public function setGDSFares($GDSFares)
    {
      $this->GDSFares = $GDSFares;
      return $this;
    }

    /**
     * @return FareRequestNet
     */
    public function getNet()
    {
      return $this->Net;
    }

    /**
     * @param FareRequestNet $Net
     * @return \App\models\ATSFlight\FareRequestFare
     */
    public function setNet($Net)
    {
      $this->Net = $Net;
      return $this;
    }

    /**
     * @return FareRequestVayant
     */
    public function getVayant()
    {
      return $this->Vayant;
    }

    /**
     * @param FareRequestVayant $Vayant
     * @return \App\models\ATSFlight\FareRequestFare
     */
    public function setVayant($Vayant)
    {
      $this->Vayant = $Vayant;
      return $this;
    }

    /**
     * @return FareRequestWeb
     */
    public function getWeb()
    {
      return $this->Web;
    }

    /**
     * @param FareRequestWeb $Web
     * @return \App\models\ATSFlight\FareRequestFare
     */
    public function setWeb($Web)
    {
      $this->Web = $Web;
      return $this;
    }

}
