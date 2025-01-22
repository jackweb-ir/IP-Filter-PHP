<?php




/*
    In this variable *$ipWhite*, which is an array, write the IPs that you want to pass through the filter of this script and be included in the whitelist so that these IPs are not considered and allowed to bypass the filters.
*/

$ipWhite = [
    '1.1.1.1',
    '2.2.2.2',
];

#---------------------------

/*
    In the variable *$textError*, a message is written that is used to display an error, and by changing this text, you can manage your error.
*/

$textError = "Please only make requests with an IP from the country of Iran.";








// ------------------ Main code ------------------------//
$ipRequest = $_SERVER['REMOTE_ADDR'] ?? die($textError);
$nameFileBlock = "ip-block.txt";
$urlIpCheck = "http://ip-api.com/json/" . $ipRequest;
$ipBlocks = file_exists($nameFileBlock) ? json_decode(file_get_contents($nameFileBlock), true) : [];

if (is_array($ipBlocks) != true)
    $ipBlocks = [];

$checkIpWhite = in_array($ipRequest, $ipWhite);

if (in_array($ipRequest, $ipBlocks) and $checkIpWhite != true)
    die($textError);

$getIpCheck = json_decode(file_get_contents($urlIpCheck), true);

if ($getIpCheck['status'] == "success" and $getIpCheck['countryCode'] != 'IR' and $checkIpWhite != true) {

    if (in_array($ipRequest, $ipBlocks) != true) {

        array_push($ipBlocks, $ipRequest);

        file_put_contents($nameFileBlock, json_encode($ipBlocks));
    }

    die($textError);
}
