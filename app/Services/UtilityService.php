<?php

namespace App\Services;

use App\models\config\TlMarkUp;
use App\models\flight\Airport;

class UtilityService
{

    private $percentage = 0;
    private $percentageSetting;

    private static $instance;

    public static function getInstance(string $percentageSetting)
    {
        if (null === static::$instance || static::$instance->percentageSetting != $percentageSetting) {
            static::$instance = new static();
            static::$instance->percentage = TlMarkUp::where('name', $percentageSetting)->get()->first()->B2C ?? 0;
        }

        return static::$instance;
    }

    protected function __construct() {}
    protected function __clone() {}
    protected function __wakeup() {}

    /**
     * Add percentage to value (price) from the database
     *
     * @param float $value  The price that should to which the percentage will be added
     * @param string $percentageSetting The setting that has the value in the database e.g "jumbo"
     *
     * @return float
     */

    public static function addPercentage(float $value, string $percentageSetting)
    {
        $instance = self::getInstance($percentageSetting);
        $percentage = $instance->percentage;

        $result = $value + ($value * $percentage / 100);

        return $result;
    }

    public static function addFees($fees, $type, $class, $source)
    {

        if ($source == "WebFare" or $source == "WebSource")
            return $fees->price_lowcost;

        if ($type == "AR") {
            if ($class == "Economy")
                $feesPrice = $fees->price_ar_eco;
            else
                $feesPrice = $fees->price_ar_bus;
        } else {
            if ($class == "Economy")
                $feesPrice = $fees->price_as_eco;
            else
                $feesPrice = $fees->price_as_bus;
        }

        return $feesPrice;
    }
}
