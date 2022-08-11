<?php

namespace App\models\ATSFlight;

class BookFareResponse
{

    /**
     * @var BookResponseData $BookFareResult
     */
    protected $BookFareResult = null;

    /**
     * @param BookResponseData $BookFareResult
     */
    public function __construct($BookFareResult)
    {
      $this->BookFareResult = $BookFareResult;
    }

    /**
     * @return BookResponseData
     */
    public function getBookFareResult()
    {
      return $this->BookFareResult;
    }

    /**
     * @param BookResponseData $BookFareResult
     * @return \App\models\ATSFlight\BookFareResponse
     */
    public function setBookFareResult($BookFareResult)
    {
      $this->BookFareResult = $BookFareResult;
      return $this;
    }

}
