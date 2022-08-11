<?php

namespace App\models\hotelAPI\Commons;

class pingDispoResponse
{

    /**
     * @var int $result
     */
    protected $result = null;

    /**
     * @param int $result
     */
    public function __construct($result)
    {
      $this->result = $result;
    }

    /**
     * @return int
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param int $result
     * @return \App\models\hotelAPI\Commons\pingDispoResponse
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
