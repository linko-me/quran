<?php
function call_api($endpoint) {
    $url = "https://api.alquran.cloud/v1/" . $endpoint;
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    return json_decode($response, true);
}
?>