<?php

namespace App\models\hotelAPI\Hotels;

class ExtendedLogin
{

    /**
     * @var string $channel
     */
    protected $channel = null;

    /**
     * @var string $loginCountry
     */
    protected $loginCountry = null;

    /**
     * @var string $mainNationality
     */
    protected $mainNationality = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getChannel()
    {
      return $this->channel;
    }

    /**
     * @param string $channel
     * @return \App\models\hotelAPI\Hotels\ExtendedLogin
     */
    public function setChannel($channel)
    {
      $this->channel = $channel;
      return $this;
    }

    /**
     * @return string
     */
    public function getLoginCountry()
    {
      return $this->loginCountry;
    }

    /**
     * @param string $loginCountry
     * @return \App\models\hotelAPI\Hotels\ExtendedLogin
     */
    public function setLoginCountry($loginCountry)
    {
      $this->loginCountry = $loginCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getMainNationality()
    {
      return $this->mainNationality;
    }

    /**
     * @param string $mainNationality
     * @return \App\models\hotelAPI\Hotels\ExtendedLogin
     */
    public function setMainNationality($mainNationality)
    {
      $this->mainNationality = $mainNationality;
      return $this;
    }

}
