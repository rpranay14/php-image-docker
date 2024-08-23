<?php
$uploadDir = '/Applications/XAMPP/xamppfiles/htdocs/uploads/'; // Directory where images are stored

if (!isset($_GET['file'])) {
    die('No file specified.');
}

$file = $_GET['file'];
$path = $uploadDir . $file;

// Check if the file exists
if (!is_file($path)) {
    die('File does not exist.');
}

// Display the image
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: public');
header('Content-Disposition: inline; filename="' . basename($path) . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($path));
header('Content-Type: ' . mime_content_type($path));

$handle = fopen($path, 'rb');
while (!feof($handle)) {
    echo fread($handle, 8192);
}
fclose($handle);
exit();
?>
