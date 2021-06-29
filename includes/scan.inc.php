<?php

require '../vendor/autoload.php';


if(isset($_POST["scan"])){
  $givenLink = trim($_POST["givenLink"]);

  require_once 'dbh.inc.php';

  $ip = gethostbyname("$givenLink");

  // api from abuseipdb
  $client = new GuzzleHttp\Client([
  'base_uri' => 'https://api.abuseipdb.com/api/v2/'
]);

$response = $client->request('GET', 'check', [
    'query' => [
        'ipAddress' => "$ip",
        'maxAgeInDays' => '90',
    ],
    'headers' => [
        'Accept' => 'application/json',
        'Key' => 'd6205265eebc72be0c4b3e8247f807b40c30aed1dc920cf8a8260b01ce3b29ed13ff6328c3d0aded'
  ],
]);

$output = $response->getBody();
// Store response as a PHP object.
$ipDetails = json_decode($output, true);
$threatLevel = $ipDetails["data"]["abuseConfidenceScore"];
$reportCount = $ipDetails["data"]["totalReports"];
$isp = $ipDetails["data"]["isp"];
$countryCode = $ipDetails["data"]["countryCode"];
$dn = $ipDetails["data"]["domainName"];

// print_r($ipDetails);
// echo "$threatLevel $reportCount $isp $countryCode";
if ($threatLevel) {
  session_start();
  $_SESSION["scanResults"] = array('threatLevel' => "$threatLevel" , 'reportCount' => "$reportCount", 'isp' => "$isp", 'countryCode' => "$countryCode", 'dn' => "$dn" );

  header("location: ../index.php?error=none");
}else {
  header("location: ../index.php?error=no");
}





}else {
  header("location: ../index.php");
}






 ?>
