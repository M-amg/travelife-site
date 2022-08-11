<?php

namespace App\models\ATSFlight;

class ConvertCurrencyResponse
{

    /**
     * @var ResponseCurrencyData $ConvertCurrencyResult
     */
    protected $ConvertCurrencyResult = null;

    /**
     * @param ResponseCurrencyData $ConvertCurrencyResult
     */
    public function __construct($ConvertCurrencyResult)
    {
      $this->ConvertCurrencyResult = $ConvertCurrencyResult;
    }

    /**
     * @return ResponseCurrencyData
     */
    public function getConvertCurrencyResult()
    {
      return $this->ConvertCurrencyResult;
    }

    /**
     * @param ResponseCurrencyData $ConvertCurrencyResult
     * @return \App\models\ATSFlight\ConvertCurrencyResponse
     */
    public function setConvertCurrencyResult($ConvertCurrencyResult)
    {
      $this->ConvertCurrencyResult = $ConvertCurrencyResult;
      return $this;
    }

}
