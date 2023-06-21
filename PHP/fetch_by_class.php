<?php

$id = 1; // Sınıf ID

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://api.dersplus.net/ogm/ders-kitaplari/fetch-by-class");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "id=$id");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close ($ch);

print_r($server_output);

?>
