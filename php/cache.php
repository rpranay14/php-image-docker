<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Directory for cache files
$cache_dir = 'cache';
$cache_key = isset($_GET['key']) ? $_GET['key'] : 'default';
$cache_file = $cache_dir . '/' . md5($cache_key) . '.cache';

// Ensure the cache directory exists
if (!is_dir($cache_dir)) {
    if (!mkdir($cache_dir, 0777, true)) {
        die('Failed to create cache directory');
    }
}

// Check if cache file exists and is valid
if (file_exists($cache_file) && time() - filemtime($cache_file) < 60) {
    // Serve from cache
    header('X-Cache: HIT');
    readfile($cache_file);
} else {
    // Fetch and cache
    ob_start();

    // Simulated fetch
    $data = isset($_GET['data']) ? $_GET['data'] : 'No data provided';

    // Output data
    echo $data;

    // Cache the output
    file_put_contents($cache_file, ob_get_clean());
    header('X-Cache: MISS');
}
?>
