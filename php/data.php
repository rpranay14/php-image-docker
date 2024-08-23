<?php
session_start();
header('Content-Type: application/json');

// Get the 'X-Forwarded-For' header or fall back to server address
$host = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['SERVER_ADDR'];

// Define cache file path
$cacheFile = __DIR__ . '/cache/' . md5($host) . '.json'; // Use a hashed filename to avoid invalid characters

// Check if cache file exists and is not expired
$isCached = false;
if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < 60) {
    $isCached = true;
    $response = json_decode(file_get_contents($cacheFile), true);
} else {
    // Generate new response
    $response = [
        'fullname' => $_SESSION['fullname'] ?? 'Guest',
        'phonno'   => '87878',
        'flag'     => 'you don\'t have access to the flag',
        'host'     => $host
    ];

    // Save response to cache file
    if (!is_dir(__DIR__ . '/cache')) {
        mkdir(__DIR__ . '/cache', 0777, true);
    }
    file_put_contents($cacheFile, json_encode($response));
}

// Set the X-Cache header
header('X-Cache: ' . ($isCached ? 'HIT' : 'MISS'));

// Introduce a cache-control header with a Vary header
header('Cache-Control: public, max-age=60'); // Cache for 60 seconds
header('Vary: X-Forwarded-For');


echo json_encode($response);
?>
