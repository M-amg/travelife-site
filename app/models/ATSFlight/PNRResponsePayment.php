<?php

namespace App\models\ATSFlight;

class PNRResponsePayment
{

    /**
     * @var ArrayOfint $PassengerNumbers
     */
    protected $PassengerNumbers = null;

    /**
     * @var string $PaymentText
     */
    protected $PaymentText = null;

    /**
     * @var ArrayOfint $SegmentNumbers
     */
    protected $SegmentNumbers = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfint
     */
    public function getPassengerNumbers()
    {
      return $this->PassengerNumbers;
    }

    /**
     * @param ArrayOfint $PassengerNumbers
     * @return \App\models\ATSFlight\PNRResponsePayment
     */
    public function setPassengerNumbers($PassengerNumbers)
    {
      $this->PassengerNumbers = $PassengerNumbers;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentText()
    {
      return $this->PaymentText;
    }

    /**
     * @param string $PaymentText
     * @return \App\models\ATSFlight\PNRResponsePayment
     */
    public function setPaymentText($PaymentText)
    {
      $this->PaymentText = $PaymentText;
      return $this;
    }

    /**
     * @return ArrayOfint
     */
    public function getSegmentNumbers()
    {
      return $this->SegmentNumbers;
    }

    /**
     * @param ArrayOfint $SegmentNumbers
     * @return \App\models\ATSFlight\PNRResponsePayment
     */
    public function setSegmentNumbers($SegmentNumbers)
    {
      $this->SegmentNumbers = $SegmentNumbers;
      return $this;
    }

}
