<?php

namespace App\models\hotelAPI\Hotels;

class EstablishmentDataRQV2 extends EstablishmentDataRQ
{

    /**
     * @var boolean $onlySelectedLanguage
     */
    protected $onlySelectedLanguage = null;

    /**
     * @param boolean $onlySelectedLanguage
     */
    public function __construct($onlySelectedLanguage)
    {
      parent::__construct();
      $this->onlySelectedLanguage = $onlySelectedLanguage;
    }

    /**
     * @return boolean
     */
    public function getOnlySelectedLanguage()
    {
      return $this->onlySelectedLanguage;
    }

    /**
     * @param boolean $onlySelectedLanguage
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataRQV2
     */
    public function setOnlySelectedLanguage($onlySelectedLanguage)
    {
      $this->onlySelectedLanguage = $onlySelectedLanguage;
      return $this;
    }

}
