<?php
$uploadDir = '/Applications/XAMPP/xamppfiles/htdocs/preyfinance/uploads/'; // Adjust this path as needed

// Check if filename parameter exists in URL
if (isset($_GET['filename'])) {
    $filename = $_GET['filename'];

    // Validate filename to prevent directory traversal
    // Allow alphanumeric characters, underscores, hyphens, spaces, dots, and parentheses
    if (preg_match('/^[a-zA-Z0-9_\s\-\.\(\)]+$/', $filename)) { // Adjusted regex
        $filePath = $uploadDir . $filename;

        // Check if the file exists and is readable
        if (file_exists($filePath) && is_readable($filePath)) {
            // Set appropriate headers
            header('Content-Type: ' . mime_content_type($filePath));
            header('Content-Length: ' . filesize($filePath));

            // Output the file content
            readfile($filePath);
            exit;
        } else {
            echo "File not found or inaccessible.";
        }
    } else {
        echo "Invalid filename.";
    }
} else {
    echo "Filename parameter missing.";
}
?>
