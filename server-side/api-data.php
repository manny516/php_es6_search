<?php
//Create a connection to the API and output the Data results

$api_key = "3A50C1D7-82FB-425C-92F1-5B2922288DA7";
$url ='https://maps.foundationcenter.org/api/hip/getTopFunders.php?apiKey='.$api_key.'&end_year=2017&top=500.';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
$result = curl_exec($curl);

if(!$result){
    die("Connection Failure");
}
curl_close($curl);

$results = json_decode($result); 