<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connect to MySQL database
$mysqli = new mysqli("db", "root", "rootpassword", "Challenge");

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Retrieve the 'id' parameter from the URL
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Default query
$query = "SELECT * FROM loans WHERE id = $id";

// Execute the query
$result = $mysqli->query($query);

// Initialize variable for result
$data = [];

// Fetch data from the result
if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        // No rows found for specific id
        $data[] = ['message' => '0 results found'];
    }
    $result->free();
} else {
    echo "Error executing query: " . $mysqli->error;
}

// Close the MySQL connection
$mysqli->close();
// Return data to be used in about.php

// Convert PHP data to JSON format for use in JavaScript
$dataJson = json_encode($data);
?>

