<?php

$passwords = require '../includes/dbpasswords.php';

$servername = $passwords['servername'];
$database = $passwords['database']; 
$username = $passwords['username'];
$password = $passwords['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

define("BASE_URL", "/ANIME_WEBSITE");
define("BASE_URL_BO", BASE_URL . "/bo");
define("BASE_URL_IMAGES", BASE_URL . "/images");
?>
