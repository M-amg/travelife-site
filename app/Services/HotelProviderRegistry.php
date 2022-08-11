<?php


namespace App\Services;


use App\Adapters\HotelProviderInterface;
use Exception;

class HotelProviderRegistry
{
    protected $hotelProviders = [];

    function register(string $name, HotelProviderInterface $instance)
    {
        //dd($instance);
        $this->hotelProviders[$name] = $instance;
        return $this;
    }

    function get(string $name) : HotelProviderInterface
    {

        if ( isset($this->hotelProviders[$name]) ) {
            return $this->hotelProviders[$name];
        } else {
            throw new Exception("Invalid Hotel Provider requested to HotelProviderRegistry");
        }
    }
}
