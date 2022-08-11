<?php

namespace App\models\ATSFlight;

class DisplayRequestFare
{

    /**
     * @var DisplayRequestCharter $Charter
     */
    protected $Charter = null;

    /**
     * @var DisplayRequestGDSFares $GDS
     */
    protected $GDS = null;

    /**
     * @var DisplayRequestNet $Net
     */
    protected $Net = null;

    /**
     * @var RequestVayantData $Vayant
     */
    protected $Vayant = null;

    /**
     * @var DisplayRequestWeb $Web
     */
    protected $Web = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DisplayRequestCharter
     */
    public function getCharter()
    {
      return $this->Charter;
    }

    /**
     * @param DisplayRequestCharter $Charter
     * @return \App\models\ATSFlight\DisplayRequestFare
     */
    public function setCharter($Charter)
    {
      $this->Charter = $Charter;
      return $this;
    }

    /**
     * @return DisplayRequestGDSFares
     */
    public function getGDS()
    {
      return $this->GDS;
    }

    /**
     * @param DisplayRequestGDSFares $GDS
     * @return \App\models\ATSFlight\DisplayRequestFare
     */
    public function setGDS($GDS)
    {
      $this->GDS = $GDS;
      return $this;
    }

    /**
     * @return DisplayRequestNet
     */
    public function getNet()
    {
      return $this->Net;
    }

    /**
     * @param DisplayRequestNet $Net
     * @return \App\models\ATSFlight\DisplayRequestFare
     */
    public function setNet($Net)
    {
      $this->Net = $Net;
      return $this;
    }

    /**
     * @return RequestVayantData
     */
    public function getVayant()
    {
      return $this->Vayant;
    }

    /**
     * @param RequestVayantData $Vayant
     * @return \App\models\ATSFlight\DisplayRequestFare
     */
    public function setVayant($Vayant)
    {
      $this->Vayant = $Vayant;
      return $this;
    }

    /**
     * @return DisplayRequestWeb
     */
    public function getWeb()
    {
      return $this->Web;
    }

    /**
     * @param DisplayRequestWeb $Web
     * @return \App\models\ATSFlight\DisplayRequestFare
     */
    public function setWeb($Web)
    {
      $this->Web = $Web;
      return $this;
    }

}
