<?php

namespace App\models\ATSFlight;

class BookRequestBackOffice extends BackOfficeData
{

    /**
     * @var string $CustomerReferenceNumber
     */
    protected $CustomerReferenceNumber = null;

    /**
     * @var string $InformationText
     */
    protected $InformationText = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getCustomerReferenceNumber()
    {
      return $this->CustomerReferenceNumber;
    }

    /**
     * @param string $CustomerReferenceNumber
     * @return \App\models\ATSFlight\BookRequestBackOffice
     */
    public function setCustomerReferenceNumber($CustomerReferenceNumber)
    {
      $this->CustomerReferenceNumber = $CustomerReferenceNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getInformationText()
    {
      return $this->InformationText;
    }

    /**
     * @param string $InformationText
     * @return \App\models\ATSFlight\BookRequestBackOffice
     */
    public function setInformationText($InformationText)
    {
      $this->InformationText = $InformationText;
      return $this;
    }

}
