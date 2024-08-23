<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Challenge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

header('Content-Type: application/json');

$username = $_GET['username'] ?? '';
$response = ['found' => false];

if (!empty($username)) {
    $stmt = $conn->prepare("SELECT fullname, email FROM users WHERE fullname = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $response['found'] = true;
        $response['user'] = $result->fetch_assoc();
    }
    $stmt->close();
}

echo json_encode($response);
$conn->close();
?>
