<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

// Kap serveri het
$conn = new mysqli($servername, $username, $password, $database);

// Kapi stugum
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";
