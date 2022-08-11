<?php

namespace App\models\ATSFlight;

class ValidateFlightDateResponse
{

    /**
     * @var ValidateFlightDateResponseData $ValidateFlightDateResult
     */
    protected $ValidateFlightDateResult = null;

    /**
     * @param ValidateFlightDateResponseData $ValidateFlightDateResult
     */
    public function __construct($ValidateFlightDateResult)
    {
      $this->ValidateFlightDateResult = $ValidateFlightDateResult;
    }

    /**
     * @return ValidateFlightDateResponseData
     */
    public function getValidateFlightDateResult()
    {
      return $this->ValidateFlightDateResult;
    }

    /**
     * @param ValidateFlightDateResponseData $ValidateFlightDateResult
     * @return \App\models\ATSFlight\ValidateFlightDateResponse
     */
    public function setValidateFlightDateResult($ValidateFlightDateResult)
    {
      $this->ValidateFlightDateResult = $ValidateFlightDateResult;
      return $this;
    }

}
