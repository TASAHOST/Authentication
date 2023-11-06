<?php
// Database configuration
$servername = 'localhost';     // Change this if  MySQL server is running on a different host
$username = 'root';             //  MySQL username
$password = '';                 //  MySQL password (leave it empty if you don't have a password)
$database = 'authentication';    //  database name

// Create a connection to the database
$db = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Set character set to UTF-8 (if needed)
if (!$db->set_charset("utf8")) {
    die("Error loading character set utf8: " . $db->error);
}
?>