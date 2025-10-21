<?php
function call_api($endpoint) {
    $url = "https://api.alquran.cloud/v1/" . $endpoint;

    // Use file_get_contents with a stream context as a fallback for cURL
    $options = [
        'http' => [
            'method' => "GET",
            'header' => "User-Agent: Quran-App-Jules\r\n"
        ]
    ];
    $context = stream_context_create($options);
    $output = file_get_contents($url, false, $context);

    if ($output === FALSE) {
        // You might want to add more robust error handling here
        return null;
    }

    return json_decode($output, true);
}
?>