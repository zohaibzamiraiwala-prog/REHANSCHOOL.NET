<?php
$host = 'localhost'; // Assuming standard localhost; change if different
$username = 'unkuodtm3putf';
$password = 'htk2glkxl4n4';
$dbname = 'dbhorehhsefpnh';
 
$conn = new mysqli($host, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
// Set charset to UTF-8 for proper encoding
$conn->set_charset("utf8mb4");
?>
