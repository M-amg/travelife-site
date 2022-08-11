<?php

namespace App\models\hotelAPI\Commons;

class Product
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var Product[] $subproduct
     */
    protected $subproduct = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \App\models\hotelAPI\Commons\Product
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \App\models\hotelAPI\Commons\Product
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return Product[]
     */
    public function getSubproduct()
    {
      return $this->subproduct;
    }

    /**
     * @param Product[] $subproduct
     * @return \App\models\hotelAPI\Commons\Product
     */
    public function setSubproduct(array $subproduct = null)
    {
      $this->subproduct = $subproduct;
      return $this;
    }

}
