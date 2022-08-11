<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class CurrencyService {


    public static $percentage = 5;
    public static $supportedCurrencies = [
        // 'EUR' => [
        //     'code' => 'EUR',
        //     'name' => 'Euro',
        //     'symbole' => '€',
        // ],
        // 'USD' => [
        //     'code' => 'USD',
        //     'name' => 'US Dollar',
        //     'symbole' => '$',
        // ],
        'MAD' => [
            'code' => 'MAD',
            'name' => 'Moroccan Dirham',
            'symbole' => 'DH',
        ],
        // 'AED' => [
        //     'code' => 'AED',
        //     'name' => 'Arab Emarates Dirham',
        //     'symbole' => 'AED',
        // ],
    ];

    public const rates = [
        'EUR/MAD' => 11.5,
        'GBP/MAD' => 15.0,
        'USD/MAD' => 10.5,
    ];

    /**
     * get the list of supported currencies
     *
     * @return array
     */
    public static function getSupportedCurrencies(){
        return self::$supportedCurrencies;
    }

    /**
     * get the current selected currency
     *
     * @return array
     */
    public static function getCurrentCurrency(){

        return self::$supportedCurrencies['MAD']['code'];
    }

    /**
     * set the current selected currency
     *
     * @param string $currencyCode
     * @return string $currencyCode
     */
    public static function setCurrentCurrency($currencyCode){
        try{
            $currency = self::$supportedCurrencies[$currencyCode];
            Auth::user()->currencyCode = $currency['code'];
            Auth::user()->save();
        } catch (\Exception $ex){
            $currencyCode = self::getCurrentCurrency();
        }

        return $currencyCode;
    }

    /**
     * Converts an amount of one currency to the other
     *
     * @param float $amount
     * @param string $from
     * @param string $to
     * @return float $amount in the new currency
     */
    public static function convertCurrency(float $amount, string $from = 'EUR', string $to = 'MAD') : float
    {
        $rate = self::rates["$from/$to"];

        if (!$rate) {
            throw \Exception("The the conversion rate for $from/$to is not defined");
        }

        return $amount * $rate;
    }
}
