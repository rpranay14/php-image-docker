<?php
$uploadDir = '/Applications/XAMPP/xamppfiles/etc/uploads/'; // Adjust this path as needed
$message = '';
// Check if form is submitted and file is uploaded
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {

    // Check for upload errors
    if ($_FILES["file"]["error"] != UPLOAD_ERR_OK) {
        echo "Upload Error: " . $_FILES["file"]["error"];
        exit();
    }

    // Move uploaded file to destination directory
    $fileName = $_FILES["file"]["name"];
    $tempFilePath = $_FILES["file"]["tmp_name"];
    $newFileName = uniqid() . '_' . $fileName; // Generate unique file name
    $targetPath = $uploadDir . $newFileName;

    // Attempt to move the uploaded file
    if (move_uploaded_file($tempFilePath, $targetPath)) {
        echo "File uploaded successfully.";
    } else {
        echo "Sorry, there was an error uploading your file: " . error_get_last()['message'];
    }
} else {
    echo "Invalid request.";
}
?>
