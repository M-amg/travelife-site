<?php

namespace App\models\hotelAPI\Basket;

class GetBasketsRQV16 extends GetBasketsRQ
{

    /**
     * @var string $paymentStatus
     */
    protected $paymentStatus = null;

    /**
     * @param int $fromRow
     * @param int $numRows
     */
    public function __construct($fromRow, $numRows)
    {
      parent::__construct($fromRow, $numRows);
    }

    /**
     * @return string
     */
    public function getPaymentStatus()
    {
      return $this->paymentStatus;
    }

    /**
     * @param string $paymentStatus
     * @return \App\models\hotelAPI\Basket\GetBasketsRQV16
     */
    public function setPaymentStatus($paymentStatus)
    {
      $this->paymentStatus = $paymentStatus;
      return $this;
    }

}
