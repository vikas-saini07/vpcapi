<?php
include '_bootstrap.php'
$curl = curl_init();
//$username = "merchant.TESTVICTESNB237";
//$password = "ed17a6e2ed43172c0f7bde912cbe54de";
$newdata = array("lineOfBusiness" => "test_socks");
$postdata = json_encode($newdata);
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://${prefix}gateway.mastercard.com/api/rest/version/${apiVersion}/merchant/${merchantId}/session",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 100,
  CURLOPT_TIMEOUT => 400,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  //CURLOPT_POSTFIELDS => "$postdata",
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Basic ' . base64_encode("$username:$password")
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
/*parse_str($response);
echo "<br>".$merchant."<br>";
echo $result."<br>";
echo $session_id."<br>";
echo $session_updateStatus."<br>";
echo $session_updateStatus."<br>";
echo $session_version;*/
?>
