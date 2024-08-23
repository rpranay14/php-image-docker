<?php
// Database configuration
define('DB_SERVER', 'db');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'rootpassword');
define('DB_NAME', 'Challenge');

// Create connection
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

error_reporting(E_ALL);
ini_set('display_errors', 1);
// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash password
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Attempt insert query execution
    $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "Records added successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}

// Close connection
mysqli_close($conn);
?>
