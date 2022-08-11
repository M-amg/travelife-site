<?php

namespace App\models\ATSFlight;

class ResponseCurrencyData extends CurrencyData
{

    /**
     * @var SharedPrice $ConvertedPrice
     */
    protected $ConvertedPrice = null;

    /**
     * @var ResponseInfoDetails $ResponseInfo
     */
    protected $ResponseInfo = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return SharedPrice
     */
    public function getConvertedPrice()
    {
      return $this->ConvertedPrice;
    }

    /**
     * @param SharedPrice $ConvertedPrice
     * @return \App\models\ATSFlight\ResponseCurrencyData
     */
    public function setConvertedPrice($ConvertedPrice)
    {
      $this->ConvertedPrice = $ConvertedPrice;
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
     * @return \App\models\ATSFlight\ResponseCurrencyData
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

}
