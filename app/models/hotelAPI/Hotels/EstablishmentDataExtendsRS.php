<?php

namespace App\models\hotelAPI\Hotels;

class EstablishmentDataExtendsRS extends EstablishmentDataRSV2
{

    /**
     * @var string $additionalInformation
     */
    protected $additionalInformation = null;

    /**
     * @var string $directions
     */
    protected $directions = null;

    /**
     * @var string $locationInformation
     */
    protected $locationInformation = null;

    /**
     * @var string $roomsInformation
     */
    protected $roomsInformation = null;

    /**
     * @var string $xmlUri
     */
    protected $xmlUri = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getAdditionalInformation()
    {
      return $this->additionalInformation;
    }

    /**
     * @param string $additionalInformation
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataExtendsRS
     */
    public function setAdditionalInformation($additionalInformation)
    {
      $this->additionalInformation = $additionalInformation;
      return $this;
    }

    /**
     * @return string
     */
    public function getDirections()
    {
      return $this->directions;
    }

    /**
     * @param string $directions
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataExtendsRS
     */
    public function setDirections($directions)
    {
      $this->directions = $directions;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocationInformation()
    {
      return $this->locationInformation;
    }

    /**
     * @param string $locationInformation
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataExtendsRS
     */
    public function setLocationInformation($locationInformation)
    {
      $this->locationInformation = $locationInformation;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoomsInformation()
    {
      return $this->roomsInformation;
    }

    /**
     * @param string $roomsInformation
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataExtendsRS
     */
    public function setRoomsInformation($roomsInformation)
    {
      $this->roomsInformation = $roomsInformation;
      return $this;
    }

    /**
     * @return string
     */
    public function getXmlUri()
    {
      return $this->xmlUri;
    }

    /**
     * @param string $xmlUri
     * @return \App\models\hotelAPI\Hotels\EstablishmentDataExtendsRS
     */
    public function setXmlUri($xmlUri)
    {
      $this->xmlUri = $xmlUri;
      return $this;
    }

}
