<?php

$storeKey = "$_POST['storeKey']";


$postParams = array();
foreach ($_POST as $key => $value) {
    array_push($postParams, $key);
}

natcasesort($postParams);
$hach = "";
$hashval = "";
foreach ($postParams as $param) {
    $paramValue = html_entity_decode(preg_replace("/\n$/", "", $_POST[$param]), ENT_QUOTES, 'UTF-8');

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

$retrievedHash = $_POST["HASH"];
if ($retrievedHash == $actualHash && $_POST["ProcReturnCode"] == "00") {
    $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
    $myfile = fopen("POSTAUTH/payment.txt", "w+") or die("Unable to open file!");
    fwrite($myfile, $_POST);
    fclose($myfile);
    echo "ACTION=POSTAUTH";
} else {
    $generated_date = (new \DateTime())->format('Y-m-d_H-i-s');
    $myfile = fopen("APPROVED/payment.txt", "w+") or die("Unable to open file!");
    fwrite($myfile, $_POST);
    fclose($myfile);
    echo "APPROVED";
}
?>
