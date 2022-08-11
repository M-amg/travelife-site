<?php

namespace App\Services;


use App\models\hotel\TlRoomType;
use Carbon\Carbon;

class HotelService
{
    public function __construct()
    {

        $this->timeout = 90000;

    }

    private function hotelPriceStandard($rate, $room, $chickIn, $chickOut)
    {

        $promo = $room->tlPromos()->where('startDate', '<=', $rate->date)->where('endDate', '>=', $rate->date)->first();
        $discount = 0;
        $commission = $rate->commission;

        if ($rate->typeCommission == 1) {
            $commission = ($rate->price * $rate->commission) / 100;
        }
        if ($promo) {
            if ($promo->minStay <= $chickIn->diffInDays($chickOut)) {
                if ($promo->typePromo == 1) {
                    $discount = (($rate->price + $commission) * $promo->discount) / 100;
                } else
                    $discount = $promo->discount;
            }
        }


        return ["price"=>$rate->price + $commission,"commission"=>$commission];

    }

    private function hotelPriceConfig($price, $room, $chickIn, $chickOut, $rate)
    {
        // $promo = $room->tlPromos()->where('startDate', '<=', $rate->date)->where('endDate', '>=', $rate->date)->first();
        // $discount = 0;
        $commission = $rate->commission;

        if ($rate->typeCommission == 1) {
            $commission = ($price * $rate->commission) / 100;
        }
        // if ($promo) {
        //     if ($promo->minStay <= $chickIn->diffInDays($chickOut)) {
        //         if ($promo->typePromo == 1) {
        //             $discount = ($price * $promo->discount) / 100;
        //         } else
        //             $discount = $promo->discount;
        //     }
        // }
        return ["price"=>$price + $commission,"commission"=>$commission];

    }


    private function infantPrice($rate, $room, $hotel, $chickIn, $chickOut, $children)
    {
        $infant = 0;
        $commission=0;
        $promo = $room->tlPromos()->where('startDate', '<=', $rate->date)->where('endDate', '>=', $rate->date)->first();

        $commissionInfant = [];
        if ($rate->typeCommission == 1) {
            if ($rate->deuxiemeEnfant) {
                $commissionInfant = ($rate->deuxiemeEnfantPrice * $rate->commission) / 100;
            } else {
                foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
                    $priceInfant = $rate->tlPoliciesAgeEnfantRates()->where('tl_policies_age_enfant_id', $ageEnfant->id)->first() ?$rate->tlPoliciesAgeEnfantRates()->where('tl_policies_age_enfant_id', $ageEnfant->id)->first()->price : 0;
                    $commissionInfant[$ageEnfant->id] = ($priceInfant * $rate->commission) / 100;
                }
            }

        } else {
            if ($rate->deuxiemeEnfant) {
                $commissionInfant = $rate->commission;
            } else {
                foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
                    $commissionInfant[$ageEnfant->id] = $rate->commission;
                }
            }
        }


        $discountInfant =0;
        if ($promo) {
            if ($promo->minStay <= $chickIn->diffInDays($chickOut)) {
                if ($promo->typePromo == 1) {
                    if ($rate->deuxiemeEnfant) {
                        $discountInfant = (($rate->deuxiemeEnfantPrice + $commissionInfant) * $promo->discount) / 100;
                    } else {
                        $discountInfant = [];
                        foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
                            $priceInfant = $rate->tlPoliciesAgeEnfantRates()->where('tl_policies_age_enfant_id', $ageEnfant->id)->first()->price;
                            $discountInfant[$ageEnfant->id] = (($priceInfant + $commissionInfant[$ageEnfant->id]) * $promo->discount) / 100;
                        }
                    }
                }
            } else {
                if ($rate->deuxiemeEnfant) {
                    $discountInfant = $promo->discount;
                } else {
                    $discountInfant = [];
                    foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
                        $discountInfant[$ageEnfant->id] = $promo->discount;
                    }
                }

            }
        }

        if ($rate->deuxiemeEnfant) {
            $nbInfant = $this->numberOfPassenger($children, "child", $hotel);
            if ($nbInfant >= 2) {
                $priceInfant = $rate->deuxiemeEnfantPrice;
                $dec = isset($discountInfant) ? $discountInfant : 0;
                $com = isset($commissionInfant) ? $commissionInfant : 0;
                $infant = $priceInfant + $com - $dec;
            } else {
                $infant = 0;
            }
        } else {
            foreach ($children as $key => $child) {
                foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
                    if ($key == $ageEnfant->TypeEnfant) {
                        $priceInfant = $rate->tlPoliciesAgeEnfantRates()->where('tl_policies_age_enfant_id', $ageEnfant->id)->first() ? $rate->tlPoliciesAgeEnfantRates()->where('tl_policies_age_enfant_id', $ageEnfant->id)->first()->price : 0;
                        $dec = isset($discountInfant[$ageEnfant->id]) ? $discountInfant[$ageEnfant->id] : 0;
                        $com = isset($commissionInfant[$ageEnfant->id]) ? $commissionInfant[$ageEnfant->id] : 0;
                        $infant += ($priceInfant * $child) + $com - $dec;
                        $commission+=$com;
                    }
                }
            }
        }

        return ["price"=>$infant,"commission"=>$commission];
    }

    public function priceSupplement($supplements, $passengers, $hotel)

    {
        $priceSup = 0;
        $adult = $this->numberOfPassengerType($passengers, $hotel, "adults");
        foreach ($supplements as $supplement) {
            //$supplement->commission marge type_marge
            $commission = $supplement->marge;
            if ($supplement->type_supplement == "pax") {

                $priceSup += $this->somePriceSupp($supplement->price_adult, $supplement, $adult);
                $priceInfant["Baby"] = $supplement->price_baby;
                $priceInfant["Minor"] = $supplement->price_minor;
                $priceInfant["Child"] = $supplement->price_child;
                foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
                    $priceSup += $this->somePriceSupp($priceInfant[$ageEnfant->TypeEnfant], $supplement, $passengers[$ageEnfant->TypeEnfant]);
                }


            } else {
                if ($supplement->type_marge == 1) {
                    $commission = ($supplement->price_prestation * $supplement->marge) / 100;
                }
                $priceSup += $supplement->price_prestation + $commission;
            }
        }
        return $priceSup;
    }

    public function priceRoom($hotel, $room, $prices, $tax, $priceSup, $passengers, $chickIn, $chickOut, $min)
    {
        $price = 0;
        $commission=0;
        $infant = 0;
        $data=[];

        if ($room->typeBay == 1 or $room->typeBay == 2) {
            $taxPrice = 0;

            foreach ($prices as $rate) {
                $b = $this->minStay($rate, $chickIn, $chickOut);

                if ($b) {
                    $price += $this->hotelPriceStandard($rate, $room, $chickIn, $chickOut)["price"];

                    $commission += $this->hotelPriceStandard($rate, $room, $chickIn, $chickOut)["commission"];
                    $taxPrice += $tax['adults'] * $this->numberOfPassenger($passengers, "adults", $hotel);
                    $taxPrice += $tax['child'] * $this->numberOfPassenger($passengers, "child", $hotel);
                    $infant += $this->infantPrice($rate, $room, $hotel, $chickIn, $chickOut, $passengers)["price"];
                    $commission +=  $this->infantPrice($rate, $room, $hotel, $chickIn, $chickOut, $passengers)["commission"];
                }


            }



            if ($room->typeBay == 1)
                $price = $price + $priceSup + $infant;
            else
                $price = ($price * $passengers["adults"]) + $priceSup + $infant;

            $price = $price + $taxPrice;
            if ($min > $price) {
                if ($price > 0)
                    $min = $price;
            }

        }
        else {

            switch ($passengers["adults"]) {
                case(1):
                    foreach ($prices as $rate) {
                        $b = $this->minStay($rate, $chickIn, $chickOut);
                        if ($b) {
                            $price += $this->hotelPriceConfig($rate->single, $room, $chickIn, $chickOut, $rate)["price"];
                            $commission += $this->hotelPriceConfig($rate->single, $room, $chickIn, $chickOut, $rate)["commission"];
                            if ($this->numberOfPassenger($passengers, "child", $hotel) !== 0) {
                                $price += $this->infantPrice($rate, $room, $hotel, $chickIn, $chickOut, $passengers)["price"];
                                $commission += $this->infantPrice($rate, $room, $hotel, $chickIn, $chickOut, $passengers)["commission"];
                            }
                            $price += $tax['adults'] * $this->numberOfPassenger($passengers, "adults", $hotel);
                            $price += $tax['child'] * $this->numberOfPassenger($passengers, "child", $hotel);                        }
                    }
                    $price += $priceSup;
                    break;
                case(2):
                    foreach ($prices as $rate) {
                        $b = $this->minStay($rate, $chickIn, $chickOut);
                        if ($b) {
                            $price += $this->hotelPriceConfig($rate->double, $room, $chickIn, $chickOut, $rate)["price"] * 2;
                            $commission += $this->hotelPriceConfig($rate->double, $room, $chickIn, $chickOut, $rate)["commission"] * 2;
                            if ($this->numberOfPassenger($passengers, "child", $hotel) !== 0) {
                                $price += $this->infantPrice($rate, $room, $hotel, $chickIn, $chickOut, $passengers)["price"];
                                $commission += $this->infantPrice($rate, $room, $hotel, $chickIn, $chickOut, $passengers)["commission"];
                            }
                            $price += $tax['adults'] * $this->numberOfPassenger($passengers, "adults", $hotel);
                            $price += $tax['child'] * $this->numberOfPassenger($passengers, "child", $hotel);                        }
                    }


                    $price += $priceSup;
                    break;
                case(3):
                    foreach ($prices as $rate) {
                        $b = $this->minStay($rate, $chickIn, $chickOut);
                        if ($b) {
                            $price += $this->hotelPriceConfig($rate->triple, $room, $chickIn, $chickOut, $rate)["price"] * 3;
                            $commission += $this->hotelPriceConfig($rate->triple, $room, $chickIn, $chickOut, $rate)["commission"] * 3;
                            if ($this->numberOfPassenger($passengers, "child", $hotel) !== 0) {
                                $price += $this->infantPrice($rate, $room, $hotel, $chickIn, $chickOut, $passengers)["price"];
                                $commission += $this->infantPrice($rate, $room, $hotel, $chickIn, $chickOut, $passengers)["commission"];
                            }
                            $price += $tax['adults'] * $this->numberOfPassenger($passengers, "adults", $hotel);
                            $price += $tax['child'] * $this->numberOfPassenger($passengers, "child", $hotel);                        }
                    }
                    $price += $priceSup;

                    break;
                case(4):
                    foreach ($prices as $rate) {
                        $b = $this->minStay($rate, $chickIn, $chickOut);
                        if ($b) {
                            $price += $this->hotelPriceConfig($rate->quadruple, $room, $chickIn, $chickOut, $rate)["price"] * 4;
                            $commission += $this->hotelPriceConfig($rate->quadruple, $room, $chickIn, $chickOut, $rate)["commission"] * 4;
                            if ($this->numberOfPassenger($passengers, "child", $hotel) !== 0) {
                                $price += $this->infantPrice($rate, $room, $hotel, $chickIn, $chickOut, $passengers)["price"];
                                $commission += $this->infantPrice($rate, $room, $hotel, $chickIn, $chickOut, $passengers)["commission"];
                            }
                            $price += $tax['adults'] * $this->numberOfPassenger($passengers, "adults", $hotel);
                            $price += $tax['child'] * $this->numberOfPassenger($passengers, "child", $hotel);                        }
                    }
                    $price += $priceSup;
                    break;
            }
        }

        $cancelCondition = "";
        foreach ($room->tlCancelConditions->sortBy("conditionDay") as $condition) {

            if ($condition->percentageTaxe == 0) {
                $cancelCondition = "Annulation gratuite";
            }elseif($condition->percentageTaxe == 100){
                $cancelCondition = "Non remboursable";
            }else{
                $cancelCondition = "Flexible";
            }

        }

        //Early booking réservation hôtel contrat
        $promo = $room->tlPromos()->where('startDate', '<=', $chickIn->format("Y-m-d"))
                                    ->where('endDate', '>=', $chickOut->format("Y-m-d"))
                                    ->first();
        $type = '';
        $discount = '';
        $minStay = '';
        if ($promo) {
        if($promo->deadline){
        if($promo->deadline >= Carbon::today()->format('Y-m-d')){
            if ($promo->minStay <= $chickIn->diffInDays($chickOut)) {
                if ($promo->typePromo == 1) {
                    $type = '%';
                }else{
                    $type = 'dh';
                }
                $discount = $promo->discount;
                $minStay = $promo->minStay;
            }
        }
        }else{
        if ($promo->minStay <= $chickIn->diffInDays($chickOut)) {
            if ($promo->typePromo == 1) {
                $type = '%';
            }else{
                $type = 'dh';
            }
            $discount = $promo->discount;
            $minStay = $promo->minStay;
        }
        }

        }

        if ($min >= $price) {
            if ($price > 0){
                $data["price"] = $price;
                $data["commission"] = $commission;
                $data["discount"] = $discount;
                $data["minStay"] = $minStay;
                $data["type"] = $type;
                $data["condition"] = $cancelCondition;
            }

        }

        return $data;

    }

    private function numberOfPassenger($passenger, $type = null, $hotel = null)
    {

        $adult = $passenger["adults"];
        $child = 0;
        if (isset($hotel)) {
            foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
                if($ageEnfant->TypeEnfant !== "Baby")
                $child += $passenger[$ageEnfant->TypeEnfant];
            }
        }

        if ($type == "adults")
            return $adult;
        elseif ($type == "child")
            return $child;
        else
            return $adult + $child;
    }

    public function passengersOfRoom($rooms, $hotel,$type=null)
    {
        $result = [];
        foreach ($rooms as $room) {

            $result[] = $this->numberOfPassengerType($room, $hotel);
        }
        return $result;
    }

    public function allPassengersRooms($rooms, $hotel)
    {
        $result["adults"] = 0;
        foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
            $result[$ageEnfant->TypeEnfant] = 0;
        }
        foreach ($rooms as $room) {
            $result["adults"] += $room["adults"];
            foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
                $result[$ageEnfant->TypeEnfant] += $room[$ageEnfant->TypeEnfant];
            }
        }
        return $result;
    }

    private function numberOfPassengerType($passenger, $hotel, $type = null)
    {

        $adult = $passenger["adults"];
        $passengers["Baby"] = 0;
        $passengers["Child"] = 0;
        $passengers["Minor"] = 0;
        foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
            $passengers[$ageEnfant->TypeEnfant] = 0;
        }
        // dd($passenger['children']);
        if (isset($passenger['children'])) {
            for ($i = 0; $i < $passenger['children']; $i++) {
                $c = 0;
                foreach ($hotel->tlPoliciesAgeEnfants as $ageEnfant) {
                    if ($passenger['childrenAges'][$i] >= $ageEnfant->startAge && $passenger['childrenAges'][$i] < $ageEnfant->endAge) {
                        $passengers[$ageEnfant->TypeEnfant] += 1;
                        $c++;
                    }
                }
                if ($c == 0)
                    $adult++;
            }
        }
        $passengers["adults"] = $adult;

        if ($type) {
            return isset($passengers[$type]) ? $passengers[$type] : 0;
        } else
            return $passengers;

    }

    private function somePriceSupp($prices, $sup, $passenger)
    {
        $price = 0;
        $commission = $sup->marge;
        if ($prices) {
            if ($sup->type_marge == 1) {
                $commission = ($prices * $sup->marge) / 100;
            }
            $price = ($prices + $commission) * $passenger;
        }
        return $price;
    }

    private function minStay($rate, $chickIn, $chickOut)
    {
        $b = true;
        if ($rate->minStay) {
            $b = false;
            if ($rate->minStayNbre <= $chickIn->diffInDays($chickOut)) {
                $b = true;
            }
        }
        return $b;
    }

    public function pensionPrice($pension)
    {
        $marge = $pension->marge;
        $margeAdult = 0;
        $margeChild = 0;
        $margeBaby = 0;
        $margeMinor = 0;
        if ($pension->type_marge == 1) {
            $margeAdult = ((int)$pension->buy_price_adult * $pension->marge) / 100;
            $margeChild = ((int)$pension->buy_price_child * $pension->marge) / 100;
            $margeBaby = ((int)$pension->buy_price_baby * $pension->marge) / 100;
            $margeMinor = ((int)$pension->buy_price_minor * $pension->marge) / 100;
        }
        $price["adults"] = $pension->type_marge == 1 ? (int)$pension->buy_price_adult + $margeAdult : (int)$pension->buy_price_adult + $marge;
        $price["Child"] = $pension->type_marge == 1 ? (int)$pension->buy_price_child + $margeChild : (int)$pension->buy_price_child + $marge;
        $price["Baby"] = $pension->type_marge == 1 ? (int)$pension->buy_price_baby + $margeBaby : (int)$pension->buy_price_baby + $marge;
        $price["Minor"] = $pension->type_marge == 1 ? (int)$pension->buy_price_minor + $margeMinor : (int)$pension->buy_price_minor + $marge;
        return $price;
    }
}
