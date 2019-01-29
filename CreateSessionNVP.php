<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://gateway.test.nab.com.au/api/nvp/version/47",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "apiOperation=CREATE_SESSION&merchant=TESTVICTESNB237&lineOfBusiness=test_socks&apiUsername=merchant.TESTVICTESNB237&apiPassword=0bd615aa1fb802904bfdc102581f659e",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Basic bWVyY2hhbnQuVEVTVE9QVElDQUw6ZTM3YTg2YzMxMDk4ZWM0YzQ4OTc3YWMxYTNlMzhmNzA=,Basic bWVyY2hhbnQuVEVTVFZJQ1RFU05CMjM3OjBiZDYxNWFhMWZiODAyOTA0YmZkYzEwMjU4MWY2NTll",
    "Postman-Token: eda7da8f-09af-436c-8b15-19e42a7941c1",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

parse_str($response);
echo "<br>".$merchant."<br>";
echo $result."<br>";
echo $session_id."<br>";
echo $session_updateStatus."<br>";
echo $session_updateStatus."<br>";
echo $session_version;
?>
