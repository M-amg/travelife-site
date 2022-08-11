<?php

namespace App\Services;

use App\Agence;

class BalanceService {

    /**
     * Gets the balance of given agency model.
     * 
     * Takes Agency model and string "hotel" or "flight"
     * 
     * @param \App\Agence $agency
     * @param string $service
     * @return double
     */
    public static function getBalance($agency, $service){
        switch ($service) {
            case 'hotel': return $agency->soldeHotel;
            case 'flight': return $agency->soldeFlight;
            case 'lowCost': return $agency->soldeLowCost;
        }
        // TODO raise Exception
        return null;
    }

    /**
     * return True if Agency has enough balance, False if it doesn't. Takes Agency model and string "hotel" or "flight"
     * 
     * @param \App\Agence $agency
     * @param string $service
     * @param double $amount
     * @return boolean
     */
    public static function hasEnoughBalance($agency, $service, $amount){
        \Log::debug($service);
        switch ($service) {
            case 'hotel': 
                $balance = $agency->soldeHotel;
                break;
            case 'flight':
                $balance = $agency->soldeFlight;
                break;
            case 'lowCost':
                $balance = $agency->soldeLowCost;
                break;
            // TODO raise exception
            default: return false;
        }

        \Log::debug('amount : '. $amount . ' > ' . $balance);

        if($balance >= $amount){
            return true;
        }

        return false;
    }

    /**
     * substract amount from balance and return true if it was successful. Takes Agency model and string "hotel" or "flight"
     * 
     * @param \App\Agence $agency
     * @param string $service
     * @param double $amount
     * @return boolean
     */
    public static function subtractFromBalance($agency, $service, $amount){
        if ($service === 'hotel') {
            $balance = $agency->soldeHotel;
            $agency->soldeHotel = $balance - $amount;
        } else if ($service === 'flight') {
            $balance = $agency->soldeFlight;
            $agency->soldeFlight = $balance - $amount;
        } else if ($service === 'lowCost') {
            $balance = $agency->soldeLowCost;
            $agency->soldeLowCost = $balance - $amount;
        } else {
            return false;
        }

        $agency->save();
        
        return true;
    }

}