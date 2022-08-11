<?php

namespace App\models\ATSFlight;

class PNRResponseOSI
{

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $Text
     */
    protected $Text = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
      return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return \App\models\ATSFlight\PNRResponseOSI
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \App\models\ATSFlight\PNRResponseOSI
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
