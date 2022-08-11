<?php

namespace App\models\hotelAPI\Basket;

class GetDocRS
{

    /**
     * @var string $proFormaUrl
     */
    protected $proFormaUrl = null;

    /**
     * @var string[] $vouchersUrls
     */
    protected $vouchersUrls = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getProFormaUrl()
    {
      return $this->proFormaUrl;
    }

    /**
     * @param string $proFormaUrl
     * @return \App\models\hotelAPI\Basket\GetDocRS
     */
    public function setProFormaUrl($proFormaUrl)
    {
      $this->proFormaUrl = $proFormaUrl;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getVouchersUrls()
    {
      return $this->vouchersUrls;
    }

    /**
     * @param string[] $vouchersUrls
     * @return \App\models\hotelAPI\Basket\GetDocRS
     */
    public function setVouchersUrls(array $vouchersUrls = null)
    {
      $this->vouchersUrls = $vouchersUrls;
      return $this;
    }

}
