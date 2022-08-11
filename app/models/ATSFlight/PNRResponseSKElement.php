<?php

namespace App\models\ATSFlight;

class PNRResponseSKElement
{

    /**
     * @var string $Carrier
     */
    protected $Carrier = null;

    /**
     * @var string $Keyword
     */
    protected $Keyword = null;

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
     * @return \App\models\ATSFlight\PNRResponseSKElement
     */
    public function setCarrier($Carrier)
    {
      $this->Carrier = $Carrier;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyword()
    {
      return $this->Keyword;
    }

    /**
     * @param string $Keyword
     * @return \App\models\ATSFlight\PNRResponseSKElement
     */
    public function setKeyword($Keyword)
    {
      $this->Keyword = $Keyword;
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
     * @return \App\models\ATSFlight\PNRResponseSKElement
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

}
