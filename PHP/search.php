<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.dersplus.net/ogm/ders-kitaplari/list-class");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close ($ch);

print_r($server_output);

?>
