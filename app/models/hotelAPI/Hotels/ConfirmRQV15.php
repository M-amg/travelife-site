<?php

namespace App\models\hotelAPI\Hotels;

class ConfirmRQV15 extends ConfirmRQ
{

    /**
     * @param boolean $onlyOnline
     * @param boolean $closeBasket
     */
    public function __construct($onlyOnline, $closeBasket)
    {
      parent::__construct($onlyOnline, $closeBasket);
    }

}
