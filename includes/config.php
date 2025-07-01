<?php

$passwords = require 'dbpasswords.php';

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