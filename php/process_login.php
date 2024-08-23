<?php
session_start();
// Database configuration
define('DB_SERVER', 'db');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'rootpassword');
define('DB_NAME', 'Challenge');

// Create connection
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn === false) {
    echo "Database connection error: " . mysqli_connect_error();
    exit();
}

// Process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Unsafe query (no validation or prepared statements)
    $sql = "SELECT id, email, password FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            // Login successful
            //echo "Login successful.";
            $_SESSION['email']=$email;
            header("location:dashbaord.php");
           //header("Location: dashboard.php");
            //exit();
            // Optionally, set session variables or perform additional actions here
        } else {
            // Login failed
            echo "Login failed. Invalid email or password.";
        }
    } else {
        // SQL error
        echo "Database connection error.";
    }

    // Close connection
    mysqli_close($conn);
}
?>
