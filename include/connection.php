<?php
$servername = "localhost";
$username = "techcraf";
$password = "mQ0kh06x8R";
$dbname = "techcraf_tech_craft";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
