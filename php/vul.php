<?php
// Assume these are user inputs (insecurely handled)
$filename = $_GET['file'] ?? '';  // User input, not sanitized

// Directory where files are stored
$upload_dir = "/Applications/XAMPP/xamppfiles/uploads/";

// Validate the filename to prevent directory traversal
$allowed_files = array("file1.txt", "file2.txt", "file3.txt"); // Example whitelist of allowed files

if (in_array($filename, $allowed_files)) {
    // Construct full file path
    $file_path = $upload_dir . $filename;
 

    // Display the file contents if file exists
    if (file_exists($file_path) && is_readable($file_path)) {
        echo "File contents of " . htmlspecialchars($filename) . ":<br>";
        echo nl2br(file_get_contents($file_path));
    } else {
        echo "File does not exist or is not readable.";
    }
} else {
    echo "Invalid file name.";
}
?>
