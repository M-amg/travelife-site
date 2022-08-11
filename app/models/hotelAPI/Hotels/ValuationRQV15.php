<?php

namespace App\models\hotelAPI\Hotels;

class ValuationRQV15 extends ValuationRQ
{

    /**
     * @param boolean $onlyOnline
     */
    public function __construct($onlyOnline)
    {
      parent::__construct($onlyOnline);
    }

}
