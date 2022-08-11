<?php

namespace App\models\hotelAPI\Hotels;

class AvailabilityMultiRSV15 extends AvailabilityMultiRSV13
{

    /**
     * @param int $fromRow
     * @param int $numRows
     * @param int $totalRows
     */
    public function __construct($fromRow, $numRows, $totalRows)
    {
      parent::__construct($fromRow, $numRows, $totalRows);
    }

}
