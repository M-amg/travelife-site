<?php

namespace App\models\hotelAPI\Commons;

class GetProductRS
{

    /**
     * @var Product[] $product
     */
    protected $product = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Product[]
     */
    public function getProduct()
    {
      return $this->product;
    }

    /**
     * @param Product[] $product
     * @return \App\models\hotelAPI\Commons\GetProductRS
     */
    public function setProduct(array $product = null)
    {
      $this->product = $product;
      return $this;
    }

}
