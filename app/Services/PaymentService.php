<?php

namespace App\Services;


class PaymentService
{

    public static function IsPayment($data,$storeKey)
    {
        $postParams = array();
        foreach ($data as $key => $value) {
            array_push($postParams, $key);
        }
        natcasesort($postParams);
        $hach = "";
        $hashval = "";
        foreach ($postParams as $key => $param) {
            $paramValue = html_entity_decode(preg_replace("/\n$/", "", $data[$param]), ENT_QUOTES, 'UTF-8');
            $hach = $hach . "(!" . $param . "!:!" . $_POST[$param] . "!)";
            $escapedParamValue = str_replace("|", "\\|", str_replace("\\", "\\\\", $paramValue));

            $lowerParam = strtolower($param);
            if ($lowerParam != "hash" && $lowerParam != "encoding") {
                $hashval = $hashval . $escapedParamValue . "|";
            }
        }

        $escapedStoreKey = str_replace("|", "\\|", str_replace("\\", "\\\\", $storeKey));
        $hashval = $hashval . $escapedStoreKey;

        $calculatedHashValue = hash('sha512', $hashval);
        $actualHash = base64_encode(pack('H*', $calculatedHashValue));

        $retrievedHash = $data["HASH"];
        if ($retrievedHash == $actualHash) {

            return true;

        }else{

            return false;

        }
    }
}
