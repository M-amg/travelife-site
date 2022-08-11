<?php

namespace App\models\ATSFlight;

class ReissueRequestPayment extends PaymentDefinitionData
{

    /**
     * @var string $AccountCode
     */
    protected $AccountCode = null;

    /**
     * @param int $ID
     * @param PaymentTypeEnum $PaymentType
     */
    public function __construct($ID, $PaymentType)
    {
      parent::__construct($ID, $PaymentType);
    }

    /**
     * @return string
     */
    public function getAccountCode()
    {
      return $this->AccountCode;
    }

    /**
     * @param string $AccountCode
     * @return \App\models\ATSFlight\ReissueRequestPayment
     */
    public function setAccountCode($AccountCode)
    {
      $this->AccountCode = $AccountCode;
      return $this;
    }

}
