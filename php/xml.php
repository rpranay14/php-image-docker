<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Function to handle the XML input safely
function loadXML($xmlData) {
    libxml_use_internal_errors(true);
    $xml = simplexml_load_string($xmlData, 'SimpleXMLElement', LIBXML_NOENT);

    if ($xml === false) {
        echo "Failed to load XML. Errors: ";
        foreach (libxml_get_errors() as $error) {
            echo $error->message . "<br>";
        }
        libxml_clear_errors();
        return false;
    }
    return $xml;
}

if (isset($_GET['xml'])) {
    $xmlData = $_GET['xml'];
    $xml = loadXML($xmlData);
    if ($xml === false) {
        // Stop execution if XML is invalid
       // require "footer.php"; // Assuming you have a footer file to close HTML tags
        die();
    }
} else {
    // Provide a valid sample XML for initial testing to avoid infinite redirect loop
    header("Location: ?xml=" . urlencode('<test>hacker</test>'));
    die();
}

//require "header.php";
?>

<div class="row">
    <div class="col-lg-12">
        <h1>XML 01</h1>
        <p>The objective of this exercise is to find the XML vulnerability in this page and use it to retrieve the key in the following file:
        <code>/hackersprey.key</code></p>
        <h3>Hello <?php echo htmlspecialchars((string)$xml, ENT_QUOTES, 'UTF-8'); ?></h3>
    </div>
</div>


