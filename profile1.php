<!-- profile.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        .photo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            grid-gap: 10px;
            justify-items: center;
        }
        .photo-item img {
            max-width: 100%;
            height: auto;
            display: block;
        }
    </style>
</head>
<body>
    <h1>User Profile</h1>

    <div class="photo-grid">
        <?php
        $uploadDir = '/Applications/XAMPP/xamppfiles/htdocs/preyfinance/uploads/'; // Adjust this path as needed

        // Check if directory exists and is readable
        if (!is_dir($uploadDir) || !is_readable($uploadDir)) {
            die("Error: Upload directory is not accessible.");
        }

        // Fetch all files in the uploads directory
        $files = glob($uploadDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        // Check if files were found
        if (!$files || count($files) === 0) {
            echo "<p>No photos found.</p>";
        } else {
            // Display each file as an image with a link to download.php
            foreach ($files as $file) {
                $filename = basename($file);
                $photoURL = '/preyfinance/php/download.php?filename=' . urlencode($filename); // Use download.php with filename parameter
                echo '<div class="photo-item">';
                echo '<a href="' . $photoURL . '" target="_blank"><img src="' . $photoURL . '" alt="Photo"></a>';
                echo '</div>';
            }
        }
        ?>
    </div>
</body>
</html>
